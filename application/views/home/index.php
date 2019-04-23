<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Picmo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/nouislider.css">
    

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Pacifico" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
 
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/swiper.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/style.default.css" id="theme-stylesheet">
   
    <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>css/custom.css">
  

    <link rel="shortcut icon" href="<?php echo base_url('').'assets/'?>img/logo.png">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  </head>
  <body style="padding-top: 72px; margin:0 !important"><div class="d-none"></div>
    <header class="header1">
      
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a href="<?php echo base_url('').'Home'?>" class="navbar-brand py-1"><img src="<?php echo base_url('').'assets/'?>img/logo.png" alt="Directory logo" style = "height : 45px"></a>
          
          </div>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
         
          <div id="navbarCollapse" class="collapse navbar-collapse">            
            <ul class="navbar-nav ml-auto">
            <li class="megamenu-list-item"><a href="<?php echo base_url('').'Home'?>" class="nav-link"  aria-expanded="false" class="nav-link active"> Home</a>
              </li>

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
    <section class="hero-home">
      <div class="swiper-container hero-slider swiper-container-fade swiper-container-horizontal">
        <div class="swiper-wrapper dark-overlay" style="transition-duration: 0ms;">
          <div style="background-image: url(&quot;https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1501621965065-c6e1cf6b53e2.jpg&quot;); width: 1349px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;" class="swiper-slide swiper-slide-prev"></div>
          <div style="background-image: url(&quot;https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1519974719765-e6559eac2575.jpg&quot;); width: 1349px; opacity: 1; transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms;" class="swiper-slide swiper-slide-active"></div>
          <div style="background-image: url(&quot;https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1490578474895-699cd4e2cf59.jpg&quot;); width: 1349px; opacity: 0; transform: translate3d(-2698px, 0px, 0px); transition-duration: 0ms;" class="swiper-slide swiper-slide-next"></div>
          <div style="background-image: url(&quot;https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1534850336045-c6c6d287f89e.jpg&quot;); width: 1349px; opacity: 0; transform: translate3d(-4047px, 0px, 0px); transition-duration: 0ms;" class="swiper-slide"></div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
      <div class="container py-6 py-md-7 text-white z-index-20" style="margin-top :auto;margin-left:100px">
        <div class="row">
            <div class="col-xl-10">
                <div class="text-center text-lg-left">
                <p class="subs letter-spacing-4 mb-2 text-col text-shadow ">The best holiday experience</p>
                <h1 class="display-3 font-weight-bold text-shadow h1-border-bottom text-white">Picture your memories</h1>
                </div>
            </div>
        </div>
        <div class="container">
     
							<div class="input-group multi-control-group booking-widged">
								<span class="input-group-addon first-addon"></span>
								<span class="input-group-addon addon-widged addon-destination"></span>
								<select class="search-form__input form-control input-md input-mdpackage search-destination" name="filter_location" id="select_filter_location">
									<option value="">Choose Destination</option>
																		<optgroup label="Africa">
																					<option value="142" data-city="Cape Town">Cape Town</option>
																			</optgroup>
																		<optgroup label="America">
																					<option value="149" data-city="Boston">Boston</option>
																					<option value="358" data-city="Cancun">Cancun</option>
																					<option value="155" data-city="Chicago">Chicago</option>
																					<option value="343" data-city="Clyde">Clyde</option>
																					<option value="345" data-city="Formentera">Formentera</option>
																					<option value="328" data-city="Hawaii">Hawaii</option>
																					<option value="238" data-city="Honolulu">Honolulu</option>
																					<option value="182" data-city="Lake Tahoe">Lake Tahoe</option>
																					<option value="33" data-city="Las Vegas">Las Vegas</option>
																					<option value="427" data-city="Leavenworth">Leavenworth</option>
																					<option value="53" data-city="Los Angeles">Los Angeles</option>
																					<option value="25" data-city="Montreal">Montreal</option>
																					<option value="418" data-city="New Jersey">New Jersey</option>
																					<option value="30" data-city="New York">New York</option>
																					<option value="333" data-city="Oakland">Oakland</option>
																					<option value="366" data-city="Pennsylvania">Pennsylvania</option>
																					<option value="367" data-city="Philadelphia">Philadelphia</option>
																					<option value="167" data-city="Quebec">Quebec</option>
																					<option value="336" data-city="Sacramento">Sacramento</option>
																					<option value="170" data-city="San Diego">San Diego</option>
																					<option value="370" data-city="San Francisco">San Francisco</option>
																					<option value="171" data-city="San Jose">San Jose</option>
																					<option value="371" data-city="Sao Paulo">Sao Paulo</option>
																					<option value="34" data-city="Seattle">Seattle</option>
																					<option value="173" data-city="Toronto">Toronto</option>
																					<option value="16" data-city="Vancouver">Vancouver</option>
																					<option value="191" data-city="Washington DC">Washington DC</option>
																			</optgroup>
																		<optgroup label="Asia">
																					<option value="337" data-city="Abu Dhabi">Abu Dhabi</option>
																					<option value="323" data-city="Aceh">Aceh</option>
																					<option value="339" data-city="Antalya">Antalya</option>
																					<option value="2" data-city="Bali">Bali</option>
																					<option value="38" data-city="Bandung">Bandung</option>
																					<option value="3" data-city="Bangkok">Bangkok</option>
																					<option value="90" data-city="Banyuwangi">Banyuwangi</option>
																					<option value="91" data-city="Batam">Batam</option>
																					<option value="355" data-city="Batu">Batu</option>
																					<option value="55" data-city="Beijing">Beijing</option>
																					<option value="202" data-city="Bodrum">Bodrum</option>
																					<option value="95" data-city="Bogor">Bogor</option>
																					<option value="56" data-city="Busan">Busan</option>
																					<option value="99" data-city="Cirebon">Cirebon</option>
																					<option value="57" data-city="Da Nang">Da Nang</option>
																					<option value="43" data-city="Dubai">Dubai</option>
																					<option value="325" data-city="Gorontalo">Gorontalo</option>
																					<option value="32" data-city="Hanoi">Hanoi</option>
																					<option value="60" data-city="Ho Chi Minh City">Ho Chi Minh City</option>
																					<option value="61" data-city="Hoi An">Hoi An</option>
																					<option value="29" data-city="Hong Kong">Hong Kong</option>
																					<option value="388" data-city="Hua Hin">Hua Hin</option>
																					<option value="4" data-city="Jakarta">Jakarta</option>
																					<option value="329" data-city="Johor Baru">Johor Baru</option>
																					<option value="387" data-city="Karimunjawa">Karimunjawa</option>
																					<option value="330" data-city="Koh Larn">Koh Larn</option>
																					<option value="47" data-city="Koh Samui">Koh Samui</option>
																					<option value="5" data-city="Kuala Lumpur">Kuala Lumpur</option>
																					<option value="107" data-city="Kupang">Kupang</option>
																					<option value="6" data-city="Kyoto">Kyoto</option>
																					<option value="45" data-city="Labuan Bajo">Labuan Bajo</option>
																					<option value="35" data-city="Lombok">Lombok</option>
																					<option value="65" data-city="Macau">Macau</option>
																					<option value="350" data-city="Makassar">Makassar</option>
																					<option value="44" data-city="Malang">Malang</option>
																					<option value="42" data-city="Maldives">Maldives</option>
																					<option value="81" data-city="Manila">Manila</option>
																					<option value="352" data-city="Marmaris">Marmaris</option>
																					<option value="424" data-city="Medan">Medan</option>
																					<option value="115" data-city="Mumbai">Mumbai</option>
																					<option value="118" data-city="New Delhi">New Delhi</option>
																					<option value="119" data-city="Niseko">Niseko</option>
																					<option value="9" data-city="Osaka">Osaka</option>
																					<option value="413" data-city="Otaru">Otaru</option>
																					<option value="334" data-city="Padang">Padang</option>
																					<option value="83" data-city="Penang">Penang</option>
																					<option value="11" data-city="Phuket">Phuket</option>
																					<option value="335" data-city="Pulo Cinta">Pulo Cinta</option>
																					<option value="408" data-city="Sapporo">Sapporo</option>
																					<option value="126" data-city="Semarang">Semarang</option>
																					<option value="26" data-city="Seoul">Seoul</option>
																					<option value="12" data-city="Shanghai">Shanghai</option>
																					<option value="69" data-city="Shenzhen">Shenzhen</option>
																					<option value="13" data-city="Singapore">Singapore</option>
																					<option value="125" data-city="Sumba">Sumba</option>
																					<option value="51" data-city="Surabaya">Surabaya</option>
																					<option value="414" data-city="Taipei">Taipei</option>
																					<option value="15" data-city="Tokyo">Tokyo</option>
																					<option value="428" data-city="Uludağ">Uludağ</option>
																					<option value="17" data-city="Yogyakarta">Yogyakarta</option>
																			</optgroup>
																		<optgroup label="Australia">
																					<option value="134" data-city="Adelaide">Adelaide</option>
																					<option value="20" data-city="Auckland">Auckland</option>
																					<option value="130" data-city="Brisbane">Brisbane</option>
																					<option value="346" data-city="Glenorchy">Glenorchy</option>
																					<option value="132" data-city="Gold Coast">Gold Coast</option>
																					<option value="8" data-city="Melbourne">Melbourne</option>
																					<option value="19" data-city="Perth">Perth</option>
																					<option value="46" data-city="Queenstown">Queenstown</option>
																					<option value="14" data-city="Sydney">Sydney</option>
																			</optgroup>
																		<optgroup label="Europe">
																					<option value="1" data-city="Amsterdam">Amsterdam</option>
																					<option value="338" data-city="Annecy">Annecy</option>
																					<option value="23" data-city="Athens">Athens</option>
																					<option value="39" data-city="Barcelona">Barcelona</option>
																					<option value="200" data-city="Berlin">Berlin</option>
																					<option value="341" data-city="Bratislava">Bratislava</option>
																					<option value="205" data-city="Brussels">Brussels</option>
																					<option value="262" data-city="Budapest">Budapest</option>
																					<option value="207" data-city="Cappadocia">Cappadocia</option>
																					<option value="415" data-city="Castries">Castries</option>
																					<option value="342" data-city="Chamonix">Chamonix</option>
																					<option value="263" data-city="Cologne">Cologne</option>
																					<option value="37" data-city="Crete">Crete</option>
																					<option value="409" data-city="Den Haag">Den Haag</option>
																					<option value="50" data-city="Dusseldorf">Dusseldorf</option>
																					<option value="266" data-city="Edinburgh">Edinburgh</option>
																					<option value="24" data-city="Florence">Florence</option>
																					<option value="410" data-city="Galicia">Galicia</option>
																					<option value="48" data-city="Galway">Galway</option>
																					<option value="226" data-city="Geneva">Geneva</option>
																					<option value="227" data-city="Genova">Genova</option>
																					<option value="232" data-city="Granada">Granada</option>
																					<option value="411" data-city="Haarlem">Haarlem</option>
																					<option value="348" data-city="Ibiza">Ibiza</option>
																					<option value="41" data-city="Istanbul">Istanbul</option>
																					<option value="381" data-city="Kazan">Kazan</option>
																					<option value="242" data-city="Keukenhoff">Keukenhoff</option>
																					<option value="412" data-city="Leiden">Leiden</option>
																					<option value="247" data-city="Lisbon">Lisbon</option>
																					<option value="392" data-city="Ljubljana">Ljubljana</option>
																					<option value="7" data-city="London">London</option>
																					<option value="250" data-city="Madrid">Madrid</option>
																					<option value="331" data-city="Mallorca">Mallorca</option>
																					<option value="364" data-city="Marrakech">Marrakech</option>
																					<option value="36" data-city="Milan">Milan</option>
																					<option value="256" data-city="Monaco">Monaco</option>
																					<option value="10" data-city="Paris">Paris</option>
																					<option value="22" data-city="Prague">Prague</option>
																					<option value="286" data-city="Reykjavik">Reykjavik</option>
																					<option value="27" data-city="Rome">Rome</option>
																					<option value="28" data-city="Rotterdam">Rotterdam</option>
																					<option value="368" data-city="Salzburg">Salzburg</option>
																					<option value="40" data-city="Santorini">Santorini</option>
																					<option value="402" data-city="St. Petersburg">St. Petersburg</option>
																					<option value="49" data-city="Tel Aviv">Tel Aviv</option>
																					<option value="354" data-city="Tuscany">Tuscany</option>
																					<option value="21" data-city="Venice">Venice</option>
																					<option value="52" data-city="Vienna">Vienna</option>
																					<option value="384" data-city="Yekaterinburg">Yekaterinburg</option>
																			</optgroup>
																	</select>
								  <span class="input-group-btn">
			                        <button id="btn_book_now" class="btn-search-destination search-form__button input-group-addon form-control button input-md  trigger-modal FR-CheckRate" data-trigger="pre-booking-modal" type="button">
								  <span id="txt_book_now" class="search-form__button-text button__text">Check Rate</span>
									</button>
			          </span>
                   </div>
                </div>
           </div>
        </div>
      </div>
    </section>
    <section class="py-6">
    <div class="container">    
      <div class="row">            
            <p class="subtitle mb-4">Choose your Destination</p>                 
            <div class="row gallery ml-n1 mr-n1">
              <div class="col-lg-3 col-6 px-1 mb-2">
               <div class="hovereffect">
                 <a href= "assets/img/photo-1426122402199-be02db90eb90.jpg"><img class="img-responsive" src="<?= base_url('assets/img/pram.png')?>" alt="..." width="250" height="300" ></a>
                   <div class="text-blocktxt"> 
                    <h4 class="gallerytitle">Bulan Madu</h4>
                   <p>What a beautiful sunrise</p>
                  </div>
                </div>
            </div>
              <div class="col-lg-3 col-6 px-1 mb-2">
              <div class="hovereffect">
                <a href= "assets/img/photo-1426122402199-be02db90eb90.jpg"><img class="img-responsive" src="<?= base_url('assets/img/tamansari.jpg')?>" alt="..." width="250" height="300" ></a>
              <div class="text-blocktxt"> 
              <h4 class="gallerytitle">Preweding</h4>
                 <p>What a beautiful sunrise</p>
             </div>
             </div>
            </div>
              <div class="col-lg-3 col-6 px-1 mb-2">
              <div class="hovereffect">
                <a href= "assets/img/photo-1426122402199-be02db90eb90.jpg"><img class="img-responsive" src="<?= base_url('assets/img/malioboro.png')?>" alt="..." width="250" height="300" ></a>
              <div class="text-blocktxt"> 
              <h4 class="gallerytitle">Lamaran</h4>
                 <p>What a beautiful sunrise</p>
             </div>
             </div>
            </div>
              <div class="col-lg-3 col-6 px-1 mb-2">
              <div class="hovereffect">
                <a href= "assets/img/photo-1426122402199-be02db90eb90.jpg"><img class="img-responsive" src="<?= base_url('assets/img/candi.jpg')?>" alt="..." width="250" height="300" ></a>
              <div class="text-blocktxt"> 
              <h4 class="gallerytitle">Hari Jadi</h4>
                 <p>What a beautiful sunrise</p>
             </div>
             </div>
            </div>
              <div class="col-lg-3 col-6 px-1 mb-2">
              <div class="hovereffect">
                <a href= "assets/img/photo-1426122402199-be02db90eb90.jpg"><img class="img-responsive" src="<?= base_url('assets/img/kalibiru.png')?>" alt="..." width="250" height="300" ></a>
              <div class="text-blocktxt"> 
              <h4 class="gallerytitle">Liburan</h4>
                 <p>What a beautiful sunrise</p>
             </div>
             </div>
            </div>
              <div class="col-lg-3 col-6 px-1 mb-2"><a href= "assets/img/photo-1426122402199-be02db90eb90.jpg">
              <div class="hovereffect">
              <img class="img-responsive" src="<?= base_url('assets/img/pangilon.png')?>" alt="..." width="250" height="300" ></a> 
              <div class="text-blocktxt"> 
              <h4 class="gallerytitle">Menu Restoran</h4>
                 <p>What a beautiful sunrise</p>
             </div>
             </div>
            </div>
              <div class="col-lg-3 col-6 px-1 mb-2">
              <div class="hovereffect">
                <a href= "assets/img/photo-1426122402199-be02db90eb90.jpg"><img class="img-responsive" src="<?= base_url('assets/img/pantai.png')?>" alt="..." width="250" height="300" ></a>
              <div class="text-blocktxt"> 
              <h4 class="gallerytitle">Pernikahan</h4>
                 <p>What a beautiful sunrise</p>
             </div>
             </div>
            </div>
              <div class="col-lg-3 col-6 px-1 mb-2">
              <div class="hovereffect"><a href= "assets/img/photo-1426122402199-be02db90eb90.jpg">
              <img class="img-responsive" src="<?= base_url('assets/img/EMBUNG.png')?>" alt="..." width="250" height="300" ></a>
              <div class="text-blocktxt"> 
              <h4 class="gallerytitle">Ulang Tahun</h4>
                 <p>What a beautiful sunrise</p>
             </div>
            </div>                         
              </div>
          </div>           
  </section>
   

  <section class="py-6 bg-gray-100" style="margin-top : -120px">
      <div class="container">       
        <div class="text-center pb-lg-4">
          <p class="subtitle">How to booking</p>
          <p class="mb-5">Jadikan setiap acara penuh kenangan dengan tiga langkah mudah</p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="thumbnail" style="text-align: center;">
                <img src="<?= base_url('assets/img/how-it-works-1.png')?>" alt="New York" width="200" height="200">
                <p><strong>New York</strong></p>
                <p class="pitwork">Pilih kota Anda dan pesan sesi pemotretan Anda</p>
            </div>       
          </div>

          <div class="col-lg-4">
          <div class="thumbnail" style="text-align: center;">
              <img src="<?= base_url('assets/img/how-it-works-2.png')?>" alt="New York" width="200" height="200">
              <p><strong>New York</strong></p>
              <p>Kami akan menghubungkan Anda dengan fotografer lokal yang akan mengambil sekitar 200 foto selama sesi pemotretan.</p>
            </div>       
          </div>
        <div class="col-lg-4">
        <div class="thumbnail" style="text-align: center;">
        <img src="<?= base_url('assets/img/how-it-works-3.png')?>" alt="New York" width="200" height="200">
        <p class="pitwork "><strong>New York</strong></p>
        <p>Dalam 3 hari kerja, Anda dapat memilih dan mengunduh hingga 40 foto resolusi tinggi yang telah diedit.</p>
      </div>       
        </div>
        </div>
      </div>
    </section>
    <section class="py-6"  style="margin-top : -120px">
      <div class="container">
        <div class="row">
        <div class="col-lg-6">
            <div class="text-block">
              <h3 class="mb-3">Fotografer lokal</h3>
              <p class="text-muted"> SweetEscape memiliki jaringan lebih dari 2000+ fotografer lokal di lebih dari 400+ kota di seluruh dunia. Kami memilih sendiri fotografer kami dengan ketrampilan dan gaya terbaik dari seluruh dunia.

                Jika Anda sedang berlibur, fotografer kami tidak hanya mengabadikan foto-foto indah, mereka juga dapat menunjukkan tempat-tempat terbaik di kota tersebut (di mana bisa mendapatkan kopi paling nikmat dan hal-hal lain yang tak boleh dilewatkan).</p>     
                <p class="text-muted"> SweetEscape memiliki jaringan lebih dari 2000+ fotografer lokal di lebih dari 400+ kota di seluruh dunia. Kami memilih sendiri fotografer kami dengan ketrampilan dan gaya terbaik dari seluruh

               </p>               
            </div>
        </div> 
        <div class="col-lg-6">
        <div class="text-block mt-5">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
        </div>
            </div>
        </div>         
        </div>
      </div>
    </section>
  </section>
    <footer class="position-relative z-index-10">    
      <div class="py-6 bg-gray-800 text-gray-300 text-muted"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
              <div class="font-weight-bold text-uppercase text-white mb-3">Social Media</div>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="https://demo.bootstrapious.com/directory/1-1/index.html#" target="_blank" title="twitter" class="text-muted text-hover-primary"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://demo.bootstrapious.com/directory/1-1/index.html#" target="_blank" title="facebook" class="text-muted text-hover-primary"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://demo.bootstrapious.com/directory/1-1/index.html#" target="_blank" title="instagram" class="text-muted text-hover-primary"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://demo.bootstrapious.com/directory/1-1/index.html#" target="_blank" title="pinterest" class="text-muted text-hover-primary"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="https://demo.bootstrapious.com/directory/1-1/index.html#" target="_blank" title="vimeo" class="text-muted text-hover-primary"><i class="fab fa-vimeo"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-white mb-3">Q n A</h6>
              <ul class="list-unstyled">
                <li><a class="text-muted">Mon-Sun 8am-7pm (GMT+7)     </a></li>
                <li><a class="text-muted">Phone : +6221- 50206699     </a></li>
                <li><a  class="text-muted">WhatsApp : +62 821 1680 5577     </a></li>
                <li><a  class="text-muted">E-mail : hello@frameatrip.com     </a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0" style="transform : translateX(30%)">
            <h6 class="text-uppercase text-white mb-3">Company</h6>
              <ul class="list-unstyled">
                <li><a href ="#" data-toggle="modal" data-target="#modalRegisterForm" class="text-muted">Contact</a></li>
                <li><a href="https://demo.bootstrapious.com/directory/1-1/pricing.html" class="text-muted">Pricing</a></li>
                <li><a href="https://demo.bootstrapious.com/directory/1-1/text.html" class="text-muted">Text page</a></li>
                <li><a href="<?php echo base_url('').'faq'?>" class="text-muted">F.A.Q.s  <span class="badge badge-info ml-1">New</span></a></li>
                <li><a href="https://demo.bootstrapious.com/directory/1-1/coming-soon.html" class="text-muted">Coming soon</a></li>
              </ul>
            </div>
            <div  class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-white mb-3">We Accept</h6>
              <ul class="list-unstyled">
                <li class="list-inline-item"><img src ="<?php echo base_url('').'assets/'?>img/visa.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src ="<?php echo base_url('').'assets/'?>img/mastercard.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src ="<?php echo base_url('').'assets/'?>img/paypal.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src ="<?php echo base_url('').'assets/'?>img/western-union.svg" alt="..." class="w-2rem"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </footer>
    <!-- jQuery-->
    <script src ="<?php echo base_url('').'assets/'?>js/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src ="<?php echo base_url('').'assets/'?>js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src ="<?php echo base_url('').'assets/'?>js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src ="<?php echo base_url('').'assets/'?>js/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src ="<?php echo base_url('').'assets/'?>js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src ="<?php echo base_url('').'assets/'?>js/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src ="<?php echo base_url('').'assets/'?>js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src ="<?php echo base_url('').'assets/'?>js/theme.js"></script>
  

</body></html>