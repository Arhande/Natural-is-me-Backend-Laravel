<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();
        try {
            $findUser = User::where('google_id', $user->getId())->first();
            if($findUser){
                Auth::login($findUser);
                if($findUser->isAdmin()){
                    return redirect()->route('admin');
                }
                return redirect()->route('landingWeb');
            }else{
                $newUser = User::create([
                    'name'=>$user->getName(),
                    'email'=>$user->getEmail(),
                    'google_id'=>$user->getId(),
                    'password'=>Hash::make("naturalisme_" . $user->getId())
                ]);
                Auth::login($newUser);
                return redirect()->route('landingWeb');
            }
        } catch (\Throwable $th) {
            return redirect()->route('landingWeb');
        }
    }
}
