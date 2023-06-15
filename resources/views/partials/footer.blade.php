<footer>
    <section id="about">
        <div class="container">
            <div class="box">
                <div class="col">
                        <div class="position">
                            <h2>
                                SHOP                               
                            </h2>
                            <ul>
                                <li>
                                    Shop DC
                                </li>
                                <li>
                                    Shop DC Collectibles
                                </li>
                            </ul>
                        </div>
                        @foreach ($footermenu as $elem)
                        <div>
                            <h2>{{$elem['title']}}</h2>
                            <ul>
                                @foreach ($elem['items'] as $item)
                                <li>{{$item['item']}}</li>
                                @endforeach
                            </ul>
                        </div>
                            
                        @endforeach 
                    
                </div> 
            </div>
            <img src="/img/dc-logo-bg.png" alt="">  
        </div>
    </section>
    <section id="links">
        <div class="container">
            <span id="button">SIGN-UP NOW!</span>
            <div>
                <strong>FOLLOW US</strong>
                <img src="/img/footer-facebook.png" alt="">
                <img src="/img/footer-twitter.png" alt="">
                <img src="/img/footer-youtube.png" alt="">
                <img src="/img/footer-pinterest.png" alt="">
                <img src="/img/footer-periscope.png" alt="">
            </div>
        </div>
    </section>
</footer>