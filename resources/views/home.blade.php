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
    <title>Pelazobit</title>
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


    <style>
        .notvisible{
            display:none;
        }

        .visible{
            display:block;
        }

        @media only screen and (max-width: 600px) {
  .ml-3 {
    margin-left: 0px;;
  }
}
    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none"style="background:#463F92;">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a href="/">
						<img src="{{asset('pelazobit/assets/img/white.png')}}" class="" alt=""style="width:150px;">
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
                        
                    <li class="active has-sub">
                            <a class="js-arrow" href="/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('btc')}}">
                                <i class="fas fa-chart-bar"></i>Bitcoin</a>
                            
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('eth')}}">
                                <i class="fas fa-chart-bar"></i>Ethereum</a>
                            
                        </li>
                        <li>
                            <a href="{{route('card')}}">
                                <i class="fas fa-calendar"></i>GIFT CARDS</a>
                        </li>


                        <li>
                            <a href="{{route('sellgiftcards')}}">
                                <i class="fas fa-calendar"></i>REAL GIFT CARDS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block"style="background:#463F92;border:none;">
            <div class="logo"style="background:#463F92;border:none;">
            <a href="/">
						<img src="{{asset('pelazobit/assets/img/white.png')}}" class="" alt=""style="width:150px;">
					</a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('btc')}}">
                                <i class="fas fa-chart-bar"></i>Bitcoin</a>
                            
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('eth')}}">
                                <i class="fas fa-chart-bar"></i>Ethereum</a>
                            
                        </li>
                        <li>
                            <a href="{{route('card')}}">
                                <i class="fas fa-calendar"></i>GIFT CARDS</a>
                        </li>

                        <li>
                            <a href="{{route('sellgiftcards')}}">
                                <i class="fas fa-calendar"></i>REAL GIFT CARDS</a>
                        </li>
                     
                       
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop"style="background:#463F92;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST"style="visibility:hidden;">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
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
                                      
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"style="color:white;">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix"style="color:white;">
                                               
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{Auth::user()->name}}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('bankaccount')}}">
                                                        <i class="zmdi zmdi-account"></i>Bank Account</a>
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
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
@if(session('msg'))
        <div class="alert alert-success text-center">
            <p>{{session('msg')}}</p>
        </div>
@endif
@if(session('error'))
        <div class="alert alert-danger text-center">
            <p>{{session('error')}}</p>
        </div>
@endif

        @if(Auth::user()->bank == NULL)

        <div class="row alert alert-danger text-center py-3">
        Kindly Provide you account information to partake in transactions - Registration  50% Completed <span class="ml-3"><progress id="file" value="50" max="100"class=""> 50% </progress></span>
    </div>


    <div class="col-md-6">
    <a href="#"class="btn"style="background:#463F92;color:white"data-toggle="modal" data-target="#exampleModal">Add Bank Now</a>
    </div>

        @endif

   


    <br>

                        <div class="row">

                                <div class="col-md-7 col-12  au-card recent-report">
                                    <h4 class="font-weight bold">Hi, {{Auth::user()->name}}</h4>
                                    <br>
                                    <p>Welcome to Pelazobit!. We wish you a great trading Experience</p>
                                </div>

                                <div class="col-md-4 col-12 au-card recent-report">
                                   <h2 class="font-weight bold">NGA <span>{{\App\User::where(['email' => Auth::user()->email])->value('total')}}</span></h2>
                                   <br>
                                   <p>Naira Wallet</p>

                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="60" height="60" style="color: #463F92; float: right; position: relative; top: -80px; transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify dn" data-icon="tabler:currency-naira" data-inline="false" data-width="60"><g class="icon-tabler" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 18V7.052a1.05 1.05 0 0 1 1.968-.51l6.064 10.916a1.05 1.05 0 0 0 1.968-.51V6"></path><path d="M5 10h14"></path><path d="M5 14h14"></path></g></svg>

                                    <br>
                                    <br>
                                   <a href="#"class="btn m-auto"style="background:green;color:white"data-toggle="modal" data-target="#withdrawModal">Withdraw Funds</a>
                                </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-12 au-card recent-report ">
                                
                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <h3 style="font-size:3em;">{{\App\transaction::where(['email' => Auth::user()->email])->where(['status' => 'pending'])->count()}}</h3>
                                        <p>Pending Transactions</p>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <img src="{{asset('p1.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12 au-card recent-report ">
                            <div class="row">
                                    <div class="col-md-8 col-12">
                                        <h3 style="font-size:3em;">{{\App\transaction::where(['email' => Auth::user()->email])->where(['status' => 'completed'])->count()}}</h3>
                                        <p>Completed Transactions</p>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <img src="{{asset('s.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-12 au-card recent-report ">
                            <div class="row">
                                    <div class="col-md-8 col-12">
                                        <h3 style="font-size:3em;">{{\App\transaction::where(['email' => Auth::user()->email])->where(['status' => 'cancel'])->count()}}</h3>
                                        <p>Declined Transactions</p>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <img src="{{asset('declinedtransaction.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                           
                        </div>


                      

                      <div class="row au-card recent-report">
                            
                            <div class="col-md-3 col-6 au-card recent-report">
                            <a href="{{route('btc')}}">
                                <img src="{{asset('homee/bitcoin.png')}}" alt="">
                                <h3 class="text-center font-weight-bold">BITCOIN</h3>
                                </a>
                            </div>
                            

                            <div class="col-md-3 col-6 au-card recent-report">
                            <a href="{{route('card')}}">
                                <img src="{{asset('homee/giftcard.png')}}" alt="">
                                <h3 class="text-center font-weight-bold">Gift Cards</h3>
                                </a>
                            </div>

                            <div class="col-md-3 col-6 au-card recent-report">
                            <a href="{{route('eth')}}">
                            <img src="{{asset('homee/ethruim.png')}}" alt="">
                                <h3 class="text-center font-weight-bold">Ethereum</h3>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 au-card recent-report">
                                <a href="{{route('withdrawalspage')}}">
                                <img src="{{asset('homee/withdraw.png')}}" alt="">
                                <h3 class="text-center font-weight-bold">Withdrawals</h3>
                                </a>
                            </div>
                      
                      </div>
                        
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


