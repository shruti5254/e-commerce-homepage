@extends('frontend.layouts.app')

@push('after-styles')
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet"/>
@endpush

@section('content')

    

    <header class="header">
        <!-- <div class="row"> -->
        <div class="header-1">
            <div class="header-1 float-left">
                <div class="contact">Contact Us:</div>
                    <a href="#" class="telephone"><i class="fa fa-phone"></i>+1234567890</a>
                <div class="social-icons">
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>

            </div>
            <div class="header-1 float-right">
                <a href="#" class="about">About US</a>
                <a href="#" class="customer-care">Customer Care</a>
                <a href="#" class="Sign-in">Sign In/Create</a>
                
            </div>
        </div>
        <!-- </div> -->

        <div class="header-2">
            <div class="container  container-header-2">
                <div class="row">
                    <div class="col col-sm-4 col-md-3 col-lg-3">
                        <div class="p-2 px-md-0 py-md-2 logo">
                        <a href="#" class="logo"><img src="" alt=""> LumBini Mart</a>
                        </div>
                       
                    </div>
                   
                    
                    <div class="col col-sm-12 col-md-6 col-lg-6 search-form px-md-0">  
                        <form action="" class="p-2  px-md-2 py-md-2 form">
                            <input type="search" placeholder="" id="search">
                            <!-- <a href="#" class="search"><img src="Images/search.png" alt="" class="img-fluid"></a> -->
                            <label for="search" class="fas fa-search"></label>
                        </form>
                    </div> 
            
                    <div class="col col-md-3 col-lg-3 px-md-0">
                        <div class="p-2 px-md-2 py-md-2 shopping-bags">
                            <a href="#" class="wishlist"><i class="fa-regular fa-heart"></i>wishlist</a>
                    <!-- </div>
                    <div class="col-2"> -->
                            <a href="#" class="cart"><i class="fa-solid fa-shopping-cart"></i>Cart</a>
                       </div>
                    </div>
                </div> 
            </div>
        </div>
            
    <!-- </header> -->
    <!-- header ends -->

    <!--navbar starts-->
    
        <nav class="navbar">
            <!-- <div class="container container-nav"> -->
            <div class="navbar-menu">
                <div id="menu" class="hide-content">
                    <div id="bar-1" class="bar"></div>
                    <div id="bar-2" class="bar"></div>
                    <div id="bar-3" class="bar"></div>
                </div>
                <ul class="nav_ul">
                    <li class="nav_li">
                        <a href="#" class="personal-hygine">Personal hygine</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                <div class="column second-column">
                                <h6 class="title">category-2</h6>
                               
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                <div class="column third-column">
                                <h6 class="title">category-3</h6>
                               
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                <div class="column forth-column">
                                <h6 class="title">category-4</h6>
                               
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                <div class="column fifth-column">
                                <h6 class="title">category-5</h6>
                               
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                <div class="column sixth-column">
                                <h6 class="title">category-6</h6>
                               
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div> 
                                <div class="column seventh-column">
                                <h6 class="title">category-7</h6>
                               
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                
                            </div>
                        </div>
                             
                    </li>
                    <li class="nav_li">
                        <a href="#" class="personal-hygine">beverage</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        
                    </li>
                    <li class="nav_li">
                        <a href="#" class="personal-hygine">clothe</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="personal-hygine">shoe</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="personal-hygine">household</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="personal-hygine">grocery</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div> 
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">food</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li">
                        <a href="#" class="personal-hygine">utensil</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">decoration</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">dog</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">sports</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">electronics</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">furniture</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">cosmetics</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">frozen</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav_li"> 
                        <a href="#" class="personal-hygine">decoration</a>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="megamenu">
                            <div class="megamenucategory">
                                <div class="column first-column">
                                <h6 class="title">category-1</h6>
                                <ul class="mega_ul">
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                    <li><a href="#">subcategory</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <!-- </div> -->
        </nav>
    </header>
     <!--navbar ends-->

     <!--slider starts-->
    <div class="carousel-wrap">
        <div id="header-carousel" class="owl-carousel owl-theme">
            <div class="item"><img src="images/banner-1.png" alt=" first-image"></div>
            <div class="item"><img src="images/banner-1.png" alt=" second-image"></div>
            <div class="item"><img src="images/banner-1.png" alt=" third-image"></div>
            <div class="item"><img src="images/banner-1.png" alt="forth-image"></div>
        </div>
        
    </div>
    <!--slider ends--> 

    <!--main section top starts-->
    <div class="container container-section px-sm-0 px-md-1 px-lg-5  pt-4 pb-2">

    <section class="main-section-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-top">FEATURED PRODUCTS</h1>

                </div>
            </div>
        </div>
        
        
        <div class="section section-products">
            <div class="container">
                <div class="row row-cols-2  row-cols-md-3  row-cols-lg-5  g-sm-5 g-md-5  g-lg-3">
                    <div class="col" >
                        <div class=" section-stuffs">
                        <a href="#" class="">
                            <div class="top">
                                <!-- <div class="sale">sale </div> -->
                                <div class=" p-3 image-1">
                                    <div class="sale">sale </div>
                                    <img src="Images/img-1.png" alt="" class="img-fluid" >
                                </div>
                            </div>
                            <div class="middle">
                                <h5>Earphone</h5>
                                <div class="price-new">Rs 1200</div>
                                <div class="price-prev">Rs 1800</div>
                            </div>
                            <div class="bottom">
                                <!-- <a href="#" class="bottom-cart"> -->
                                <i class="fas fa-shopping-cart"></i>
                                <!-- </a> -->
                            </div>
                            <!-- <div class="sale">sale</div> -->
                        </a>
                        </div>
                    </div>
                    <div class="col" >
                        <div class="section-stuffs">
                        <a href="#" class="">
                            <div class="top">
                                <!-- <div class="sale">sale</div> -->
                                <div class=" p-3 image-1">
                                <div class="sale">sale </div>
                                    <img src="Images/img-2.png" alt="" class="img-fluid" >
                                </div>
                            </div>
                            <div class="middle">
                                <h5>Earphone</h5>
                                <div class="price-new">Rs 1200</div>
                                <div class="price-prev">Rs 1800</div>
                            </div>
                            <div class="bottom">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </a> 
                        </div> 
                    </div>
                    <div class="col" > 
                        <div class="section-stuffs">
                            <!-- <div class="sale">sale </div>     -->
                        <a href="#" class="">
                            <div class="top">
                                <!-- <div class="sale">sale</div> -->
                                <div class=" p-3 image-1">
                                    <div class="sale">sale </div>
                                    <img src="Images/img-3.png" alt="" class="img-fluid" >
                                </div>
                            </div>
                            <div class="middle">
                                <h5>Earphone</h5>
                                <div class="price-new">Rs 1200</div>
                                <div class="price-prev">Rs 1800</div>
                            </div>
                            <div class="bottom">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col" >
                        <div class="section-stuffs">
                            <!-- <div class="sale">sale </div> -->
                        <a href="#" class="">
                            <div class="top">
                                <!-- <div class="sale">sale</div> -->
                                <div class=" p-3 image-1">
                                    <div class="sale">sale </div>
                                    <img src="Images/img-4.png" alt="" class="img-fluid" >
                                </div>
                            </div>
                            <div class="middle">
                                <h5>Earphone</h5>
                                <div class="price-new">Rs 1200</div>
                                <div class="price-prev">Rs 1800</div>
                            </div>
                            <div class="bottom">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </a>
                        </div>
                    </div>    
                    <div class="col" >
                        <div class="section-stuffs">
                            <!-- <div class="sale">sale </div> -->
                        <a href="#" class="">
                            <div class="top">
                                <!-- <div class="sale">sale</div> -->
                                <div class=" p-3 image-1">
                                    <div class="sale">sale </div>
                                    <img src="Images/img-5.png" alt="" class="img-fluid" >
                                </div>
                            </div>
                       
                            <div class="middle">
                               <h5>Earphone</h5>
                               <div class="price-new">Rs 1200</div>
                               <div class="price-prev">Rs 1800</div>
                              
                            </div>
                            
                            <div class="bottom">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </a>    
                        </div>
                    </div>
                    
                    
                
                </div>

            </div>
            
        </div>
    </section>
    <!--main section top ends-->

    <!--main section middle starts-->
    <section class="main-section-middle">
        <div class="container container-electronics">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-middle">ELECTRONICS</h1>
                </div>
            </div>
        </div>

        <div class="section section-products">
            <div class="container">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-sm-5 g-md-5 g-lg-3">
                    <!--first row-->
                    <!-- <div id="first row">  -->
                        <div class="col">
                            <div class="section-stuffs">
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-6.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                        
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                    
                        <div class="col" >
                            <div class="section-stuffs">
                            <a href="#" class="">
                            
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-7.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-8.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-9.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-10.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                    <!-- </div> -->
                    <!--first row ends-->
    

                    <!--second row of middle section-->
                    <!-- <div id="second row">     -->
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-11.png" alt="" class="img-fluid" >
                                    </div>
                                    </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                   <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-12.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-13.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-14.png" alt="" class="img-fluid" >
                                    </div>
                                    </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-15.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>    
                        </div>   
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <div class="container container-banner">
            <div class="row row-banner">
                <div class="col pb-0 pt-5">
                    <h1 class="title-middle">SPECIAL PRODUCTS</h1>
                </div>
            </div>
        </div>
        <div class="container container-new">
            <div class="row row-new">
                <div class=" col col-sm-12 ">
                    <div class="background-banner">
                        <img src="Images/banner-1.png" alt="" class="img-fluid">
                        <!-- <div class="banner-text"> -->
                        <div class="hurry-up">Hurry up!</div>
                        <div class="discount">Discount on household items</div>
                        <div class="percent">20%</div>
                        <div class="text">Enjoy your time perfectly!</div>
                        <!-- </div>  -->
                    </div>   
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row row-cols row-cols-lg-8  g-2 g-lg-3 banner-below pb-5 mb-5">   
                <!-- <div class=" row banner-below  pb-5 mb-5"> -->
                    <div class="col">
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-1.png"></a></div>
                    </div>
                    <div class="col">
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-2.png"></a></div>
                    </div>
                    <div class="col">
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-3.png"></a></div>
                    </div>
                    <div class="col">
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-4.png"></a></div>
                    </div>    
                    <div class="col">
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-5.png"></a></div>
                    </div>
                    <div class="col">    
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-6.png"></a></div>
                    </div>
                    <div class="col">    
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-7.png"></a></div>
                    </div>
                    <div class="col">
                        <div class="banner-below-img"><a href="#" class="" alt="" class="img-fluid"><img src="Images/banner-below-8.png"></a></div>
                    </div>    

                <!-- </div> -->
                <!-- </div> -->
            </div>
          
        </div>
        <div class="container container-foods">
            <div class="row">
                <div class="col-12 py-0">
                    <h1 class="title-middle">FOOD</h1>
                </div>
            </div>
        </div>
        <div class="section section-products">
            <div class="container">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-sm-5 g-md-5 g-lg-3">
                    <!--first row-->
                    <!-- <div id="first row">  -->
                        <div class="col">
                            <div class="section-stuffs">
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-16.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>
                        </div>
                    
                        <div class="col" >
                            <div class="section-stuffs">
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-17.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-18.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-19.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col">
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-20.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                    <!-- </div> -->

                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-21.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-22.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-23.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-24.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-25.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                </div>  
            </div>
        </div>    
        <div class="container container-middle-banner px-3 py-5">
            <div class="row g-2 g-lg-3">
                <div class="col-2 ">
                    <div class="p-0 banner-left">
                        <img src="Images/img-15.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-8 ">
                    <div class="p-0 middle-banner">
                        <img src="Images/middle-banner.png" alt="" class="img-fluid">
                        <div class="shop">Explore the entire shop</div>
                        <div class="buy">Buy different products</div>
                        <div class="word">Enjoy !</div>
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="p-0 banner-right">
                        <img src="Images/middle-banner-right.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-households">
            <div class="row">
                <div class="col-12 py-0">
                    <h1 class="title-middle">HOUSEHOLDS</h1>
                </div>
            </div>
        </div>
        <div class="section section-products">
            <div class="container">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-sm-5 g-md-5 g-lg-3">
                    <!--first row-->
                    <!-- <div id="first row">  -->
                        <div class="col">
                            <div class="section-stuffs">
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-26.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>
                        </div>
                    
                        <div class="col" >
                            <div class="section-stuffs">
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-27.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-28.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-29.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-30.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                    <!-- </div> -->

                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-31.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a> 
                            </div> 
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-32.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-33.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-34.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                        <div class="col" >
                            <div class="section-stuffs">    
                            <a href="#" class="">
                                <div class="top">
                                    <!-- <div class="sale">sale</div> -->
                                    <div class=" p-3 image-1">
                                        <div class="sale">sale </div>
                                        <img src="Images/img-35.png" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="middle">
                                    <h5>Earphone</h5>
                                    <div class="price-new">Rs 1200</div>
                                    <div class="price-prev">Rs 1800</div>
                                </div>
                                <div class="bottom">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <footer class="footer">
        <div class="container container-fluid container-footer">
            <div class="row  justify-content-evenly row-footer mt-4 mb-0 pt-5 pb-0 mx-5">
                <div class="col-6">
                    <div class="logo-repeat">
                        <a href="#" class=""><img src="" alt=""></a>
                        LumBini Mart
                    </div>
                    <div class=" download ">
                        <a href="" class=""><p>Download our app</P></a>
                        <a href="#" class="app"><img src="Images/footer-1.png" alt="" class=""></a>
                        <a href="#" class="app"><img src="Images/footer-2.png" alt="" class=""></a>
                    </div>
                </div>
                <div class="col">
                   <div class="aboutus">
                    <a href="" class="">about us</a>
                   </div>
                   <div class="aboutus">
                    <a href="" class="">Our Site</a>
                   </div>
                   <div class="aboutus">
                    <a href="" class="">Our Company</a>
                   </div>
                </div>
                <div class="col">
                    <div class="quick-link">Quick Links
                        <ul>
                            <li>
                                <a href="#" class="">Households</a>
                            </li>
                            <li>
                                <a href="#" class="">Electronics</a>
                            </li>
                            <li>
                                <a href="#" class="">Utensils</a>
                            </li>
                            <li>
                                <a href="#" class="">Food</a>
                            </li>
                            <li>
                                <a href="#" class="">Clothes</a>
                            </li>
                            <li>
                                <a href="#" class="">Grocery</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="other-link">Other Links
                        <ul>
                            <li>
                                <a href="#" class="">About us</a>
                            </li>
                            <li>
                                <a href="#" class="">Customer care</a>
                            </li>
                            <li>
                                <a href="#" class="">Privacy</a>
                            </li>
                            <li>
                                <a href="#" class="">Policy</a>
                            </li>
                            <li>
                                <a href="#" class="">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="contactus">Contact Us:</div>
                        <div class="phn-num">
                            <a href="#" class="contact"><i class="fa fa-phone"></i>+1234567890</a>
                        </div>
                        <div class="mail">
                            <a href="#" class="contact"><i class="fa-solid fa-envelope"></i>gmail</a>
                        </div>
                        <div class="address">
                            <a href="#" class="contact"><i class="fa-solid fa-location-dot"></i>location</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class=" row">
                    <div class=" col-6">
                        <div class="text-centre">
                            <span class="copyright">Copyright &copy; LumbiniMart.All right reserved.</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <span class="social-icon-footer">
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection

@push('after-scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endpush