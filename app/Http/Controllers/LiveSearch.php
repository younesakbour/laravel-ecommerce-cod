<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('products')
         ->where('product_name', 'like', '%'.$query.'%')
         ->orderBy('id')
         ->get();
         
      }
   
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= 
      
       ' 

       <a href="/shop/'.$row->id.'" class="list-group-item list-group-item-action border-1"> 
       
       <span> 
       
       
       </span>' .$row->product_name.'</a>
       '
        ;
       }
      }
      else
      {
       $output = '
       <a  class="list-group-item list-group-item-action border-1 w" href="/not-found">'.$query.'...</a>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}