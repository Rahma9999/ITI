@extends('layout.app')
<!-- <h1> hello</h1> -->
@section("content")
<h1 class="text-danger fs-3">welecome to home page </h1>

@endsection 



@section("body")
<h1 class="text-warning fs-3 ">intro in Laravel layouts</h1>
<div class="d-flex justify-content-end align-items-center my-2 me-4">

    <a class="btn btn-success px-2 py-1 "  href="{{route('students.create')}}">Add new student</a>
</div>


<table class="table text-white">
  <thead>
    <tr>
        <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">salary</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $std)
    <tr>
    

      <td>{{$std['id']}}</td>
      <td>{{$std['name']}}</td>
      <td>{{$std['salary']}}</td>
      <!-- <td><a href="/students/{{$std['id']}}" class="btn btn-info fs-6 text-white">Show</a></td> -->
      <td><a href="{{route('students.show', $std['id'] )}}" class="btn btn-info fs-6 mx-2 text-white">Show</a>
<a href="{{route('students.edit', $std['id'] )}}" class="btn btn-warning fs-6 text-white">Edit</a></td> 



    </tr>
 @endforeach
</tbody>
</table>
@endsection

