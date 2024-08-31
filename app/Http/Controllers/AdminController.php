<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminhome(){
         return view('admin.home');
    }
    public function allusers()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}
public function manufacturers()
{
    $users = User::where('usertype','1')->get();
    return view('admin.manufacturers', compact('users'));
}
public function farmers()
{
    $users = User::where('usertype','0')->get();
    return view('admin.farmers', compact('users'));
}
  
    public function about(){
        return view('about');
   }


   public function contact(){
    return view('admin.contact');
}
public function activate($id)
{
    $user = User::findOrFail($id);
    $user->status = 'active';
    $user->save();
    return redirect()->back()->with('success', 'User activated successfully.');
}

public function disable($id)
{
    $user = User::findOrFail($id);
    $user->status = 'disabled';
    $user->save();
    return redirect()->back()->with('message', 'User disabled successfully.');
}

public function delete($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->back()->with('message', 'User deleted successfully.');
}

public function changeRole(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->usertype = $request->input('role');
    $user->save();
    return redirect()->back()->with('success', 'User role changed successfully.');
}
public function updateDailyLimit(Request $request, $id)
{
    $user = User::find($id);
    $user->daily_limit = $request->daily_limit;
    $user->save();

    return redirect()->back()->with('success', 'Daily Limit updated successfully.');
}
public function showLoggedInUsers()
{
    // Retrieve users who are currently online
    $users = User::where('login_status', 'online')
                 ->whereNotNull('last_login_at')
                 ->where('last_login_at', '>=', now()->subMinutes(config('session.lifetime')))
                 ->get();

    return view('admin.logged_in_users', compact('users'));
}

public function submit(Request $request){
   //dd($request->all());
    $request->validate([
       
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'message' => 'required|string|max:255',
       
    ]);
    $type = new Message; 
    $type->email = $request->email;
    $type->message = $request->message;
    $type->name = $request->name; 
    $type->save();

     return redirect()->back()->with('message', 'Message sent successfully. We will contact you via the email provided');
}
public function messages()
{
    $users = Message::all();
    return view('admin.message', compact('users'));
}
}
