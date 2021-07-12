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
    <title>Pelazobit- Gift Card</title>
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
    <link href="{{asset('FlexStart/assets/css/style.css')}}" rel="stylesheet">


<style>
    .visible{
        display:block;
    }

    .notvisible{
        display:none;
    }
</style>
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
                        <li class="active">
                            <a href="{{route('card')}}">
                                <i class="fas fa-calendar"></i>GIFT CARDS</a>
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
                            <a class="js-arrow" href="/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('btc')}}">
                                <i class="fas fa-chart-bar"></i>Bitcoin</a>
                           
                        </li>

                        <li class=" has-sub">
                            <a class="js-arrow" href="{{route('eth')}}">
                                <i class="fas fa-chart-bar"></i>Ethereum</a>
                            
                        </li>
                        <li class="active">
                            <a href="{{route('card')}}">
                                <i class="fas fa-calendar"></i>GIFT CARDS</a>
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
                                            <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                               
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
                                                        <i class="zmdi zmdi-money-box"></i>Bank Account</a>
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
                      
                          
                            <div class="col-md-7 m-auto au-card recent-report"style="background:#463F92;">

                       <div class="text-center m-auto">
                       <img src="{{asset('pelazobit/assets/img/white.png')}}" alt=""class="text-center justify-content-center"style="width:200px;">
                       </div>

                       <br>
                       <br>

                       <h3 class="text-center font-weight-normal"style="color:white;font-size:2em">Sell Instantly</h3>
                       <p class="text-center"style="color:white;font-size:18px;">A simple way to redeem Gift Cards</p>
                       <br>

                       <br>
                                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if(session('msg'))
                                            <div class="alert alert-success text-center">
                                                <p>{{session('msg')}}</p>
                                            </div>
                                        @endif

                       <form action="{{route('btctrans')}}"method="POST"enctype="multipart/form-data">

                        @csrf 
                            <div class="form-row">
                                <div class="col">
                                <label for=""style="color:white;">Currency to Sell</label>
                                <select name="type" id=""class="form-control">
                                    <option value="card">GIFT CARDS</option>
                                </select>
                                </div>
                                <div class="col">
                                <label for=""style="color:white;">Currency Type</label>
                                <select name="currency" id=""class="form-control">
                                    <option value="NGN">NGN</option>
                                </select>

                                </div>
                            </div>

                            <hr style="color:white">
                                <p class="text-center"style="color:white;">Note: Send the Valid Gift Card to redeem it</p>

                             


                                <div class="table-responsive">
                                    <table class="table"style="background:#463F92;">
                                        <tbody>
                                            <tr>
                                                <td> <label class="text-center"for=""style="color:white;">You can check out our <a href="{{route('rates')}}"style="color:yellow;text-align:center;font-weight:bold;text-decoration:none">Rates</a> </label></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                               
                                

                                <div class="form-row">
                                <div class="col">
                                <label for=""style="color:white;">Name  of Gift Card Sent</label>
                                <select name="value" id="name"class="form-control"required>
                                    <option value="">GIFT CARDS</option>
                                    <option value="Amazon Gift Card">Amazon Gift Card</option>
                                    <option value="Steam">Steam</option>
                                    <option value="Itunes">Itunes</option>
                                    <option value="Walmart">Walmart</option>
                                    <option value="Google Play">Google Play</option>
                                    <option value="Apple Universal">Apple Universal</option>
                                    <option value="Footlocker">Footlocker</option>
                                    <option value="BestBuy">BestBuy</option>
                                    <option value="Ebay">Ebay</option>
                                    <option value="Target">Target</option>
                                    <option value="Nordstorm">Nordstorm</option>
                                    <option value="Sephora">Sephora</option>
                                    <option value="Walmart Visa">Walmart Visa</option>
                                    <option value="Apple Store">Apple Store</option>
                                    <option value="Play Station">Play Station</option>
                                    <option value="Macys Card">Macys Card</option>
                                    <option value="Game Stop">Game Stop</option>
                                    <option value="Visa Debit">Visa Debit</option>
                                    <option value="Xbox">Xbox</option>
                                    <option value="Amex">Amex</option>
                                    <option value="Nike">Nike</option>
                                    <option value="Off Gamers">Off Gamers</option>
                                    <option value=""></option>

                                </select>
                                </div>
                                <div class="col">
                                <label for=""style="color:white;">Country</label>
                                <select name="country" id="country"class="form-control">
                                    <option value="">Country</option>
                                    <option value="Euro">Euro</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Finland">Finland</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="CHF">CHF</option>
                                    <option value="Others">Others</option>
                                </select>

                                </div>
                            </div>



                            <div class="form-row">
                                <div class="col">
                                <label for=""style="color:white;">Variant</label>
                                <select name="variant" id="variant"class="form-control">
                                    <option value="">Select Variant</option>
                                    <option value="Activation Receipt">Activation Receipt</option>
                                    <option value="Cash Receipt">Cash Receipt</option>
                                    <option value="Debit Receipt">Debit Receipt</option>
                                    <option value="No Receipt">No Receipt</option>
                                    <option value="Physical">Physical</option>
                                    <option value="E-Code">E-code</option>
                                    
                                </select>
                                </div>
                                <div class="col">
                                <label for=""style="color:white;">Domination</label>
                                <select name="domination" id="domination"class="form-control">
                                    <option value="">Select Domination</option>
                                    <option value="50-500">50-500</option>
                                    <option value="100-500">100-500</option>
                                    <option value="25-25">25-25</option>
                                    <option value="50-100">50-100</option>
                                    <option value="50-200">50-200</option>
                                    <option value="50-50">50-50</option>
                                    <option value="200-500">200-500</option>
                                    <option value="5-49">5-49</option>
                                    <option value="5-24">5-24</option>
                                    <option value="25-49">25-49</option>
                                    <option value="20-200">20-200</option>
                                    <option value="10-10">10-10</option>
                                    <option value="20-20">20-20</option>
                                    <option value="300-500">300-500</option>
                                    <option value="100-100">100-2000</option>
                                    <option value="100-2000">100-100</option>
                                    <option value="20-200">20-200</option>
                                    <option value="300-2000">300-2000</option>




                                </select>

                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col">
                                <label for=""style="color:white;">Value of Gift Card</label>
                                    <input type="number"name="cardvalue"id="cardvalue"placeholde="Value should be From 41  - 100"class="form-control"required>
                                </div>

                                <div class="col">
                                    <label for=""style="color:white">Click Before proceeding</label>
                                    <a href="#"id="calculate"class="btn"style="background:white;color:#463F92;">Click before proceeding</a>

                                </div>
                            </div>

                           

                           <div class="alert alert-success text-center font-weight-bold"id="available">You'll will get N <span id="total"></span></div>

                           <div class="alert alert-danger text-center"id="notavailable">Card Type not available</div>
                                <input type="hidden"id="amount"name="amount"class="form-control"required>
                           
                            



                               

                               

                               

                                <div class="form-group">
                                    <label for=""style="color:white;">Upload Gift Card</label>

                                    <input type="file"name="screenshots"class="form-control"required>
                                </div>


                                <div class="form-group">
                                    <button class="btn btn-success text-center text-light">I have uploaded the Card </button>
                                </div>
                            </form>
                    </div>
                


