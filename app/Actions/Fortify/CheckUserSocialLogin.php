<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\Request;

class CheckUserSocialLogin {
    public function __invoke(Request $request, $next)
    {
        $data = $request->validate(['email' => 'email']);
        $user = User::where('email', $data['email'])->first();
        if(! $user) return redirect('/my/login')->with(['status' => "No user found with provided email"]);
        if($user && $user->provider_type !== 'email') {
            return redirect('/my/login')->with(['status' => "Email authentication is not found with this id. May be you should try with ".ucfirst($user->provider_type)." login"]);
        }
        else {
            return $next($request);
        }
    }
}
