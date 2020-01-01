@extends('layouts.app')

@section('content')

<div class="container ">
  <div class="row">
    <div class="col-md-6 m-auto">
      <form action="{{ route('student_create') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name"class="form-control" id="exampleInputEmail1" placeholder="Write your Name" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Write your Email">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Write your Address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
