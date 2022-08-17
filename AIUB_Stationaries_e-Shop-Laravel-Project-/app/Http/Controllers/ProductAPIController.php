<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductAPIController extends Controller
{
    public function list(){
    $Products = product::all();
    return $Products;
    }
}
