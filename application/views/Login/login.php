<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Picmo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Pacifico" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
<!-- Google fonts - Poppins-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('').'assets/'?>img/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>
  <body style="padding-top: 32px;"><div class="d-none"><svg width="0" height="0" class="hidden">
</svg></div>
<header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a href="<?php echo base_url('').'Home'?>" class="navbar-brand py-1"><img src="<?php echo base_url('').'assets/'?>img/logo.png" alt="Directory logo" style = "height : 45px"></a>
            
          </div>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">            
            <ul class="navbar-nav ml-auto">
            <li class="megamenu-list-item"><a href="<?php echo base_url('').'Home'?>" class="nav-link"  aria-expanded="false" class="nav-link active"> Home</a>
              </li>
              <!-- Megamenu-->
              <li class="nav-item"><a href="<?php echo base_url('').'Destination'?>" class="nav-link">Destination</a>
              </li>
             
              <li class="nav-item"><a href="<?php echo base_url('').'Gallery'?>" class="nav-link">Gallery</a>
              </li>            
              <li class="nav-item"><a  href="<?php echo base_url('').'SignUp'?>" class="nav-link">Sign up</a></li>
              <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a  href="<?php echo base_url('').'Login'?>" class="btn btn-primary">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>

    </header>

    <section class="py-6">
      <div class="container">
        <div class="row">            
          <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">           
              <h2 style="text-align:center">Login</h2>                      
            <form class="form-validate" style="margin-top:40px">
              <div class="form-group">
                <label for="loginUsername" class="form-label"> Email Address</label>
                <input name="loginUsername" id="loginUsername" type="email" placeholder="name@address.com" autocomplete="off" required="" data-msg="Please enter your email" class="form-control">
              </div>
              <div class="form-group">
                <label for="loginPassword" class="form-label"> Password</label>
                <input name="loginPassword" id="loginPassword" placeholder="Password" type="password" required="" data-msg="Please enter your password" class="form-control">
              </div>
              
              <button type="submit" class="btn btn-lg btn-block btn-primary">Login</button>
              <hr data-content="OR" class="my-3 hr-text letter-spacing-2">
              <button class="btn btn btn-outline-primary btn-block btn-social mb-3"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Facebook</span></button>
              <button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Google</span></button>
              <hr class="my-4">
              <p class="text-sm text-muted">By signing up you agree to Directory's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.</p>
            </form><a href="index.html" class="close-absolute mr-md-5 mr-xl-6 pt-5"> 
             
          </div>       
        </div>
      </div>
    </section>
    <script>
</script>
   
  
</body></html>