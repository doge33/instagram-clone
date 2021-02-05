<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //without this it's not gonna work cuz User is not in  the same namespace

class ProfilesController extends Controller
{
    public function index($user) //$user should be the id of a user
    {
        //dd($user); //=> dd echos out the value inside (), and halt or other operations

        $user = User::find($user);
        //^ access model through the user_id represented by $user, and stored the user data to variatbl
        return view('home', [
            'user' => $user  //'user' is the variable name inside the view, realized as $user there
        ]);
    }



}
