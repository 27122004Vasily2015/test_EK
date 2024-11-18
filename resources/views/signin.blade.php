@extends('layouts.app')
@section('content')
 

 <div class="container">
   
    <form action="{{route('signup')}}" method="post">
        @csrf
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">login</label>
        <input type="text" class="form-control" id="login" name="login">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Войти</button>
    </form>


 </div>
 
@endsection('content')