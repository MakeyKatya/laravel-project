<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Message;

class HomeController extends Controller
{
    public function index (){
        return view('welcome');
    }
}
