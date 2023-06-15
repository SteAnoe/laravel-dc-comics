

@extends('layout.app')

@section('content')
<main>
    <div id="giumbotron">
    </div>
    <div id="content">
        <h2 id="label"><a class="text-white" href="/comics">BACK TO CURRENT SERIES</a></h2>
        <div id="show-container" class="container">
            <div class="one-card d-flex justify-content-between">
                <div class="box-left">
                    <img src="{{$singoloComic->thumb}}" alt="">
                </div>
                <div class="box-right">
                    <div>
                        <h3 class="mb-5">{{$singoloComic->title}}</h3>
                        <p>{{$singoloComic->description}}</p>
                        <div>Price: {{$singoloComic->price}}</div>
                        <div>Type: {{$singoloComic->type}}</div>
                        <div>Sale Date: {{$singoloComic->sale_date}}</div>
                    </div>
                    <div>
                        <div class="btn btn-primary"><a class="text-white" href="{{route('comics.edit', $singoloComic)}}">EDIT</a></div> 
                        <form id="delete-button" action="{{route('comics.destroy', $singoloComic)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>    
                    </div>
                    
                </div>
                
            </div>
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