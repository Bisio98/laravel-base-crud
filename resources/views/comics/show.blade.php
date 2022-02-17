@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <div class="card" style="margin:auto;">
                <img src="{{$comic->thumb}}" style="max-width:400px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-text">{{$comic->title}}</h2>
                  <p class="card-text">{{$comic->description}}</p>
                </div>
              </div>
        </div>
    </section>
@endsection