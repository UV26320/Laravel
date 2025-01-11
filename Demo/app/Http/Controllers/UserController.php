<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // function getUser(){
    //     return "Uda Val";
    // }
       
    // function getUserName($name){
    //     return "heeey its me ". $name;
    // }

    // =================================================================

    // handle a view
    function getUser(){
        return  view("user");
    }

    function getUserName($name){
        $users= ["hia","uda","mee"];
        return view("getUser",['names' => $name],['xyz' => $users]);  
    }


    // =================================================================

    function loginUser(){
        return view('admin.login');
    }



    // =================================================================

    // function which is get a user details

    function addUser(Request $request)
    {
        // Retrieve data from the request
        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'city' => $request->city,
        ];
    
        // Return the data as JSON
        return response()->json($data);
    }


}
