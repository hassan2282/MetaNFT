<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class GoogleController extends Controller
{
    public function index()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleSendUser = Socialite::driver('google')->user();
            $user = User::where('email',$googleSendUser->email)->first();
            if ($user){
                auth()->loginUsingId($user->id);
                Alert::success('کاربر','با موفقیت وارد شد');
                return redirect('/');
            }else{
                $newUserCreate = User::create([
                    'name' => $googleSendUser->name,
                    'email' => $googleSendUser->email,
                    'password' => bcrypt(Str::random(20)),
                ]);
                auth()->loginUsingId($newUserCreate->id);
                Alert::success('کاربر','با موفقیت وارد شد');
                return redirect('/');
            }
        }
        catch (\Exception $exception){
            Alert::error('خطا','ورود با مشکلی مواجه شد');
            return redirect('/');
        }

    }
}
