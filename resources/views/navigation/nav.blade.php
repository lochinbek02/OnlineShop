@extends('app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light shadow sticky-top">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Online Shop
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="container"> -->
                
                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="container" style="padding-left: 200px;">   
                <div class="flex-fill" style="padding-right: 20px;">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('post')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('xaqida')}}">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('Views.Clothes')}}">Clothes</a></li>
                                    <li><a class="dropdown-item" href="{{route('Views.Phones')}}">Phone</a></li>
                                    <li><a class="dropdown-item" href="{{route('Views.Laptops')}}">Laptops</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Add Product
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('clothes')}}"> Add Clothes</a></li>
                                    <li><a class="dropdown-item" href="{{route('phone')}}">Add Phone</a></li>
                                    <li><a class="dropdown-item" href="{{route('laptop')}}">Add Laptops</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('people')}}">Request</a>
                            </li>
                        </ul>
                    </div>
                    </div> 
                   
                    
                    <div class="navbar align-self-center  " style="padding-left: 60px;">
                        
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-0">
                        <a href=""><button class="btn  me-md-0" type="button"><i class="bi bi-search"></i></button></a>
                        
                        <button class="btn " type="button"><i class="bi bi-gear"></i></button>
                        
                            <!-- <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                        -->
                    </div>
                        <!-- <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                                <div class="input-group-text">
                                    <i class="fa fa-fw fa-search"></i>
                                    
                                </div>
                            </div>
                        </div> -->
                        <!-- <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                            <i class="fa fa-fw fa-search text-dark mr-2"></i>
                            
                        </a>
                        <a class="nav-icon position-relative text-decoration-none" href="#">
                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                        </a>
                        <a class="nav-icon position-relative text-decoration-none" href="#">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                        </a> -->
                    </div>
                </div>
                <!-- </div> -->
        </div>
        
        
</nav>
    <!-- Start Slider -->
    
   
    <!-- End Slider -->
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <!-- Slides -->
    
    <div class="carousel-inner" style=" height: 550px;">
        <div class="carousel-item active">
            <img src="{{ asset('images/banner-01.jpg')}}" alt="Slide 1">
            <div class="carousel-caption">
                <h3>Slide 1 Heading</h3>
                <p>Slide 1 Description</p>
            </div>
        </div>
        <div class="carousel-item " >
            <img src="{{ asset('images/ banner-02.jpg')}}" alt="Slide 2" >
            <div class="carousel-caption">
                <h3>Slide 2 Heading</h3>
                <p>Slide 2 Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banner-03.jpg')}}" alt="Slide 3">
            <div class="carousel-caption">
                <h3>Slide 3 Heading</h3>
                <p>Slide 3 Description</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"><strong>Previous</strong></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="sr-only"><strong>Next</strong></span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        
    </a>
    

</div>
</div>

    <!-- Start Categories  -->
   
    @foreach ($arr as $item)
   
    <div class="categories-shop">
        <div class="container ">
            <div class="row">
                @foreach($item as $key => $value)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " >
                    <div class="shop-cat-box text-center" style="width: 350px; height: 350px;">
                        <img class="img-fluid" style="border-radius: 5px; width: 250px; height: 300px; " src="{{asset('storage/'. $value[0])}}" alt="" />
                        <br>
                        <a class="btn hvr-hover " href="{{ route('about.product',$value[1]) }}"><strong>{{$key}}</strong></a>
                         
                    </div>
                    
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    @endforeach 
    <!-- <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box text-center">
                        <img class="img-fluid" src="images/t-shirts-img.jpg" alt="" />
                        <br>
                        <a class="btn hvr-hover " href="#"><strong>T-shirts</strong></a>
                    </div>
                    <div class="shop-cat-box text-center">
                        <img class="img-fluid" src="images/shirt-img.jpg" alt="" />
                        <br>
                        <a class="btn hvr-hover" href="#"><strong>Shirt</strong></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="shop-cat-box text-center">
                        <img class="img-fluid" src="images/wallet-img.jpg" alt="" />
                        <br>
                        <a class="btn hvr-hover" href="#"><strong>Wallet</strong></a>
                    </div>
                    <div class="shop-cat-box text-center">
                        <img class="img-fluid" src="images/women-bag-img.jpg" alt="" />
                        <br>
                        <a class="btn hvr-hover" href="#"><strong>Bags</strong></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box text-center">
                        <img class="img-fluid" src="images/shoes-img.jpg" alt="" />
                        <br>
                        <a class="btn hvr-hover" href="#"><strong>Shoes</strong></a>
                    </div>
                    <div class="shop-cat-box text-center">
                        <img class="img-fluid" src="images/women-shoes-img.jpg" alt="" />
                        <br>
                        <a class="btn hvr-hover" href="#"><strong>Women Shoes</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- End Categories -->
    <script>
    $(document).ready(function(){
        $('.carousel').carousel();
    });
    </script>

@endsection
