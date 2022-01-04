@extends('template.layout')

@section('main-content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Hobby</th>
        <th scope="col">Gender</th>
        <th scope="col">City</th>
      </tr>
    </thead>
    <tbody>
  
@php
$i = 1
@endphp
    @foreach ($data as $item)
        <tr>
        <td>{{$i++}}</td>
        <th scope="row">{{$item->uname}}</th>
        <td>{{$item->email}}</td>
        <td>{{$item->bday}}</td>
        <td>{{$item->hobby}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->city}}</td>

        
      </tr>
    @endforeach
      
   
    </tbody>
  </table>
@endsection