</div>
                            </div>
                                                                  
                                           
                                        
                                    </div>
                                </div>
                            </div>
                            
                          
                            
            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p class="text-center">Developed by <a href="https://colorlib.com">Edificewebsolutions</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

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


    <script src="{{asset('FlexStart/assets/js/main.js')}}"></script>



    <script>
        $(document).ready(function () {
            $('#available').addClass('notvisible');
            $('#notavailable').addClass('notvisible');
            const Url = '/giftcardamount';

           

            $('#calculate').click(function() {

//for giftcard select
                var n = document.getElementById("name")
var name = n.value
///for country select
 var c = document.getElementById("country")
 var country = c.value

 //variant select 
 var v = document.getElementById("variant")
 var variant = v.value

 //domination
 var d = document.getElementById("domination")
 var domination = d.value



                var formData = {
      name : name,
      country : country,
      variant : variant,
      domination : domination,
      cardvalue : $('#cardvalue').val(),

      
   



     
    };
                $.ajax({
                    url : Url,
                    type : "GET",
                    dataType: 'json',
                    data: formData,
                    success: function(result) {
                      
                        console.log(result)
                     
                        if(result['status'] == 'true'){
                            $('#amount').val(result['amount'])
                            $('#total').html(result['amount'])
                            $('#available').removeClass('notvisible');
                            $('#notavailable').removeClass('visible');
                            $('#notavailable').addClass('notvisible');
                        $('#available').addClass('visible');
                        }

                        else if(result['status'] == 'false'){
                            $('#available').removeClass('visible');
                            $('#available').addClass('notvisible');
                            $('#notavailable').removeClass('notvisible');
                            $('#notavailable').addClass('visible');
                            $('#amount').val('')
                            
                        }

                    
                        
                    },

                    error : function(error) {
                        console.log(error)
                        //$('#error').addClass('visible');
                    }
                })
            })
        })
    
</script>



    <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
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
