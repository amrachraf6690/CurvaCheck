<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Random;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function check(FormRequest $request){

        $password = Random::generate(12);

        $email = $request->email;

        $response = Http::post('https://api.curvaegypt.com/public/api/auth/login', [
            'email' => $email,
            'password' => $password,
        ]);

        $response_body = $response->json();

        $response_body = json_encode($response_body);


        if (Str::contains($response_body, 'Invalid Credentials')) {
            return view('fail',compact('email'));
        }
        elseif(Str::contains($response_body, 'The selected email is invalid.'))
        {
            return view('success',compact('email'));
        }
        else
        {
            abort(500);
        }


        if($response_body['error'] == "Invalid Credentials"){

            return view('fail',compact('email'));

        }
        else
        {
            return view('success',compact('email'));
        }


    }
}
