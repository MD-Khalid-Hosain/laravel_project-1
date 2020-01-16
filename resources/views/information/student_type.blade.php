@extends('layouts.app')


@section('content')
<div class="container ">
  <div class="row">
    <div class="col-md-6 m-auto">
      <form action="{{ route('student_type_create') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Type</label>
          <input type="text" name="type"class="form-control" id="exampleInputEmail1" placeholder="add type" >
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach($show_type as $value)
          <tr>
            <th scope="row">{{$value->id}}</th>
            <td>{{$value->type}}</td>
            <td> <a href="{{ url('/student/information/type/delete') }}/{{$value->id}}" class="btn btn-danger">Delete</a> </td>

          </tr>
          @endforeach



        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
