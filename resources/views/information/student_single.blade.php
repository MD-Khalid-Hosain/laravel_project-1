@extends('layouts.app')

@section('content')

<div class="container ">
  <div class="row">
    <div class="col-md-6 m-auto">
      <form action="{{ route('student_update') }}" method="post">
        @csrf

        <div class="form-group">
          <input type="hidden" name="information_id" value="{{ $single->id }}">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" value="{{ $single->name }}"class="form-control" id="exampleInputEmail1" placeholder="Write your Name" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" value="{{ $single->email }}" class="form-control" id="exampleInputPassword1" placeholder="Write your Email">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" name="address" value="{{ $single->address }}" class="form-control" id="exampleInputPassword1" placeholder="Write your Address">
        </div>
        <div class="form-group">
          <label for="inputState">Type</label>
          <select id="inputState" class="form-control" name="student_type">
            @foreach($types_of_student as $types)
            <option value="{{$types->id}}">{{$types->type}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
@endsection
