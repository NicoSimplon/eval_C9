<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome', ['name' => 'Michel']);
    }
}