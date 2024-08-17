@extends('layout.app')

@section('content')

<form action="{{route('students.store')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" name="name" class="form-control"  id="exampleInputName" >

  </div>
  <div class="mb-3">
    <label for="exampleInputSalary" class="form-label">salary</label>
    <input type="text" name="salary" class="form-control"  id="exampleInputSalary ">
  </div>
  
  <button type="submit" class="btn btn-success">Create </button>
</form>

@endsection