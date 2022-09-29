<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * this controller created with command - php artisan make:controlller MyFirstControlle
*/
class MyFirstController extends Controller
{
   public function index(){
       return "text";
   }
}
