@extends('layouts.app')
@section('content')
 

 <div class="container">
   
    <form action="{{route('create')}}" method="post">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" id="Description" name="Description">
    </div>
    <div class="mb-3">
        <select name="service_type " id="" name="service_type">service_type</select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">date</label>
        <input type="datetime" class="form-control" id="date" name="date">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">address</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" id="status" name="status" value="Новая">
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" id="user_id" name="user_id" value="1">
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
    </form>


 </div>
 
@endsection('content')