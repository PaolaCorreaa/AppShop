<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Trainer;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $error = ['error'=>'Sin resultados, ingrese otros campos para la busqueda'];
       //if ($request -> has('text')){
           // $entrenadores = Trainer::search($request->get('text'))->get();
            //return $entrenadores->count() ? $entrenadores : $error;
            //return view('SearchShow', compact('entrenadores'));
       //}
        //return $error;

    	if($request->has('text')){
    		$trainers = Trainer::search($request->get('text'))->get();	
    	}else{
    		$trainers = Trainer::get();
    	}
        return view('SearchShow2', compact('trainers'));
        //return $entrenadores->count() ? $entrenadores : $error;
    }
    
}

//if($request->has('search')){
  //  $entrenadores = Trainer::search($request->get('search'))->get();	
 // }else{
   //   $entrenadores = Trainer::get();
  //}
  //return view('SearchShow', compact('entrenadores'));
//}