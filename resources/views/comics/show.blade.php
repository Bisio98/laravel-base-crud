@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <div class="card" style="margin:auto;">
                <img src="{{$comic->thumb}}" style="max-width:400px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-text">{{$comic->title}}</h2>
                    <p class="card-text">{{$comic->description}}</p>
                    <div>
                        <a class="btn btn-primary" href="{{route('comics.edit',['comic'=>$comic->id])}}">Modifica</a>
                    </div>
                    <div>
                        <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare?')">Cancella</button>
                        </form>
                       
                    </div>
                </div>
              </div>
        </div>
    </section>
@endsection