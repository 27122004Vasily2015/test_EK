@extends('layouts.app')
@section('content')

@foreach($appl as $app)
    <div class="container">
        <p>{{$app->id}}</p>
        <p>{{$app->title}}</p>
        <p>{{$app->description}}</p>
        @if($app->status=='Новая')
            <div class="container">
                <a href="{{route('regect',['id'=>$app->id])}}">Отклонить</a>
                <a href="{{route('accept',['id'=>$app->id])}}">Принята</a>
            </div> @else 
            <p>{{$app->status}}</p>
        @endif 

    </div>

@endforeach

@endsection('content')
