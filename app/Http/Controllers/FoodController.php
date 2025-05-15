<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Route;

class FoodController extends Controller
{
 public function display(){
    return view('browseMenu');
 }   
}
