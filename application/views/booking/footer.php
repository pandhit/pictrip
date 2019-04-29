
<!-- page script -->
    <script>
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
