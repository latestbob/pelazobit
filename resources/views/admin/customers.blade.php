<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Pelazobit - Customers</title>
      <!-- Favicons -->
  <link href="{{asset('logo.png')}}" rel="icon">

    <!-- Fontfaces CSS-->
    <link href="{{asset('inventory/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('inventory/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('inventory/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('inventory/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a href="/">
                    <img src="{{asset('logo.png')}}"style="width:70px; height:70px;">
                    <span style="font-weight:bold;font-family:san-seriff;color:black;font-size:18px;">Pelazobit</span>
                </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        
                    <li class="has-sub">
                            <a class="js-arrow" href="{{route('admin.home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>


                        <li class="active has-sub">
                            <a class="js-arrow" href="{{('admin.customers')}}">
                                <i class="fas fa-user"></i>Customers</a>
                            
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('admin.transaction')}}">
                              <i class="fas fa-chart-bar"></i> Transactions</a>
                            
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('admin.withdrawrequest')}}">
                              <i class="fas fa-tachometer-alt"></i> Withdrawal Requests</a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/">
                    <img src="{{asset('logo.png')}}"style="width:70px; height:70px;">
                    <span style="font-weight:bold;font-family:san-seriff;color:black;font-size:30px;">Pelazobit</span>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('admin.home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>


                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('admin.customers')}}">
                                <i class="fas fa-user"></i>Customers</a>
                            
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('admin.transaction')}}">
                              <i class="fas fa-chart-bar"></i> Transactions</a>
                            
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('admin.withdrawrequest')}}">
                              <i class="fas fa-tachometer-alt"></i> Withdrawal Requests</a>
                            
                        </li>
                      
                     
                       
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST"style="visibility:hidden;">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button"style="">
                                <div class="noti-wrap"style="visibility:hidden;">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{asset('inventory/images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{asset('inventory/images/icon/avatar-04.jpg')}}" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{asset('inventory/images/icon/avatar-06.jpg')}}" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{asset('inventory/images/icon/avatar-05.jpg')}}" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{asset('inventory/images/icon/avatar-04.jpg')}}" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                           
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{Auth::user()->name}}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                           
                                            <div class="account-dropdown__item">

                                            <form action="{{route('logout')}}"method="POST">
                                                @csrf 
                                                <button class="btn btn-danger text-light w-100 text-center"><i class="zmdi zmdi-power"></i>Logout</button>
                                            </form>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">All Registered Customers</h2>
                                   
                                </div>
                            </div>
                        </div>
                        



                        <div class="row">
                        

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="bg-dark text-light py-2">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Bank</th>
                                        <th>Account Number</th>
                                        <th>Account Name</th>
                                       
                                    </thead>


                                    <tbody>
                                        @foreach($user as $users)
                                            <tr>

                                                <td>{{$users->name}}</td>
                                                <td>{{$users->email}}</td>
                                                <td>{{$users->bank}}</td>
                                                <td>{{$users->accountnumber}}</td>
                                                <td>{{$users->accountname}}</td>
                                               
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>

                                {{$user->links()}}
                            </div>
                        
                        


                       
                        </div>


                        


                        <!-- Bitcoin logs -->

                       
                    
                        
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('inventory/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('inventory/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('inventory/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('inventory/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('inventory/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('inventory/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('inventory/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('inventory/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('inventory/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('inventory/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('inventory/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('inventory/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('inventory/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('inventory/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/coinponent/coinponent@1.2.6/dist/coinponent.js"></script>

</body>

</html>
<!-- end document-->
