@extends('layout')

@section('content')
<h1>Restauant list page is here</h1>
@if(Session::get('status'))
<div class="alert alert-warning alert-success fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operation</th>
      
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

@stop