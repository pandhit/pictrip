<!-- Footer-->
    <footer class="position-relative z-index-10">
      <!-- Main block - menus, subscribe form-->
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
                <li><a href="https://demo.bootstrapious.com/directory/1-1/contact.html" class="text-muted">Contact                                   </a></li>
                <li><a href="https://demo.bootstrapious.com/directory/1-1/pricing.html" class="text-muted">Pricing                                   </a></li>
                <li><a href="https://demo.bootstrapious.com/directory/1-1/text.html" class="text-muted">Text page                                   </a></li>
                <li><a href="<?php echo base_url('').'faq'?>" class="text-muted">F.A.Q.s  <span class="badge badge-info ml-1">New</span></a></li>
                <li><a href="https://demo.bootstrapious.com/directory/1-1/coming-soon.html" class="text-muted">Coming soon                                   </a></li>
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
	
<!-- page script -->
    </script>
    <!-- jQuery-->
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
    <script src ="<?php echo base_url('').'assets/'?>js/bootstrap-datepicker.min.js"></script>
 
<script type="text/javascript">

	function changecategory()
	{
		if (document.getElementById("category").value === "1") {
			document.getElementById("time").disabled='true';
		} else {
			document.getElementById("time").disabled='';
		}
	}

    //Date picker
    $('#bookingDate').datepicker({
      autoclose: true,
      format: 'dd-MM-yyyy',
      todayHighlight: true
    });

</script>

</body>
</html>