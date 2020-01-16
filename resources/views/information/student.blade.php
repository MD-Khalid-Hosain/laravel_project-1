@extends('layouts.app')

@section('content')

<div class="container ">
  <div class="row">
    <div class="col-md-6 m-auto">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
            </ul>
        </div><br/>
        @endif
      <form action="{{ route('student_create') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name"class="form-control" id="exampleInputEmail1" value="{{old('name')}}" placeholder="Write your Name" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{old('email')}}" placeholder="Write your Email">
          
        </div>

        <div class="form-group">
          <label for="exampleInputaddress">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputaddress" placeholder="Write your Address">
        </div>
        <div class="form-group">
          <label for="inputState">Type</label>
          <select id="inputState" class="form-control" name="student_type">
            <option >Choose</option>
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->type}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
