@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h3>Crea un nuovo tipo di pasta</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('comics.store')}}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description" value="{{old('description')}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" aria-describedby="emailHelp" name="thumb" value="{{old('thumb')}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" id="price" aria-describedby="emailHelp" name="price" value="{{old('price')}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" aria-describedby="emailHelp" name="series" value="{{old('series')}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="date" class="form-control" id="sale_date" aria-describedby="emailHelp" name="sale_date" value="{{old('sale_date')}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" aria-describedby="emailHelp" name="type" value="{{old('type')}}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection