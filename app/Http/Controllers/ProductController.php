<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    public function index() {
        $data = DB::table('products')
        ->join('images', 'products.id', '=', 'images.product_id') // joining the contacts table , where user_id and contact_user_id are same
        ->join('categories', 'products.category_id', '=', 'categories.id') 
        ->select('products.*', 'images.path','categories.name')
        ->groupBy('products.id')
        ->get();

    
        
        
     

        return view('admin.products.index',['data'=>$data]);
    }

    public function create() {
        
        return view('admin.products.newproduct',['categories'=>Category::select('name')->get()]);
    }

    public function edit($id) {
      $product =   DB::table('products')
      // joining the contacts table , where user_id and contact_user_id are same
      ->join('categories', 'products.category_id', '=', 'categories.id') 
      ->select('products.*','categories.name')
      ->where('products.id',$id)
      ->get();


        return view('admin.products.edit',['product'=>$product]);
    }
    public function delete(Request $request) {

    $product = Product::find($request->id);
    $data = $product->images()->get()->toarray();
    foreach($data as $item){
        $image_path = public_path('/imgs/'.$item['path']);
        unlink($image_path);
    }

    $product->delete();

   
       
       
      }
      
    public function update(Request $request ,$id) {


        $data = $request->validate([
            'product_name' => 'required',
            'price'=>'required',
            'description'=>'required',
            'specification'=>'required',
            'quantity'=>'required',
            
            ]);


            Product::where('id',$id)->update([
                'product_name' => $request->product_name,
                'price'=>$request->price,
                'description'=>$request->description,
                'specification'=>$request->specification,
                'quantity'=>$request->quantity,
               
                
            ]);


          return redirect(route('products'));
      }


    public function store(Request $request) {

        $data = $request->validate([
                'product_name' => 'required|unique:products',
                'price'=>'required',
                'description'=>'required',
                'specification'=>'required',
                'quantity'=>'required',
                'category'=>'required'
                ]);
                
        ##dir hna methode dyl insert wdyl wtkhdam fktar mn image w7da
        // $extension = $request->file('image')->getClientOriginalExtension();

        // $photo = $request->file('image')->getClientOriginalName();
      

        $categorie = Category::where('name',$request->category)->get();
      if(count(Arr::wrap($request->file('image')) )>0){

    
       $product = $categorie[0]->products()->create([
            'product_name' => $request->product_name,
            'price'=>$request->price,
            'description'=>$request->description,
            'specification'=>$request->specification,
            
            'quantity'=>$request->quantity,
           
        ]);
     
        foreach($request->file('image') as $image ){
      

        $product->images()->create([
            'path' => $image->getClientOriginalName()
        ]);
        $image->storeAs('',$image->getClientOriginalName(),'public');
    }
}else{
    return '<h1>malk mkalakh asahbi dir chi image hhh </h1>';
}
        
    //  $ex= Str::afterLast($photo, '.');
    //     $name = Str::before($photo,'.'.$extension);
    //     dd($extension);
        return redirect()->route('products');
    }
}
