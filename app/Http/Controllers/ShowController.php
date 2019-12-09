<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Request $request){

      $show = $request->show;
      //echo count($show);
      //print_r($show);
      //session(['name' => $member->name]);


    for ($i=0; $i < count($show); $i++) {
        //echo $show[$i];
        session(['data.'.$i => $show[$i]]);
    }

    for ($i=0; $i < count($show); $i++) {
        echo session('data.'.$i);
    }
    //dd(session('data'));
      // foreach ($show as $data) {
      //   echo $data
      // }

//dd($request->all());
return view("user");
    }
}
