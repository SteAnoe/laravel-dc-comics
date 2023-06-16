
@extends('layout.app')

@section('content')
<main>
    <div id="giumbotron">
    </div>
    <div id="content">
        <h2 id="label"><a class="text-white" href="/comics">BACK TO CURRENT SERIES</a></h2>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="w-100" action="{{route('comics.update', $comic)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label" for="">title</label>
                    <input class="form-control" type="text" name="title" value="{{old('title') ?? $comic->title }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">description</label>
                    <textarea class="form-control" type="text" name="description">{{old('description') ?? $comic->description }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="">thumb</label>
                    <input class="form-control" type="text" name="thumb" value="{{old('thumb') ?? $comic->thumb }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">price</label>
                    <input class="form-control" type="number" name="price" value="{{old('price') ?? $comic->price }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">series</label>
                    <input class="form-control" type="text" name="series" value="{{old('series') ?? $comic->series }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">sale_date</label>
                    <input class="form-control" type="date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">type</label>
                    <input class="form-control" type="text" name="type" value="{{old('type') ?? $comic->type }}">
                </div>
                <button class="edit-button" type="submit">Edit Comic</button>
            </form>
        </div> 
        
    </div>
    <div id="shop">
        <div class="container">
            @foreach ($menushop as $elem)
            <div class="carta1">
                <div>
                    <img src="{{$elem['img']}}" alt="">
                    <div>{{$elem['nome']}}</div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</main>
@endsection