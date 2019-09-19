<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home.index');
    }

    function sayHello(Request $request) {
        // dd($request);    --> dd : display and die
        // dd($request->input("userName"));
        // dd($request->userName);

        // return "Hello! " . $request->userName;

        return view("home.hello",
            [ "who" => $request->userName ]);
            // [ "who" => $request->userName, "test" => "123"]);
        // return view("home.hello")->withWho($request->userName);
    }
}
