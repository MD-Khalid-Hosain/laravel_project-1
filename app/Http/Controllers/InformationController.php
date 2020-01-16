<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\StudentType;
use Carbon\Carbon;

class InformationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role');
  }
    function student(){
      $types = StudentType::all();
      return view('information.student',compact('types'));
    }
    function student_create(Request $request){

        // data validation
        $request->validate([
        'name'=>'required',
        'email'=>'required|unique:App\Information',
        'address'=>'required',


        ]);

        Information::insert([
          'name'=>$request->name,
          'email'=>$request->email,
          'address'=>$request->address,
          'student_type'=>$request->student_type,
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
    $types_of_student = StudentType::all();
    $single = Information::findOrFail($student_id);
    return view('information.student_single', compact('single','types_of_student'));
  }
  function student_update(Request $request){
    Information::findOrFail($request->information_id)->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'student_type'=>$request->student_type,
      'address'=>$request->address,

    ]);
    return back();

  }
  function student_delete($student_id){
    Information::findOrFail($student_id)->delete();
    return back();

  }

  // student type
  function student_type(){
    $show_type = StudentType::all();
    return view('information.student_type', compact('show_type'));
  }
function student_type_create(Request $request){

  StudentType::insert([
    'type'=>$request->type,

  ]);
  return back();

}
function student_type_delete($student_id){
  StudentType::findOrFail($student_id)->delete();
  return back();
}

  // Trash
  function student_trash(){

    $trash_student = Information::onlyTrashed()->get();
    return view('information.trash',compact('trash_student'));
  }
// resotre
  function student_resotre($restore_id){
    Information::onlyTrashed()->findOrFail($restore_id)->restore();
    return back();

  }
  // permanent delete
  function student_permanent_delete($delete_id){

    Information::onlyTrashed()->findOrFail($delete_id)->forceDelete();

    return back();

  }



}
