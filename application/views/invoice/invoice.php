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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous"> -->
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
              <h2 style="text-align:center">Invoice</h2>                      
            <form class="form-validate" style="margin-top:40px">
              <div class="form-group">
                <label for="loginUsername" class="form-label">Date</label>
                <input name="loginUsername" id="loginUsername" type="email" autocomplete="off" required="" data-msg="Please enter your email" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="loginPassword" class="form-label">Category</label>
                <input name="loginPassword" id="loginPassword"  type="password" required="" data-msg="Please enter your password" class="form-control" disabled>
              </div>
              <div class="form-group mb-4">
                <label for="loginPassword2" class="form-label">Destination</label>
                <input name="loginPassword2" id="loginPassword2"  type="password" required="" data-msg="Please enter your password" class="form-control" disabled>
              </div>           
              <div class="form-group mb-4">
                <label for="loginPassword2" class="form-label">Destination</label>
                <input name="loginPassword2" id="loginPassword2"  type="password" required="" data-msg="Please enter your password" class="form-control" disabled>
              </div>   
              <div class="form-group mb-4">
                <label for="loginPassword2" class="form-label">Location</label>
                <input name="loginPassword2" id="loginPassword2"  type="password" required="" data-msg="Please enter your password" class="form-control" disabled>
              </div>  
              <div class="form-group mb-4">
                <label for="loginPassword2" class="form-label">Paket Foto</label>
                <input name="loginPassword2" id="loginPassword2"  type="password" required="" data-msg="Please enter your password" class="form-control" disabled>
              </div>        
              <hr class="my-4">    
              <p style="float: right;">Total Harga : Rp.1.890.000</p>       
            </form><a href="index.html" class="close-absolute mr-md-5 mr-xl-6 pt-5"> 
              <svg class="svg-icon w-3rem h-3rem">
                <use xlink:href="#close-1"> </use>
              </svg></a>
          </div>       
        </div>
      </div>
    </section>
    <script>
    
    </script>
    <!-- jQuery-->
    <script src="./Directory Theme by Bootstrapious_files/jquery.min.js.download"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="./Directory Theme by Bootstrapious_files/bootstrap.bundle.min.js.download"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="./Directory Theme by Bootstrapious_files/jquery.magnific-popup.min.js.download"></script>
    <!-- Smooth scroll-->
    <script src="./Directory Theme by Bootstrapious_files/smooth-scroll.polyfills.min.js.download"></script>
    <!-- Bootstrap Select-->
    <script src="./Directory Theme by Bootstrapious_files/bootstrap-select.min.js.download"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="./Directory Theme by Bootstrapious_files/ofi.min.js.download"></script>
    <!-- Swiper Carousel                       -->
    <script src="./Directory Theme by Bootstrapious_files/swiper.min.js.download"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="./Directory Theme by Bootstrapious_files/theme.js.download"></script>
  
</body></html>