<!-- Add bank Modal Here -- > 

<! -- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Bank Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{route('updatebank')}}"method="POST">
            @csrf
            {{method_field('PUT')}}


            <div class="form-group">
                <label for="">Select Bank</label>
                <select name="bank" id="bankcode"class="form-control"required>
                    <option value="">Select your Bank</option>

                    @foreach($bank as $banks)

                        <option value="{{$banks->code}}">{{$banks->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Account Number</label>
                <input type="text"name="accountnumber"id="accountnumber"class="banknumber form-control"required>
            </div>
            

            <div class="form-group">
                <a href="#"class="btn btn-sm check"style="background:#463F92;color:white">Verify bank before proceeding</a>
            </div>

            <input type="hidden"name="email"value="{{Auth::user()->email}}"required>

            <div class="form-group">
                <label for="">Account Name</label>
                <input type="text"name="accountname"class="form-control accountname"required>
            </div>
            <div class="alert alert-success text-center"id="verify">Bank Verified</div>
            <div class="alert alert-danger text-center"id="error">Bank Verified</div>

            <div class="modal-footer">
    
    <button type="submit" class="btn btn-primary">Add Bank</button>
  </div>
</div>
        </form>

      </div>
     
  </div>
</div>











<!-- Modal -->
<div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Withdraw Funds</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{route('withdrawal')}}"method="POST">
            @csrf
           


            

            <div class="form-group">
                <label for="">Enter Amount</label>
                <input type="number"name="amount"placeholder="Enter Amount you want to withdraw"id="accountnumber"class=" form-control"required>
            </div>
            

          


            <div class="modal-footer">
    
    <button type="submit" class="btn btn-success">Withdraw Funds</button>
  </div>
</div>
        </form>

      </div>
     
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

    <script>
        $(document).ready(function () {
            $('#verify').addClass('notvisible');
            $('#error').addClass('notvisible');
            const Url = '/mybank';

           

            $('.check').click(function() {

                var e = document.getElementById("bankcode")
var strUser = e.value

                var formData = {
      bank : strUser,
      banknumber : $('#accountnumber').val(),

      
   



     
    };
                $.ajax({
                    url : Url,
                    type : "GET",
                    dataType: 'json',
                    data: formData,
                    success: function(result) {
                        console.log(strUser)
                        console.log(result)
                     
                        if(result['status'] == true){
                            $('.accountname').val(result['data']['account_name'])
                        $('#verify').addClass('visible');
                        }
                        
                    },

                    error : function(error) {
                        console.log(error)
                        $('#error').addClass('visible');
                    }
                })
            })
        })
    
</script>











    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/606f38bef7ce182709386f07/1f2p7bajs';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->





</body>

</html>
<!-- end document-->
