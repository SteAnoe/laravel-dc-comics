<header>
    <div class="banner">
        <div class="container">
            <div>DC POWER VISA</div>
            <div class="ms-5">ADDITIONAL DC SITES</div>
        </div> 
    </div>
    <div class="container">
       <div>
            <a href="/"><img src="/img/dc-logo.png" alt=""></a>
            
        </div>
        <nav>
            <ul>
                @foreach ($menu as $elem)
                    <li><a href="{{$elem['url']}}"><strong>{{$elem['nome']}}</strong></a></li>
                @endforeach
            </ul>
        </nav> 
        <div>
            <input type="text" placeholder="Search">
        </div>
    </div>
</header>
