<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategorieControler extends Controller
{

    function nichan_c(Request $request ,$categorie){
        $data = DB::table('products')
        ->join('images', 'products.id', '=', 'images.product_id')
        ->join('categories', 'products.category_id', '=', 'categories.id')// joining the contacts table , where user_id and contact_user_id are same
        ->select('products.*', 'images.path','categories.name','categories.ico')
        ->groupBy('products.id')
        ->where('categories.name',$categorie)
        ->get();


        if($request->trtib =="az"){   
            return view("user.ff.categorie",["data"=> $data->sortBy('product_name'),"type"=>"A-Z"]) ;
        }elseif($request->trtib =="price"){
 
            return view("user.ff.categorie",["data"=> $data->sortBy('price'),"type"=>"PRICE"]) ;

        }else {  
        return view("user.ff.categorie",["data"=>$data,"type"=>"FEATURED"]) ;
    }
}
    function categorie($categorie){
    
        $data = DB::table('products')
        ->join('images', 'products.id', '=', 'images.product_id')// joining the contacts table , where user_id and contact_user_id are same
        ->select('products.*', 'images.path')
        ->groupBy('products.id')
        ->get();
        
        return view('user.ff.categorie',['data'=> $data]);
        // return view('ff.categorie',['data'=>Produit::where('categorie',"car")->get()]);
    }

}