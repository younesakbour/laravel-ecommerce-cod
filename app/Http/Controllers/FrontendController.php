<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    //     FacadesSession::put('voiture', 'range rover');
    //   $dd =  $request->session()->get('voiture') ;
    //   dd($dd);

   $data = DB::table('products')
    ->join('images', 'products.id', '=', 'images.product_id') // joining the contacts table , where user_id and contact_user_id are same
    ->select('products.*', 'images.path')
    ->groupBy('products.id')
    ->get();


   $cate = Category::select('name')->get()->toArray() ;
  $all = ['count'=>count($data)];
    $data_all = data_fill($all, 'categories', $cate );

   
         
        return view("user.ff.shop",["data"=> $data,'data2' =>$data_all]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = DB::table('products')
     
        ->join('categories', 'products.category_id', '=', 'categories.id') 
        ->select('products.*','categories.name','categories.ico','categories.taille')
        ->where('products.id',$id)
        ->get();




    $images = Product::find($id)->images ;
$specifi = Product::findOrFail($id)['specification'];
$newspei = explode('-', $specifi);
$data_image = data_fill($data, 'images', $images)->toarray();
$categorie = Category::all();
$all = data_set($data_image,'specification',$newspei);


       return  view("user.ff.shop-single",['data'=> $all ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
