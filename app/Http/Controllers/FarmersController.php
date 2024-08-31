<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Orderrequest;
use App\Models\Approved_order;
use App\Models\Completed_order;
use Illuminate\Support\Facades\DB;
use App\Models\Mangotype;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FarmersController extends Controller
{
    public function farmershome(){
        if (Auth::check()) {
            if (Auth::user()->usertype === '0') {
                return view('farmer.home');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->route('login');
        }   
   }
   public function pendingorder(){
    if (Auth::check()) {
        if (Auth::user()->usertype === '0') {
            $product = Orderrequest::where('farmer_id', auth()->id())->get();
            return view('farmer.pendingorder',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    } 
   
   }
   public function confirmedorder(){
    if (Auth::check()) {
        if (Auth::user()->usertype === '0') {
            $product = Approved_order::where('farmer_id', auth()->id())->get();
            return view('farmer.approvedorder',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    } 

}

public function completion(){
    if (Auth::check()) {
        if (Auth::user()->usertype === '0') {
            $product = Completed_order::where('farmer_id', auth()->id())->get();
            return view('farmer.completion',compact('product'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    } 
 
}
   public function requestorder(){
    if (Auth::check()) {
        if (Auth::user()->usertype === '0') {
            $appoint = User::where('usertype', 1)->where('status', 'active')->get();

            return view('farmer.requestorder',compact('appoint'));
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->route('login');
    } 
   
   }
public function getMangoTypes($buyerId)
{
    $mangoTypes = Mangotype::where('buyer_id', $buyerId)->get(['id', 'name', 'price', 'duration']);
    return response()->json($mangoTypes);
}
public function request_order(Request $request){
    //dd($request->all());
    $request->validate([
        'farmer_id' => 'required|numeric', 
        'farmer_name' => 'required|string|max:255',
        'county' => 'required|string|max:255',
        'quantity' => 'required|numeric',  
        'mango_type' => 'required|string|max:255',
        'buyer_name' => 'required|string|max:255',
        'duration' => 'required|string',
        'price' => 'required|numeric',     
        'buyer_id' => 'required|exists:users,id',
    ]);
    $type = new Orderrequest; 
    $type->buyer_id = $request->buyer_id;
    $type->buyer_name = $request->buyer_name;
    $type->farmer_id = $request->farmer_id;
    $type->farmer_name= $request->farmer_name;
    $type->quantity= $request->quantity;
    $type->county= $request->county;
    $type->price= $request->price;
    $type->mango_type= $request->mango_type;
    $type->duration= $request->duration;
    $type->save();
     // Create a notification for the buyer
     $notification = new Notification();
     $notification->buyer_id = $request->buyer_id;
     $notification->message = "You have new order request from {$request->farmer_name} for {$request->quantity} tonnes of mangoes.";
     $notification->save();
    return redirect()->back()->with('message', 'You have successfully requested an order.');
}
public function arrived($id){
   // Find the order by ID
   $order = Approved_order::findOrFail($id);

   // Begin transaction
   DB::transaction(function () use ($order) {
       // Insert data into escalated table
       DB::table('escalated_orders')->insert([
           'farmer_name' => $order->farmer_name,
           'farmer_id' => $order->farmer_id,
           'buyer_name' => $order->buyer_name,
           'buyer_id' => $order->buyer_id,
           'duration' => $order->duration,
           'quantity' => $order->quantity,
           'price' => $order->price,
           'status' => 'arrived', // Update the status if needed
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
        $notification->buyer_id = $order->buyer_id; // Use $order->buyer_id instead of $request->buyer_id
        $notification->message = "{$order->farmer_name} of order number {$order->order_number} has arrived."; // Use $order properties
        $notification->save();
   // Redirect with success message
   return redirect()->back()->with('success', 'Order moved to escalated orders successfully.');
}
public function farmerdashboard()
{
    $notifications = Notification::where('buyer_id', auth()->user()->id)
                                 ->where('is_read', false)
                                 ->orderBy('created_at', 'desc')
                                 ->get();

    return view('farmer.dashboard', compact('notifications'));
}
}
