@extends('layouts.app')
@section('content')
 

 <div class="container">
   
    <form action="{{route('signup')}}" method="post">
     @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">FIO</label>
        <input type="text" class="form-control" id="FIO" name="FIO">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">login</label>
        <input type="text" class="form-control" id="login" name="login">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">phone</label>
        <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>


 </div>
 
@endsection('content')