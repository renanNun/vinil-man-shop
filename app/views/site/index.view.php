<?php 
    $pageTitle = "index";
    include ('partials/header.php');
?>

<body class="paginas-site">
    <!--Page Content-->
    <main class="view-home">
        <!--slider area-->
        <div id="carouselExampleIndicators" class="container carousel slide mb-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="..."><img src="img/carrossel_1.jpg" class="d-block w-100" alt="...">
                        <figcaption>Uma de nossas melhores ofetas para você!</figcaption>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="..."><img src="img/carrossel_1.jpg" class="d-block w-100" alt="...">
                        <figcaption>Uma de nossas melhores ofetas para você!</figcaption>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="..."><img src="img/carrossel_1.jpg" class="d-block w-100" alt="...">
                        <figcaption>Uma de nossas melhores ofetas para você!</figcaption>
                    </a>
                </div>
            </div>
        </div>
        <a id="icon-carousel" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a id="icon-carousel" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <!--\slider area-->

        <div class="container">
            <!--Slogan-->
            <section id="slogan" class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <section>
                        <h3>Sintonize na vinil man.</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div id="animation">
                        <div class="vitrola-base"></div>
                        <div class="disco">
                            <div class="agulha"></div>
                        </div>
                        <div class="furo"></div>
                    </div>
                </div>
            </section>
            <!--\Slogan-->

            <!--Sobre-->
            <section id="sobre" class="mt-5 mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div id="viniman" class="d-flex justify-content-center">
                            <img src="img/vini-profile.jpg" alt="Foto de Viniman">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                        <section>
                            <h4>Quem é Viniman?</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </section>
                    </div>
                </div>
            </section>
            <!--\Sobre-->

            <!--Product carousel-->
            <section class="mt-4 mb-4">
                <div class="mb-2">
                    <h2>Confira Nossos Destaques:</h2>
                </div>
                <hr>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <!--init 01-->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="index-card">
                                        <img class="card-img-top" src="https://http2.mlstatic.com/lp-tim-maia-o-descobridor-dos-sete-mares-disco-de-vinil-1983-D_Q_NP_817667-MLB41320587912_042020-F.webp" alt="">
                                        <div class="card-body">
                                            <span class="product-category">MPB</span>
                                            <h4>Descobridor dos 7 mares</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <img class="card-img-top" src="https://static.cloud-boxloja.com/lojas/yrfv6/produtos/7a338ad9-31be-475e-af1f-c41d69242bce.jpg" alt="">
                                        <div class="card-body">
                                            <span class="product-category">POP</span>
                                            <h4>Smooth Criminal</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! consectetur adipisicing elit.</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <img class="card-img-top" src="https://img.discogs.com/GaLXLGv7MT01JcNC_NCIlHyBf-g=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-2376888-1282161093.jpeg.jpg" alt="">
                                        <div class="card-body">
                                            <span class="product-category">MPB</span>
                                            <h4>Seu Jorge and AMALZ</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <img class="card-img-top" src="https://i.pinimg.com/originals/c7/da/53/c7da536d55a1a626909ee7567434414c.jpg" alt="">
                                        <div class="card-body">
                                            <span class="product-category">ROCK</span>
                                            <h4>Best Of The Beast</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! Vero, possimus nostrum! Ver</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end 01-->

                        <!--init 02-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQILoz8Obs2bhCGMWvOkyC95XG0zf9ybko7hQ&usqp=CAU" alt="">
                                        <div class="card-body">
                                            <span class="product-category">ROCK</span>
                                            <h4>Stadium Arcanium</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! Vero, possimus nostrum! Ver</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <img class="card-img-top" src="https://i.ebayimg.com/images/g/WY4AAOSwXzBfSUl5/s-l225.jpg" alt="">
                                        <div class="card-body">
                                            <span class="product-category">ROCK</span>
                                            <h4>Hot Fuss</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! Vero, possimus nostrum! Ver</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <img class="card-img-top" src="https://i.pinimg.com/originals/7c/32/c0/7c32c065ae915fa771cad6764094e33c.jpg" alt="">
                                        <div class="card-body">
                                            <span class="product-category">ROCK</span>
                                            <h4>Hot Space</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! Vero, possimus nostrum! Ver</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <img class="card-img-top" src="https://vinils3.s3.amazonaws.com/wp-content/uploads/2020/01/23111256/kiss-destriyer3.jpg" alt="">
                                        <div class="card-body">
                                            <span class="product-category">ROCK</span>
                                            <h4>Destroyer</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! Vero, possimus nostrum! Ver</p>
                                            <div class="product-button">
                                                <div class="product-price">$230.99</div>
                                                <div class="product-links">
                                                    <a href=""><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end 02-->
                    </div>
                </div>
            </section>
            <!--\Product Carosel-->


        </div>
    </main>

<?php 
    include ('partials/footer.php');
?>