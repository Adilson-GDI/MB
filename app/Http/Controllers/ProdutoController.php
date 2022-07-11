<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function list(Request $request){

      $produto=Produto::where('id_categoria',$request->get("categoria"))
      ->get(); 
        return $produto;  
        
       /*  $produto=Produto::all();
        return $produto;   */

    }


    public function show($id){

        $produto = Produto::find($id);
        return $produto;

    }

    
    
}
