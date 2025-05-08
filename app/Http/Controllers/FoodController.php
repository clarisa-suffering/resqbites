<?php

namespace App\Http\Controllers;
// use App\Models\Food;

use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Route;

class FoodController extends Controller
{
 public function display(){
    return view('katalogMenu');
 }   
}
