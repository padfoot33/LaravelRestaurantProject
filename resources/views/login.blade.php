@extends('layout') <!-- import layout-->
@section('content')
<div class="col-sm-8">
<h1>User Login</h1>
<form action="login" method="post">
    @csrf
    <div class="form-group">
    <label>Email </label>
    <input type="text" name="email" class="form-control" placeholder="Enter Email">
    </div>
    
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>
    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop
