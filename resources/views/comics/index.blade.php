@extends('layouts.app')

@section('main_content')
    <h1>Lista dei fumetti</h1>
    <div class="container">
        <div class="list-group">
            @foreach ($comics as $comic)

                    <a href="{{route('comics.show',['comic'=>$comic->id])}}" class="list-group-item list-group-item-action " aria-current="true">
                        <img src="{{$comic->thumb}}" alt="">
                        <h3>{{$comic->title}}</h3>
                        <span>{{$comic->description}}</span>
                        <h5>{{$comic->type}}</h5>
                        <span>{{$comic->price}}</span>
                    </a>                 
          
            @endforeach
        </div>
    </div>
@endsection