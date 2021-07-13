<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function socialRedirect(Request $request, $provider)
    {
        if(!in_array($provider, ['google', 'facebook'])) {
            return redirect()->route('login')->with(['status' => __("Specified provider $provider does not exists")]);
        }

        return Socialite::driver($provider)->redirect();
    }

    public function socialCallback(Request $request, $provider)
    {
        if(!in_array($provider, ['google', 'facebook'])) {
            return redirect()->route('login')->with(['status' => __("Specified provider $provider does not exists")]);
        }

        try {
            $user = Socialite::driver($provider)->user();
            // dd($user);

            $user = User::firstOrCreate([
                'provider_type' => $provider,
                'provider_id' => $user->getId(),
            ], [
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'password' => Hash::make(Str::random(10)),
            ]);

            Auth::login($user, true);
            return redirect()->intended(config('fortify.home'));
        } catch(\Exception $e) {
            // if($user->)
            return redirect()->route('login');
        }
    }
}
