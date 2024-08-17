@extends('layout.app')


@section("content")



    <h1 class="text-primary fs-1 ">welcome to our home page {{$name}}</h1>
 
    @dump($students)
 
   {{--  {{$students}} --}}

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
      <td><a href="/iti/{{$std['id']}}" class="btn btn-info fs-6 text-white">Show</a></td>

    </tr>
 @endforeach
</table>
@endsection