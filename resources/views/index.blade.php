<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Test 1</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
  <!-- custom styles -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">
        <div class="toggler-icon">
            <i class="fas fa-bars mr-5"></i>
        </div>

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="{{route('index')}}" target="_blank">
          <img class="img-fluid" width="40" height="" src="{{asset('sources/logo-navbar.png')}}">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Left -->
            <div class="navbar-nav mr-auto">
                <p class="nav-logo-name" href="{{route('index')}}">
                    Recruiter Network<span class="nav-domain">.io</span>
                </p>
            </div>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <div class="notif-badge-container">
                        <i class="fas fa-bell notif-icon"></i>
                        <span class="badge-notif"></span>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link waves-effect nav-lang" target="_blank">
                        NL
                    </a>
                </li>
                <li class="nav-item">
                    |
                </li>
                <li class="nav-item nav-item-lang">
                    <a href="" class="nav-link waves-effect nav-lang" target="_blank">
                        EN
                    </a>
                </li>
                <li class="nav-item nav-profile">
                    <a class="nav-link waves-effect" href="">
                        <div class="nav-profile-img">
                            <img src="{{asset('sources/favicon.png')}}" alt="image">
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-profile">
                    <a class="nav-link waves-effect" href="">
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">Andrei</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-caret-down"></i>
                    </a>
                </li>
            </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-columns mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item active waves-effect">
            <i class="far fa-folder mr-3"></i>Jobs</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fab fa-galactic-republic mr-3"></i>Talentpool</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-file-invoice-dollar mr-3"></i>Invoice</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-inbox mr-3"></i>Inbox</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="far fa-comment-alt mr-3"></i>Chat</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="far fa-folder mr-3"></i>Publishing</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="far fa-star mr-3"></i>Flexbase</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-users mr-3"></i>Assesments</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
        <!-- List group links -->
        <div class="row" style="margin-left: auto">
            <ul class="inline-badge">
                <li class="badge-list badge-download-resume">
                    <i class="fas fa-cloud-download-alt mr-1"></i>
                    <span>Download Resume</span>
                </li>
                <li class="badge-list badge-reject">
                    <i class="far fa-times-circle mr-1"></i>
                    <span>Reject Candidate</span>
                </li>
                <li class="badge-list badge-interview">
                    <i class="far fa-calendar-alt mr-1"></i>
                    <span>Plan Interview</span>
                </li>
                <li class="badge-list badge-hire">
                    <i class="far fa-eye mr-1"></i>
                    <span>Hire Candidate</span>
                </li>
            </ul>
        </div>
        <!-- List group links -->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-3 mb-4">

                <!--Card-->
                <div class="card card-style">

                    <!--Card content-->
                    <div class="card-body card-profile" style="padding: 0;">

                        <div class="header-profile">
                            <img class="img-fluid img-profile" src="{{asset('sources/photo.png')}}" />
                            <img class="img-fluid img-icon mr-1" src="{{asset('sources/icon.png')}}" />
                        </div>

                        <h3 class="title-style ml-2 mb-0">Evan Yates</h3>
                        <p class="ml-2 mt-0">UI/UX Designer</p>

                        <div class="badge-address ml-2">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>NYC, New York, USA</span>
                        </div>

                        <hr>

                        <div class="header-profile ml-2 mr-2">
                             <p class="badge-star mr-2 text-left">
                                <i class="far fa-star mr-1"></i>
                                <span>5</span>
                                <span style="float: right;">(4)</span>
                            </p>
                            <p class="badge-time text-left">
                                <i class="far fa-clock mr-1"></i>
                                <span>80%</span>
                                <span style="float: right;">(24)</span>
                            </p>
                        </div>

                        <div class="badge-budget ml-2 mr-2 text-left mb-2">
                            <i class="fas fa-coins mr-1"></i>
                            <span>$4 / hour</span>
                        </div>

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-9 mb-4">

                <!--Card-->
                <div class="card card-style mb-4">

                    <!--Card content-->
                    <div class="card-body card-summary">
                        <h3 class="title-style">Summary</h3>
                        <p class="paragraph mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue elementum non molestie et vitae rutrum nunc. 
                            Orci, nam dolor urna vitae duis in non egestas. Amet, aliquet sed egestas lobortis nulla nisi, duis purus malesuada. 
                            Duis enim morbi amet, vulputate id gravida aliquet. Amet, dignissim quam magna molestie et vitae eu nunc molestie. 
                            Amet, dignissim quam magna molestie et vitae eu nunc molestie. Ut massa est vel ac tempus id. Id consequat eros duis imperdiet. 
                            Pellentesque sed elit interdum urna commodo ultricies nisi convallis.</p>

                        <p class="paragraph">Nisl, et, fermentum, nullam turpis risus sit auctor elit proin. Egestas pellentesque lectus ac non orci cras nulla tincidunt. 
                            Consequat, urna quisque dolor in diam, massa diam. Lectus id suscipit aenean arcu. Dolor condimentum in adipiscing vulputate pharetra mus scelerisque. </p>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <div class="col-md-12 title mt-2">
                <h3 class="title-style">Hiring Information</h3>
            </div>

            <!--Grid column-->
            <div class="col-md-6 mb-4 mt-2">

                <!--Card-->
                <div class="card card-style pt-0">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="dot"></span>
                                <span class="label-info ml-2">Salary Range</span>
                                <div class="badge-hiring-info text-left my-2">
                                    Evan Yates
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="dot"></span>
                                <span class="label-info ml-2">Moment of availibility</span>
                                <div class="badge-hiring-info text-left my-2">
                                    Evan Yates
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="dot"></span>
                                <span class="label-info ml-2">Hours per week</span>
                                <div class="badge-hiring-info text-left my-2">
                                   40-40
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="dot"></span>
                                <span class="label-info ml-2">Industries</span>
                                <div class="badge-hiring-info text-left my-2">
                                    Yes (2000-2004)
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="dot"></span>
                                <span class="label-info ml-2">Transport option</span>
                                <div class="badge-hiring-info text-left my-2">
                                    Public Transport
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="dot"></span>
                                <span class="label-info ml-2">Wants to be Hired</span>
                                <div class="badge-hiring-info text-left my-2">
                                    Public Transport
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4 mt-2">

                <!--Card-->
                <div class="card card-style mb-4">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Experienced</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        Management</br>
                                        Planning</br>
                                        Inside Sales</br>
                                        Marketing</br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Years</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        3</br>
                                        4</br>
                                        5</br>
                                        5</br>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Skills</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        Phyton</br>
                                        SQL</br>
                                        Excel</br>
                                        Autocad</br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Level</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        Professional</br>
                                        Intermediate</br>
                                        Expert</br>
                                        Professional</br>
                                    </div>
                                </div>
                                <!-- <div class="col-md-8">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Education</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        HBO Management</br>
                                        IT Management</br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Afgerond</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        Yes</br>
                                        No</br>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Industri</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        Communicate</br>
                                        Marketing</br>
                                        Consulting</br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="dot"></span>
                                    <span class="label-info ml-2">Job Category</span>
                                    <div class="badge-hiring-info text-left my-2">
                                        Administrate</br>
                                        Design</br>
                                        Account Manager</br>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <div class="col-md-12 title mt-2">
                <h3 class="title-style">Work History</h3>
            </div>

            <div class="col-md-12 mb-4 mt-2">

                <!--Card-->
                <div class="card card-style card-scrolling p-0">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>2019-2020</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit duis nec nunc neque, nulla. 
                                        Elementum id amet, est massa porttitor. Pharetra et, aliquam tellus est molestie orci, gravida adipiscing. 
                                        Quisque quam sed sed facilisi mi aliquet in. Elit vitae elementum sit proin habitant vel. Malesuada massa purus rhoncus 
                                        faucibus odio viverra. Ullamcorper in ultrices proin dolor donec
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>2019-2020</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit duis nec nunc neque, nulla. 
                                        Elementum id amet, est massa porttitor. Pharetra et, aliquam tellus est molestie orci, gravida adipiscing. 
                                        Quisque quam sed sed facilisi mi aliquet in. Elit vitae elementum sit proin habitant vel. Malesuada massa purus rhoncus 
                                        faucibus odio viverra. Ullamcorper in ultrices proin dolor donec
                                    </p>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <h6>2019-2020</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit duis nec nunc neque, nulla. 
                                        Elementum id amet, est massa porttitor. Pharetra et, aliquam tellus est molestie orci, gravida adipiscing. 
                                        Quisque quam sed sed facilisi mi aliquet in. Elit vitae elementum sit proin habitant vel. Malesuada massa purus rhoncus 
                                        faucibus odio viverra. Ullamcorper in ultrices proin dolor donec
                                    </p>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <h6>2019-2020</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit duis nec nunc neque, nulla. 
                                        Elementum id amet, est massa porttitor. Pharetra et, aliquam tellus est molestie orci, gravida adipiscing. 
                                        Quisque quam sed sed facilisi mi aliquet in. Elit vitae elementum sit proin habitant vel. Malesuada massa purus rhoncus 
                                        faucibus odio viverra. Ullamcorper in ultrices proin dolor donec
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="force-overflow"></div>
                </div>
                <!--/.Card-->

            </div>

        </div>
        <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
