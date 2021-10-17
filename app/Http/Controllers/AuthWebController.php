<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthWebController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest'])->except('logout');
    }

    public function login(){
        return view('login');
    }
    
    public function loginStore(Request $request){
        $this->validate($request, [
            'email' => 'required|max:255|email',
            'password' => 'required'
        ]);
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid Login Details');
        }
        
        
        if(auth()->user()->isAdmin()){
            return redirect()->route('admin');
        }

        
        return redirect()->route('landingWeb')->with('success', 'Login Success');
    }
    
    
    public function register(){
        return view('register');
    }
    
    public function registerStore(Request $request){
        $this->validate($request, [
            'email' => 'required|max:255|email|exists:mysql.users,email',
            'name' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);
        
        auth()->attempt($request->only('email', 'password'));


        
        return redirect()->route('login')->with('success', 'Register Success');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('landingWeb')->with('success', 'Logout Success');
    }
}
