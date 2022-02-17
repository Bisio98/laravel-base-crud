@extends('layouts.app')

@section('main_content')
    <h1>Lista dei fumetti</h1>
    <div class="container">
        <ul class="list-group">
            @foreach ($comics as $comic)
    
                <li class="list-group-item">
                    <img src="{{$comic->thumb}}" alt="">
                    <h3>{{$comic->title}}</h3>
                    <span>{{$comic->description}}</span>
                    <h5>{{$comic->type}}</h5>
                    <span>{{$comic->price}}</span>
                </li>
          
            @endforeach
        </ul>
    </div>
@endsection