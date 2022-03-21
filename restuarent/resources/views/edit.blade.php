@extends('layout')

@section('content')
<div class="col-sm-6">
<form action="edit" method="POST">
@csrf
  <div class="form-group">
      <h1>Edit Restaurant</h1>
    <label >Name</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Enter address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop