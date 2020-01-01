<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;


class InformationController extends Controller
{
    function student(){

      return view('information.student');
    }
    function student_create(Request $request){

        Information::insert([
          'name'=>$request->name,
          'email'=>$request->email,
          'address'=>$request->address,

        ]);
        return back();
    }
    function student_list()
    {


      $student_lists=Information::orderBy('id','desc')->paginate(3);

      return view('information.student_list',compact('student_lists'));

    }

}
