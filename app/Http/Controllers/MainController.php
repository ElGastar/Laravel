<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * this controller created with command - php artisan make:controlller MyFirstControlle
*/
class MainController extends Controller
{
   public function index(){


       return view('home');
   }


}
