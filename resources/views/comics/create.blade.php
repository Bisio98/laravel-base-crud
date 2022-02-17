@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h3>Crea un nuovo tipo di pasta</h3>
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" aria-describedby="emailHelp" name="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" id="price" aria-describedby="emailHelp" name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" aria-describedby="emailHelp" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="date" class="form-control" id="sale_date" aria-describedby="emailHelp" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" aria-describedby="emailHelp" name="type">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection