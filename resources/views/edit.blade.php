@extends('layout.app')

@section('content')
<!-- @dump($student['image'])
<div class="card" style="width: 18rem;">
 <img src="{{asset('imgs/1.jpg')}}" class="card-img-top" alt="..."> -->
{{-- <img src="{{asset('imgs/'.$student['image'])}}" class="card-img-top" alt="...">

<div class="card-body">
  <h5 class="card-title">{{$student['name']}}</h5>
  <h6 class="card-subtitle mb-2 text-muted">{{$student['salary']}}</h6>
  <a href="{{route('students.index')}}" class="card-link">Back</a>

</div>
</div> --}}
<form action="{{route('students.update')}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" value="{{$student['name']}}" id="exampleInputName" >

  </div>
  <div class="mb-3">
    <label for="exampleInputSalary" class="form-label">salary</label>
    <input type="text" class="form-control" value="{{$student['salary']}}" id="exampleInputSalary ">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection