        <!-- BANNER -->
        

        <!-- start of hero -->
        <section class="hero-slider hero-style-1">
            <div class="swiper-container">

                <div class="swiper-wrapper">

                @foreach ($listaBanner as $linha)
                    <div class="swiper-slide">

                        <div class="slide-inner slide-bg-image" data-background="{{ asset ("multiplas/images/$linha->imagem_banner") }}">

                            <div class="container">

                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>{{ $linha->titulo_banner }}</h2>
                                </div>

                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>{{ $linha->subtitulo_banner}}</p>
                                </div>
                                <div class="clearfix"></div>
                                
                               
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                @endforeach
                    
                </div>
              
                   
            </div>
        </section>
        <!-- end of hero slider -->