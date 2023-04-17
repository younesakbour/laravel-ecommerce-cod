<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index(){
        return view("user.ff.about");
    }


    function search(Request $request){
       
 return view('user.ff.search_bar');
    }
}
