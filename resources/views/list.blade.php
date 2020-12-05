@extends('layout')
@section('content')
<div>
<h1>List of Restaurant</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
 
   @foreach($data as $item)
   <tr>
    <th scope="row">{{$item->id}}</th>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->address}}</td>
    <td>
    <a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
    <a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a>
    </td>
    </tr>
    @endforeach
  
  </tbody>
</table>





</div>
@stop