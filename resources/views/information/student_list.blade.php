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
              <th scope="col">Created</th>
              <th scope="col">Updated</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($student_lists as $list)
            <tr>
              <th scope="row">{{$list->id}}</th>
              <td>{{$list->name}}</td>
              <td>{{$list->email}}</td>
              <td>{{$list->address}}</td>
              <td>{{$list->relationBetweenType->type}}</td>
              <td>{{$list->created_at->diffForHumans()}}</td>
              <td>{{$list->updated_at}}</td>
              <td>
                <a href="{{ url('/student/information/list') }}/{{$list->id}}" class="btn btn-primary">Edit</a>
                <a href="{{ url('/student/information/delete') }}/{{$list->id}}" class="btn btn-danger">Delete</a>

              </td>
            </tr>
            @empty
            @endforelse

          </tbody>
        </table>
        {{$student_lists->links()}}
      </div>
    </div>
  </div>
@endsection
