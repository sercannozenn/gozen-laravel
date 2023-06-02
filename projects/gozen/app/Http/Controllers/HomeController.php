<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{


    public function index(): string
    {

        User::create([
            'name' => "Sercan",
            'emil' => "sercan@gmail.com",
            'password' => bcrypt(12345678)
        ]);

        $user =  new User();
        $user->name = "Hüseyin";
        $user->save();

        $passenger = new Passenger();
        $passenger->name;



        return $user;
    }
}
