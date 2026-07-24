  <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10">
                            <div class="contact-info">
                                <ul class="clearfix">
                                    <li><span>Nosso Telefone:</span> (11) 94512-1384</li>
                                    <li><span>Endereço:</span> Rua Américo Salvador Novelli Itaquera - SP </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-2">
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo-mult.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                               
                            
                                    <li><a href="{{ route ('home') }}">Home</a></li>
                               
                            </li>
                            <li class="menu-item-has-children">
                                
                               
                                    <li><a href="{{ route ('sobre')}}"> Sobre </a></li>
                                    <li><a href="{{ route ('equipe')}}">Equipe</a></li>    
                            </li>
                            
                            <li class="menu-item-has-children">
                                <a href="#">Serviços</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route ('servicos')}}">Todos Serviços</a></li>
                                    <li><a href="{{ route ('servicos')}}">CNH Suspensa</a></li>
                                    <li><a href="{{ route ('servicos')}}">CNH Suspensa</a></li>
                                    <li><a href="{{ route ('servicos')}}">CNH Suspensa</a></li>
                                    <li><a href="{{ route ('servicos')}}">CNH Suspensa</a></li>
                                    <li><a href="{{ route ('servicos')}}">CNH Suspensa</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                            
                                    <li><a href="{{ route ('estudo')}}">Estudo de casos</a></li>
                               
                            </li>
                           
                            <li><a href="{{ route ('contato')}}">Contato</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                  
            </nav>
        </header>
        <!-- end of header -->