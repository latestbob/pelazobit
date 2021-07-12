





<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from tazobock.com/auth/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Apr 2021 16:12:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('pelazobit/assets/css/lib/bootstrap.min.css')}}">
    <link rel="icon" href="{{asset('pelazobit/assets/img/fav.png')}}" type="image/png" sizes="32x16">
    	<link rel="stylesheet" href="../../stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('pelazobit/auth/style.css')}}" />
    <link href="{{asset('inventory/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('inventory/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <title> Pelazobit--Authenticate</title>
  </head>
  <body>
    <img src="{{asset('pelazobit/assets/img/white.png')}}" style="position: absolute;top: 20px;
    left: 40px; height: 40px; z-index: 786897709" onclick="window.location='/'">
    <div class="containerr">
      <div class="forms-container">
      
        <div class="signin-signup">
          <form  class="sign-in-form"  method="POST" action="{{route('login')}}">
              @csrf 
            <h2 class="title">Sign in</h2>

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            @if(session('success'))
            <div class="alert alert-success text-center">
                <p>{{session('success')}}</p>
            </div>
        @endif
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="email"  value="" name="email"required>
    	             </div>
              
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="password" value="" name="password" />
    
    	            </div>
           
            <button class="btn solid"type="submit">Login</button>
          
          </form >
         
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf 
            <h2 class="title">Sign up</h2>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            @if(session('success'))
            <div class="alert alert-success text-center">
                <p>{{session('success')}}</p>
            </div>
        @endif
       
            <div class="input-field">
                <i class="fas fa-user"></i>
                
              <input type="text" placeholder="Username" name="name"  required /></div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"required/>             </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required="" min-length="8"/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="password_confirmation" required/>
    	
            </div>

           

            

            

           

          
            <button class="btn"type="submit">SignUp</button>
           
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Create Your Account Within 5 minutes to get started 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="{{asset('sign in.png')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome Back, We have missed you!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{asset('sinup.png')}}" class="image" alt="" />
        </div>
      </div>
    </div>
<div class="modal fade" id="staticBackdrop2"  data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body" style="padding: 50px; padding-top: 70px;">
      	<h3>Enter Registered Email</h3>
        <div class="form-group">
			    <label for="exampleInputEmail1">A new password will be sent to the registered email </label>
			    <input type="email" class="form-control" id="vcode" aria-describedby="emailHelp" placeholder="email">
			    <div id="validationServer03Feedback" class="invalid-feedback">
        wrong code
      </div>
			    
			  </div>

      <center><button id="vcodebtn" class="btn btn-success mb-3" style="width: 70%;" name="signup">Reset Password</button></center>
      </div>
     
    </div>
  </div>
</div>
<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="../../cdn.jsdelivr.net/npm/popper.js%401.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="../../stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="{{asset('pelazobit/auth/app.js')}}"></script>
    <script>
        
}
    </script>
  </body>

<!-- Mirrored from tazobock.com/auth/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Apr 2021 16:13:00 GMT -->
</html>
