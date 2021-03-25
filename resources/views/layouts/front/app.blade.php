<?php 
use App\Models\Category;

$media_publication = Category::where('type', 'blog')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/megamenu.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    @yield('extra_style')
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/img/bdrcs-logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
                        </div>   
                        <div class="col-md-10 col-sm-10">
                            <div class="contact">
                                <p style="text-align: right"><span class="phone"><a href="#">Phone: +1023546789</a></span><span class="email"><a href="#">Email: testdomain@gmail.com</a></span><span class="email"><a href="#" class="join-us">JOIN US NOW</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="header-bottom">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container">
                    <a class="navbar-brand" href="#">
                        BDRCS RANGPUR
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Who We Are <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <span class="text-uppercase text-white">About BDRCS</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">History of BDRCS</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Organizational Structure</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Mission & Vission</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Partners</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Unit/Branches</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase text-white">Our Management</span>
                                        <ul class="nav flex-column">
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Managing Board</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Senior Management</a>
                                        </li>
                                    </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase text-white">Movement</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Movement Principle</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <a href="">
                                        <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                                        </a>
                                        <p class="text-white">Short image call to action</p>

                                    </div>
                                    <!-- /.col-md-4  -->
                                    </div>
                                </div>
                                <!--  /.container  -->


                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                What We Do <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <span class="text-uppercase text-white">Disaster Risk Management</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>
                                        
                                        <span class="text-uppercase text-white">Planing And Development</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase text-white">Disaster Response</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>

                                        
                                        <span class="text-uppercase text-white">Health</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase text-white">Training</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>

                                        
                                        <span class="text-uppercase text-white">Youth And Volunteers</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase text-white">Community Development</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>

                                        
                                        <span class="text-uppercase text-white">Cross Cutting Issues</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 1</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 2</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#">Item 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <!--  /.container  -->


                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Get Involved <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-4">
                                        <span class="text-uppercase text-white">Get Involved</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/donate-us') }}">Donate Us</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/member/create') }}">Become A Member</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/souvenir-item') }}">Buy Souvenir Item</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/request-for-training') }}">Request For Training</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-4">
                                        <ul class="nav flex-column">
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/donate-blood') }}">Donate/Get Blood</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{url('/volunteer-form/create')}}">Volunteer Form</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{url('/career')}}">Career</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{url('/lets-partner')}}">Let's Partner</a>
                                        </li>
                                    </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-4">
                                        <a href="">
                                        <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                                        </a>
                                        <p class="text-white">Short image call to action</p>

                                    </div>
                                    <!-- /.col-md-4  -->
                                    </div>
                                </div>
                                <!--  /.container  -->


                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Media & Publication <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-4">
                                        <span class="text-uppercase text-white">Media & Publication</span>
                                        <ul class="nav flex-column">
                                        @foreach($media_publication as $mp)
                                        <li class="nav-item">
                                        <a class="nav-link active" href="{{ url('category/'.$mp->id) }}">{{ $mp->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-4">
                                        <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('photo-gallery') }}">Photo Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('video-gallery') }}">Video Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/category/'.CAT_NOTICE) }}">Notice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('news-letter') }}">News Letter</a>
                                        </li>
                                    </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-4">
                                        <a href="">
                                        <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                                        </a>
                                        <p class="text-white">Short image call to action</p>

                                    </div>
                                    <!-- /.col-md-4  -->
                                    </div>
                                </div>
                                <!--  /.container  -->


                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="donate btn btn-danger" href="{{ url('donate-us') }}" style="padding-top: 0px; padding-bottom: 0px;">Donate Us</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0" style="float: right">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    </div>
                </nav>
            </section>
        </header>

        @yield('content')



        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">
                            <h2>HELP CHARITY</h2>
                            <p>Bangladesh Red Crescent Society was established by the President Order 26 of 1973 as an auxiliary to the Public Authority. It is a member of the International Federation of Red Cross and Red Crescent Societies (IFRC), committed to the Fundamental Principles of the Red Cross and Red Crescent Movement i.e. Humanity, Neutrality, Impartiality, Independence, Unity, Voluntary Service and Universality.

</p>
                            <hr>
                            <p><a href="https://www.facebook.com/Bangladesh-Red-Crescent-Society-Rangpur-Unit-424680781070200"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="footer-text one">
                                    <h3>RESOURCES</h3>
                                    <ul>
                                        <li><a href="#reports"><i class="material-icons">keyboard_arrow_right</i> Report </a></li>
                                        <li><a href="#news"><i class="material-icons">keyboard_arrow_right</i>News & Stories </a></li>
                                        <li><a href="#gandp"><i class="material-icons">keyboard_arrow_right</i> Gallery & Publications</a></li>
                                        <li><a href="#focus"><i class="material-icons">keyboard_arrow_right</i> Focus</a></li>
                                        <li><a href="#vol"><i class="material-icons">keyboard_arrow_right</i> Be a Volunteers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3">
                                <div class="footer-text two">
                                    <h3>USEFUL LINKS</h3>
                                    <ul>

                                        <li><a href="https://www.youthop.com/bd/volunteer-service">yo BANGLADESH</a></li>
                                        <li><a href="https://www.unicef.org/bangladesh/">UNICEF</a></li>
                                        <li><a href="https://www.vsointernational.org/">VSO</a></li>
                                        <li><a href="https://vbd.com.bd/">VBD</a></li>
                                        <li><a href="https://bdrcs.org/">BDRCS</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-text one">
                                    <h3>CONTACT US</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">location_on</i>Rangpur Red Crescent Unit, Kachari Bazar, Rangpur</a></li>
                                        <li><a href="#"><i class="material-icons">email</i>rangpur@bdrcs.org</a></li>
                                        <li><a href="#"><i class="material-icons">call</i> 0521-55693</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p>Copyright @ 2021 <a href="{{ url('/') }}">BDRCS RANGPUR</a> | All Rights Reserved </p>
            </div>
        </footer>
    </div>
    
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ url('js/jquery-3.1.1.min.js') }}" defer="defer"></script>
    <script src="{{ url('js/animationCounter.js') }}" defer="defer"></script>
    <script src="{{ url('js/bootstrap.min.js') }}" defer="defer"></script>
    <script src="{{ url('js/owl.carousel.min.js') }}" defer="defer"></script>
    <script src="{{ url('js/active.js') }}" defer="defer"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    @yield('extra_script')
@include('sweetalert::alert')

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
