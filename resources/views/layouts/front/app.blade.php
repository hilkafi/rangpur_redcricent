<?php 
use App\Models\Category;
use App\Models\Project;

$media_publication = Category::whereIn('id', [CAT_REPORT, CAT_NEWS, CAT_STORIES, CAT_FOCUS, CAT_PUBLICATION])->get();
$disaster_risks = Project::where('category_id', CAT_DISASTER_RISK_MANAGEMENT)->latest()->limit('6')->get();
$disaster_responses = Project::where('category_id', CAT_DISASTER_RESPONSE)->latest()->limit('6')->get();
$trainings = Project::where('category_id', CAT_TRAINING)->latest()->limit('6')->get();
$c_developments = Project::where('category_id', CAT_COMMUNITY_DEVELOPMENT)->latest()->limit('6')->get();
$pl_developments = Project::where('category_id', CAT_PLANNING_DEVELOPMENT)->latest()->limit('6')->get();
$healths = Project::where('category_id', CAT_HEALTH)->latest()->limit('6')->get();
$youth_volunteers = Project::where('category_id', CAT_YOUTH_VOLUNTEERS)->latest()->limit('6')->get();
$cc_issues = Project::where('category_id', CAT_CROSS_CUTTING_ISSUES)->latest()->limit('6')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDRCS RANGPUR UNIT</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/megamenu.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    @yield('extra_style')
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <section class="header-top"">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ url('/img/bdrcs-logo.png') }}" width="50" height="50" class="d-inline-block align-top" alt="">
                        </div>   
                        <div class="col-md-10 col-sm-10">
                            <div class="contact" id="display-hidden">
                                <p style="text-align: right"><span class="phone"><a href="#">Phone: 0521-55693</a></span><span class="email"><a href="#">Email: rangpur@bdrcs.org</a></span><span class="email"><a href="{{ url('/member/create') }}" class="join-us">JOIN US NOW</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="header-bottom" style="background: #F0F0F0">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        BDRCS RANGPUR UNIT
                    </a>
                    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon bg-primary"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-bold" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Who We Are <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-3">
                                    <a href="#" class="nav-bold"><span class="text-uppercase text-white">About BDRCS</span></a>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('page/'.CAT_HISTORY) }}">History of BDRCS</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/organizational-structure') }}">Organizational Structure</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/page/'.CAT_MISSION) }}">Mission & Vission</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/partners') }}">Partners</a>
                                            </li>
                                        </ul>

                                        <a href="#" class="nav-bold"><span class="text-uppercase text-white">Movement</span></a>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('page/'.CAT_MOV_PRICEPLE) }}">Movement Principle</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <a href="#" class="nav-bold"><span class="text-uppercase text-white">Our Management</span></a>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/managing-board') }}">Managing Board</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/senior-management') }}">Senior Management</a>
                                            </li>
                                        </ul>

                                        <a href="#" class="nav-bold"><span class="text-uppercase text-white">Members</span></a>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/executive-committee') }}">Executive Committee</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/life-member') }}">Life Member</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/youth-executive') }}">Youth Executive Committee</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/rcy-volunteer') }}">RCY Volunteer</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <a href="#" class="nav-bold"><span class="text-uppercase text-white">Unit/Branches</span></a>
                                        <ul class="nav flex-column">
                                            @foreach(upazilas() as $key => $value)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/upazila_volunteer/'.$key) }}">{{$value}}</a>
                                            </li>
                                            @endforeach
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
                                        <a href="{{ url('project/category/'.CAT_DISASTER_RISK_MANAGEMENT) }}" class="nav-bold"><span class="text-uppercase text-white">Disaster Risk Management</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($disaster_risks as $dr)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$dr->id) }}">{{ $dr->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        
                                        <a href="{{ url('project/category/'.CAT_PLANNING_DEVELOPMENT) }}" class="nav-bold"><span class="text-uppercase text-white">Planing And Development</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($pl_developments as $pl)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$pl->id) }}">{{ $pl->name }}</a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                    <a href="{{ url('project/category/'.CAT_DISASTER_RESPONSE) }}" class="nav-bold"><span class="text-uppercase text-white">Disaster Response</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($disaster_responses as $dres)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$dres->id) }}">{{ $dres->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>

                                        
                                        <a href="{{ url('project/category/'.CAT_HEALTH) }}" class="nav-bold"><span class="text-uppercase text-white">Health</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($healths as $health)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$health->id) }}">{{ $health->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                    <a href="{{ url('project/category/'.CAT_TRAINING) }}" class="nav-bold"><span class="text-uppercase text-white">Training</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($trainings as $training)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$training->id) }}">{{ $training->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>

                                        
                                        <a href="{{ url('project/category/'.CAT_YOUTH_VOLUNTEERS) }}" class="nav-bold"><span class="text-uppercase text-white">Youth And Volunteers</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($youth_volunteers as $yv)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$yv->id) }}">{{ $yv->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                    <a href="{{ url('project/category/'.CAT_COMMUNITY_DEVELOPMENT) }}" class="nav-bold"><span class="text-uppercase text-white">Community Development</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($c_developments as $cd)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$cd->id) }}">{{ $cd->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>

                                        
                                        <a href="{{ url('project/category/'.CAT_CROSS_CUTTING_ISSUES) }}" class="nav-bold"><span class="text-uppercase text-white">Cross Cutting Issues</span></a>
                                        <ul class="nav flex-column">
                                            @foreach($cc_issues as $cc)
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('single-project/'.$cc->id) }}">{{ $cc->name }}</a>
                                            </li>
                                            @endforeach
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
                                    <a href="#" class="nav-bold"><span class="text-uppercase text-white">Get Involved</span></a>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/donate-us') }}">Donate Us</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/member/create') }}">Become A Member</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/buy-souvenir-product') }}">Buy Souvenir Item</a>
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
                                        <a href="#" class="nav-bold"><span class="text-uppercase text-white">Media & Publication</span></a>
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
                                <a class="nav-link nav-bold" href="{{ url('/contact-us') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="donate btn btn-danger nav-bold" href="{{ url('donate-us') }}" style="padding-top: 0px; padding-bottom: 0px; color: #fff !important">Donate Us</a>
                            </li>
                        </ul>
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
