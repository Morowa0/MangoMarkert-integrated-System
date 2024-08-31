<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Mangotype;
use App\Models\Orderrequest;
use App\Models\Approved_order;
use App\Models\Completed_order;
use App\Models\Escalated_order;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BuyersController extends Controller
{

    public function buyershome(){
        if (Auth::check()) {
            if (Auth::user()->usertype === '1') {
                return view('buyers.home');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->route('login');
        }
        
   }
   public function addmango(){
    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            return view('buyers.add_product');
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
}
public function waitingorder(){ 
    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            $product = Orderrequest::where('buyer_id', auth()->id())->get();
            return view('buyers.pending',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
   
}
public function escalated(){ 
    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            $product = Escalated_order::where('buyer_id', auth()->id())->get();
            return view('buyers.escalated',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
}
public function commit(){ 
    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            $product = Completed_order::where('buyer_id', auth()->id())->get();
            return view('buyers.commit',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
   
}
public function confirmed(){ 

    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            $product = Approved_order::where('buyer_id', auth()->id())->get();
            return view('buyers.approvedorder',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
   
}
public function showvariety(){
    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            $product = Mangotype::where('buyer_id', auth()->id())->get();
            return view('buyers.variety',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
    
   
}

public function updateprice($id){
    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            $data=Mangotype::find($id);
            return view('buyers.updateprice',compact('data'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
    
   
}
public function addtype(Request $request)
{
    // Validate the request data
    $request->validate([
        'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'typename' => 'required|string|max:255',
        'duration' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'buyer_id' => 'required|exists:users,id',
    ]);

    $type = new Mangotype; 

    // Check if an image file is uploaded
    if ($request->hasFile('image')) {
        $image = $request->file('image'); 

        // Generate a unique name for the image
        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Move the uploaded file to a directory
        $image->move(public_path('mangotypes'), $imageName);

        // Save the image name to the database
        $type->image = $imageName;
    } 
    else
    {
        $type->image = ''; // Or handle this as needed
    }

    // Set other attributes of the MangoType model
    $type->buyer_id = $request->buyer_id;
    $type->price = $request->price;
    $type->duration = $request->duration;
    $type->name = $request->typename; 

    // Save the MangoType model to the database
    $type->save();

    return redirect()->back()->with('message', 'Mango type added successfully.');
}
public function editprice(Request $request,$id){
    $type=Mangotype::find($id);
    $type->buyer_id = $request->buyer_id;
    $type->price = $request->price;
    $type->duration = $request->duration;
    $type->name = $request->typename;
    $type->save();
    return redirect()->back()->with('message', 'You have updated the price successfully.');
}
public function approveOrder($id)
{
    $order = Orderrequest::findOrFail($id);

    // Check if status is not already approved
    if ($order->status !== 'approved') {

        // Get the authenticated buyer
        $buyer = Auth::user();

        // Get the buyer's daily limit from the users table
        $buyerDailyLimit = $buyer->daily_limit; // Assuming 'daily_limit' is the column name

        // Start checking from the following day
        $date = Carbon::now()->addDay();

        // Check if the quantity on the order exceeds the buyer's daily limit
        if ($order->quantity > $buyerDailyLimit) {
            return redirect()->back()->withErrors('The order is too big.');
        }

        // Loop until an available date is found
        while (true) {
            // Sum the quantities of existing orders for this buyer on the date
            $existingOrders = DB::table('approved_orders')
                ->where('buyer_id', $buyer->id)
                ->where('order_date', $date->toDateString())
                ->sum('quantity');

            // Check if the new order can be added without exceeding the buyer's daily limit
            if ($existingOrders + $order->quantity <= $buyerDailyLimit) {
                $order->order_date = $date->toDateString();
                break;
            }

            // Move to the next day
            $date->addDay();
        }

        // Generate order number
        $order->order_number = strtoupper(uniqid('ORDER-'));

        // Update status to approved
        $order->status = 'approved';

        // Move the order to the approved table
        DB::transaction(function () use ($order) {
            $order->save();

            DB::table('approved_orders')->insert([
                'farmer_name' => $order->farmer_name,
                'farmer_id' => $order->farmer_id,
                'buyer_name' => $order->buyer_name,
                'buyer_id' => $order->buyer_id,
                'duration' => $order->duration,
                'quantity' => $order->quantity,
                'price' => $order->price,
                'status' => $order->status,
                'county' => $order->county,
                'mango_type' => $order->mango_type,
                'order_number' => $order->order_number,
                'order_date' => $order->order_date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Remove from pending orders if needed
            DB::table('orderrequests')->where('id', $order->id)->delete();
        });
        $notification = new Notification();
        $notification->buyer_id = $order->farmer_id; // Use $order->buyer_id instead of $request->buyer_id
        $notification->message = "Your order number {$order->order_number} was approved."; // Use $order properties
        $notification->save();
        return redirect()->back()->with('message', 'Order approved successfully.');
    }

    return redirect()->back()->withErrors('Order is already approved.');
}
public function completed($id){
    // Find the order by ID
    $order = Escalated_order::findOrFail($id);
 
    // Begin transaction
    DB::transaction(function () use ($order) {
        // Insert data into escalated table
        DB::table('completed_orders')->insert([
            'farmer_name' => $order->farmer_name,
            'farmer_id' => $order->farmer_id,
            'buyer_name' => $order->buyer_name,
            'buyer_id' => $order->buyer_id,
            'duration' => $order->duration,
            'quantity' => $order->quantity,
            'price' => $order->price,
            'status' => 'completed', // Update the status if needed
            'county' => $order->county,
            'mango_type' => $order->mango_type,
            'order_number' => $order->order_number,
            'order_date' => $order->order_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
 
        // Delete the order from the approved orders table
        $order->delete();
    });
         
        // Create a notification for the buyer
        $notification = new Notification();
        $notification->buyer_id = $order->farmer_id; // Use $order->buyer_id instead of $request->buyer_id
        $notification->message = "Your order number {$order->order_number} was completed."; // Use $order properties
        $notification->save();
    // Redirect with success message
    return redirect()->back()->with('success', 'Order moved to completed orders successfully.');
 }
 public function search(Request $request)
{
    if (Auth::check()) {
        if (Auth::user()->usertype === '1') {
            $userId = Auth::id(); // Get the authenticated user's ID
            $query = $request->input('query');
            
            // Search in the Approved_order table
            $approvedOrderResults = Approved_order::where('buyer_id', $userId)
                ->where(function($q) use ($query) {
                    $q->where('order_number', 'LIKE', "%$query%")
                      ->orWhere('farmer_name', 'LIKE', "%$query%")
                      ->orWhere('status', 'LIKE', "%$query%")
                      ->orWhere('order_date', 'LIKE', "%$query%");
                })
                ->get();
        
            // Search in the Completed_order table
            $completedOrderResults = Completed_order::where('buyer_id', $userId)
                ->where(function($q) use ($query) {
                    $q->where('order_number', 'LIKE', "%$query%")
                      ->orWhere('farmer_name', 'LIKE', "%$query%")
                      ->orWhere('status', 'LIKE', "%$query%")
                      ->orWhere('order_date', 'LIKE', "%$query%");
                })
                ->get();
        
            // Search in the Escalated_order table
            $escalatedOrderResults = Escalated_order::where('buyer_id', $userId)
                ->where(function($q) use ($query) {
                    $q->where('order_number', 'LIKE', "%$query%")
                      ->orWhere('farmer_name', 'LIKE', "%$query%")
                      ->orWhere('status', 'LIKE', "%$query%")
                      ->orWhere('order_date', 'LIKE', "%$query%");
                })
                ->get();
        
            // Search in the Orderrequest table
            $orderRequestResults = Orderrequest::where('buyer_id', $userId)
                ->where(function($q) use ($query) {
                    $q->where('order_number', 'LIKE', "%$query%")
                      ->orWhere('status', 'LIKE', "%$query%");
                })
                ->get();
        
            // Combine results
            $product = $approvedOrderResults
                ->merge($completedOrderResults)
                ->merge($escalatedOrderResults)
                ->merge($orderRequestResults);
        
            return view('buyers.search_results', compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    }
   
}
public function dashboard()
{
    if (Auth::check()) {
        if (Auth::user()->usertype === '1'){
              
    $notifications = Notification::where('buyer_id', auth()->user()->id)
    ->where('is_read', false)
    ->orderBy('created_at', 'desc')
    ->get();

return view('buyers.dashboard', compact('notifications'));
        }else{
            return redirect()->back();
        }
    }else{
     return redirect()->route('login');
    }
    
}
public function markAsRead($id)
{
    $notification = Notification::find($id);
    $notification->is_read = true;
    $notification->save();

    return redirect()->back();
}

public function getUnreadCount()
    {
        $user = Auth::user();
    
        $unreadCount = Notification::where('buyer_id', $user->id)
        ->where('is_read', false)
        ->count();
        return response()->json(['unread_count' => $unreadCount]);
    }
}


