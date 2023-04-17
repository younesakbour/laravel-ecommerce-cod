<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Commande::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function review() {
        $orders = Commande::where('status', 'review')
        ->orderBy('updated_at')
        ->get();
        return view('admin.orders.ordersreview', compact('orders'));
    }

    public function progress() {
        $orders = Commande::where('status', 'progress')
        ->orderBy('updated_at')
        ->get();
        return view('admin.orders.ordersprogress', compact('orders'));
    }

    public function confirmed() {
        $orders = Commande::where('status', 'confirmed')
        ->orderBy('updated_at')
        ->get();
        return view('admin.orders.ordersconfirmed', compact('orders'));
    }

    public function show(Request $request , $id) {
        $user = Commande::find($id);
        return view('admin.orders.ordershow', compact('user'));
    }

    public function destroy($id) {
        $user = Commande::find($id)->delete();
        return redirect()->back();
    }

    public function update(Request $request , $id) {

        $order = Commande::where('id', $id)->update([
            'last_name' =>  $request->last_name ,
            'first_name' =>  $request->first_name   ,
            'phone' => $request->phone   ,
            'email' =>  $request->email  ,
            'adresse' => $request->adresse  ,
            'country' => $request->country   ,
            'city' =>$request->city  ,
            'zip_code' => $request->zip_code,
        ]);

        return redirect()->route('orders.review');
    }

    public function accept($id) {
        $order = Commande::find($id);
        $order->status = 'progress';
        $order->save();

        return redirect()->route('orders.progress');
    }

    public function confirm($id) {
        $order = Commande::find($id);
        $order->status = 'confirmed';
        $order->save();
        
        return redirect()->route('orders.confirmed');
    }
}
