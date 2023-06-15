<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                <div class="carta">
                    <div class="card" style="width: 18rem;">
                        <a href="{{route('comics.show', ['comic' => $comic->id])}}"><img src="{{$comic->thumb}}" class="card-img-top" alt="..."></a>
                        
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->series}}</h5>
                            <p class="card-text">{{$comic->description}}</p>
                            <div>{{$comic->sale_date}} {{$comic->price}}</div>
                            <div>{{$comic->type}}</div>
                            <div>{{$comic->writers}}</div>
                            <div>{{$comic->artists}}</div>
                            <a href="{{route('comics.edit', $comic)}}">modifica</a>
                            <form action="{{ route('comics.destroy', $comic)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">elimina</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>