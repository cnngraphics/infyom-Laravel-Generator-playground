<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class WelcomeController extends Controller
{
    // this should call the command to display something

    public function index(){
        Artisan::call('command:ShowMessage');
    }
}
