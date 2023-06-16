@extends('layout.app')

@section('content')
<main>
    <div id="giumbotron">
    </div>
    <div id="content">
        <h2 id="label">CURRENT SERIES</h2>
        @if( Session::has('success-create'))
            <div class="alert alert-success">
                {!! Session::get('success-create') !!}
            </div>
        @endif
        @if( Session::has('success-delete'))
            <div class="alert alert-success">
                {!! Session::get('success-delete') !!}
            </div>
        @endif
        @if( Session::has('success-edit'))
            <div class="alert alert-success">
                {!! Session::get('success-edit') !!}
            </div>
        @endif
        <div class="container">
            
            @foreach ($comics as $comic)
            <div class="carta">
                <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                    <div>
                        <img src="{{$comic['thumb']}}" alt="">
                        <h6>{{$comic['series']}}</h6>
                        
                    </div>
                </a>
                
            </div>   
            @endforeach    
        </div> 
        <div id="button">LOAD MORE</div> 
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