<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User, SocialAccount;
use Auth;

class SocialiteController extends Controller
{
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social)
    {
        $socialUser = Socialite::driver($social)->user();
        if ($socialUser) {
            $user = User::userEmail($socialUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'avatar' => $socialUser->getAvatar(),
                ]);
                $social = SocialAccount::create([
                    'user_id' => $user->id,
                    'type' => $social,
                    'type_id' => $social->getId(),
                ]);
            }
            Auth::login($user);
        }
        return redirect('/');

    }
}
