
@extends('layout.app')

@section('content')
<main>
    <div id="giumbotron">
    </div>
    <div id="content">
        
        <div class="container">
            <nav id="welcome-nav" class="justify-content-between w-100 text-center">
                <div>
                    <a href="/comics">Browse Comics</a>
                </div>
                <div>
                    <a href="{{route('comics.create')}}">Create Comics</a>
                </div>
                
            </nav>
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