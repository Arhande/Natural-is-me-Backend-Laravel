<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest'])->except('logout');
    }

    public function login(){
        return view('user.login');
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
        return view('user.register');
    }
    
    public function registerStore(Request $request){
        // dd($request->email);
        $this->validate($request, [
            'email' => 'required|max:255|email',
            'name' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)){
            return redirect()->back()->with('status', 'Gagal Membuat Email');
        }
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
