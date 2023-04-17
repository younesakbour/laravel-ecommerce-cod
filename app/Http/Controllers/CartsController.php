<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

class CartsController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        // return view('ff.index', compact('products'));
        $data = DB::table('products')
        ->join('images', 'products.id', '=', 'images.product_id')// joining the contacts table , where user_id and contact_user_id are same
        ->select('products.*', 'images.path')
        ->groupBy('products.id')
        ->orderBy('reviews','DESC')
        ->limit(3)
        ->get();
        
    
        
        return view('user.ff.index',["data"=> $data]);
    }
 
    public function cart()
    {
   
        return view('user.ff.cart');
    }
    public function addToCart(Request $request , $id)
    {
        
        $product = Product::findOrFail($id);
        
       
 
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
    if($product->quantity > $cart[$id]['quantity']){  
        

      
            
        $cart[$id]['quantity'] += $request->product_quanity ;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'we add more Quantite to your product!');
            
        }elseif($product->quantity < $cart[$id]['quantity']){

            $cart[$id]['quantity'] = $product->quantity ;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'we only have '.$product->quantity.'from this product');

        }
        }  else {
       
            $cart[$id] = [
                'id' => $id ,
                "nom_Produit" => $product->product_name,
                "img" => $product->images[0]->path,
                "price" => $product->price,
                "quantity" => $request->product_quanity,
                "size" => $request->product_size
            ];
            
        }
   
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
  
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
    
    public function removeAll()
    {
        session()->forget("cart");
        return redirect('/shop');
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}