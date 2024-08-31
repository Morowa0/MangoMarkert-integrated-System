<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showRegistrationForm()
    {
        $operations = ['+', '-'];
        $operation = $operations[array_rand($operations)];

        $num1 = rand(1, 10);
        $num2 = rand(1, 10);

        session(['captcha_operation' => $operation, 'captcha_num1' => $num1, 'captcha_num2' => $num2]);

        return view('auth.register', compact('num1', 'num2', 'operation'));
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $operation = session('captcha_operation');
        $num1 = session('captcha_num1');
        $num2 = session('captcha_num2');
        $answer = $data['captcha_answer'];

        $correctAnswer = match($operation) {
            '+' => $num1 + $num2,
            '-' => $num1 - $num2,
            default => null,
        };

        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'regex:/^0[0-9]{9}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'captcha_answer' => ['required'],
        ], [
            'phone.required' => 'The phone number field is required.',
            'phone.regex' => 'The phone number must start with 0 and be exactly 10 digits long.'
        ]);

        if ($correctAnswer != $answer) {
            $validator->after(function ($validator) {
                $validator->errors()->add('captcha_answer', 'Wrong result of the arithmetic operation.');
            });
        }

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone'=>$data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();

        return redirect('/login')->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
    }

}
