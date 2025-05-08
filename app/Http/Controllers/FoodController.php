<?php

namespace App\Http\Controllers;
use App\Models\Food;

use Illuminate\Http\Request;
use PDO;

class FoodController extends Controller
{
 public function display(){
    $foods = Food::with('store')->get();
    return view('katalogMenu', compact('foods'));
 }   
}
