<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class RealCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::all();
      return view('admin.categories.categories',['categories'=>$categorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.addcategorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $data = $request->validate([
            'name' => 'required|unique:categories',
        
            ]);
            $ico =  $request->file('image')->getClientOriginalName();
            $ext = $request->file('image')->getClientOriginalExtension();
        if($ext == 'ico'){
            $product = Category::create([
                'name' => $request->name,
                'ico'  => $ico ,
                'taille' => $request->taille
            
            ]);
        $request->file('image')->storeAs('/categorie',$ico,'public');
        return redirect()->route('categorie');
        }else{
        return back()->with('fail','we only accept icon files');
        }
    
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $category = Category::find($id);
        $deleting = $category->delete();
        $img_path = public_path('/imgs/categorie/'.$category->ico);
        unlink($img_path);
        return redirect()->back();
    }
}
