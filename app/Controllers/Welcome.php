<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function index()
    {
        $data['message'] = 'Hello World!'; // Set a variable to be passed to the view
        return view('welcome_message', $data); // Load the view and pass the data
    }
}
