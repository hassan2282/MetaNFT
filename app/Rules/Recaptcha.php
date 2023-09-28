<?php

namespace App\Rules;

use Closure;
use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class Recaptcha implements ValidationRule
{

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            $googleApi = new Client();
            $response = $googleApi->request('POST','https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' =>[
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $value,
                    'remoteip' => request()->ip(),
                ]
            ]);
            $response = json_decode($response->getBody());
            Alert::success('success','User Logged In !');
        }catch (\Exception $exception){
            Alert::error('error','Google define you as a robot!');
        }
    }
}
