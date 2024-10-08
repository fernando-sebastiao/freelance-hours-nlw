<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $user = User::find(1);

    // $user = User::query()->create([
    //         'name' => 'Fernando',
    //         'email' => 'fernandosebastiao888@gmail.com',
    //         'password' => "fernando123",

    // ]);

       
        $user-> update(["email_verified_at" => now() -> subMonth(10)]);

        dd($user-> email_verified_at->diffForHumans());

        return view('teste.fernando-page');
    }
}
