<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Product;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // how to access to data in pivot


        // $order = Commande::find(1);
        // dd($order->produits->first()->pivot->qte);
        return view('pay.index');
        
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
    public function store(Request $request )
    {
       $request->validate([
        'last_name' =>  ['required','max:30'] ,
        'first_name' =>   ['required','max:30'] ,
        'phone' =>   ['required','max:40'],
        'email' =>  ['required'],
      
        'adresse' =>   ['required'] ,
        'country' =>    ['required','max:30'] ,
        'city' =>  ['required','max:30'],
        'zip_code' =>  ['required','max:10'],

       ]);
       
     
       $user = Commande::create([
        'last_name' =>  $request->last_name ,
        'first_name' =>  $request->first_name   ,
        'phone' => $request->phone   ,
        'email' =>  $request->email  ,
      
        'adresse' => $request->adresse  ,
        'country' => $request->country   ,
        'city' =>$request->city  ,
        'zip_code' => $request->zip_code ,
        

       ]);
    
       
       foreach( session('cart') as $key => $item) {  

        $user->produits()->attach([
            $key => [
          'qte' => $item['quantity'],
          'size' => $item['size']

            ]
        ]);
    $review = Product::find($key)->reviews ;
  
         Product::where('id',$key)->update([
            'reviews' => $review + 1,
          
           ]);
           
           
          
       
        // $user->produits[$i]->pivot->qte = $item['quantity'] ;
        // $user->save();
        
       
       
       }
       session()->forget("cart");
       return redirect('/shop')->with('stored','Your order is succesfully sent ');
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
