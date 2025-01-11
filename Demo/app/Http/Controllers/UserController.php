<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

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
    // Define validation rules and custom messages
    $rules = [
        'username' => 'required|string|max:50|uppercase', // Required, string, max length 50
        'email' => 'required|email', // Required, must be a valid email
        'city' => 'required|string|max:50', // Required, string, max length 50
        'interests' => 'nullable|array', // Optional, must be an array
        'gender' => 'required|in:Male,Female,Other', // Required, value must be Male, Female, or Other
        'country' => 'required|string', // Required, string
        'age' => 'required|integer|min:18|max:60', // Required, integer, between 18 and 60
    ];

    $messages = [
        'username.required' => 'Please enter your username.',
        'email.required' => 'The email field is required.',
        'email.email' => 'Please provide a valid email address.',
        'city.required' => 'City is required.',
        'gender.required' => 'Please select a gender.',
        'gender.in' => 'The selected gender is invalid.',
        'country.required' => 'Country is required.',
        'age.required' => 'Age is required.',
        'age.min' => 'Age must be at least 18.',
        'age.max' => 'Age must not exceed 60.',
    ];

    // Validate the request
    $validated = $request->validate($rules, $messages);

    // Retrieve data with default values for optional fields
    $data = [
        'username' => $validated['username'],
        'email' => $validated['email'],
        'city' => $validated['city'],
        'interests' => $request->input('interests', []), // Default to empty array if not provided
        'gender' => $validated['gender'],
        'country' => $validated['country'],
        'age' => $validated['age'],
    ];

    // Return the data as JSON
    return response()->json([
        'success' => true,
        'message' => 'User data successfully validated and processed.',
        'data' => $data,
    ]);
}


}
