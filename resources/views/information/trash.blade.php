@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-3">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Address</th>
              <th scope="col">Type</th>

              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($trash_student as $trash )
            <tr>
              <th scope="row">{{$trash->id}}</th>
              <td>{{$trash->name}}</td>
              <td>{{$trash->email}}</td>
              <td>{{$trash->address}}</td>
              <td>{{$trash->relationBetweenType->type}}</td>

              <td>
              <a href="{{url('/student/information/restore')}}/{{$trash->id}}" class="btn btn-success">Restore</a>
                <a href="{{url('/student/information/permanent')}}/{{$trash->id}}" class="btn btn-danger">Delete</a>

              </td>
            </tr>
            @endforeach



          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
