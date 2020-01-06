<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Carbon\Carbon;

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
          'created_at'=>Carbon::now(),
        ]);
        return back();
    }
    function student_list()
    {
      $student_lists=Information::orderBy('id','desc')->paginate(3);

      return view('information.student_list',compact('student_lists'));

    }

  function student_single($student_id)
  {
    $single = Information::findOrFail($student_id);
    return view('information.student_single', compact('single'));
  }
  function student_update(Request $request){
    Information::findOrFail($request->information_id)->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'address'=>$request->address,

    ]);
    return back();

  }
  function student_delete($student_id){
    Information::findOrFail($student_id)->delete();
    return back();

  }

}
