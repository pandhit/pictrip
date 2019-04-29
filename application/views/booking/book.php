
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8"> 
          <div class="text-block">           
            <h1 style="margin-top: 52px;">Prambanan</h1>
            <p class="text-muted text-uppercase mb-4">Wisata Sejarah</p>
           
            <p class="text-muted font-weight-light">Candi Prambanan atau Candi Roro Jonggrang (Hanacaraka: ꦕꦤ꧀ꦝꦶ​ꦥꦿꦩ꧀ꦧꦤꦤ꧀ , Candhi Prambanan) adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wishnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah. Berdasarkan prasasti Siwagrha nama asli kompleks candi ini adalah Siwagrha (bahasa Sanskerta yang bermakna 'Rumah Siwa'), dan memang di garbagriha (ruang utama) candi ini bersemayam arca Siwa Mahadewa setinggi tiga meter yang menujukkan bahwa di candi ini dewa Siwa lebih diutamakan. </p>
            <h6 class="mb-3">Sejarah</h6>
            <p class="text-muted font-weight-light">Nama Prambanan, berasal dari nama desa tempat candi ini berdiri, diduga merupakan perubahan nama dialek bahasa Jawa dari istilah teologi Hindu Para Brahman yang bermakna "Brahman Agung" yaitu Brahman atau realitas abadi tertinggi dan teragung yang tak dapat digambarkan, yang kerap disamakan dengan konsep Tuhan dalam agama Hindu. Pendapat lain menganggap Para Brahman mungkin merujuk kepada masa jaya candi ini yang dahulu dipenuhi oleh para brahmana. Pendapat lain mengajukan anggapan bahwa nama "Prambanan" berasal dari akar kata mban dalam Bahasa Jawa yang bermakna menanggung atau memikul tugas, merujuk kepada para dewa Hindu yang mengemban tugas menata dan menjalankan keselarasan jagat.</p>                      
            <h6 class="mb-3">Interaction with guests</h6>
            <p class="text-muted font-weight-light">We live in the two floors above the garden apartment so we are usually available to answer questions. The garden apartment is separate from our living space. We are happy to provide advice on local attractions, restaurants and transportation around the city. If there's anything you need please don't hesitate to ask!</p>
          </div>   
          <div class="container">
        <br />
        <div class="row">
          <div class='col-sm-3'>
            
          </div>
        </div>
      </div>
          <div class="text-block">
            <h5 class="mb-4">Point of view</h5>
            <div class="row gallery mb-3 ml-n1 mr-n1">
              <div class="col-lg-4 col-6 px-1 mb-2"><a href="<?php echo base_url('').'assets/'?>img/photo-1426122402199-be02db90eb90.jpg" data-fancybox="gallery" title="Our street"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1426122402199-be02db90eb90.jpg" alt="..." class="img-fluid"></a></div>
              <div class="col-lg-4 col-6 px-1 mb-2"><a href="<?php echo base_url('').'assets/'?>img/photo-1512917774080-9991f1c4c750.jpg" data-fancybox="gallery" title="Outside"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="..." class="img-fluid"></a></div>
              <div class="col-lg-4 col-6 px-1 mb-2"><a href="<?php echo base_url('').'assets/'?>img/photo-1494526585095-c41746248156.jpg" data-fancybox="gallery" title="Rear entrance"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1494526585095-c41746248156.jpg" alt="..." class="img-fluid"></a></div>
              <div class="col-lg-4 col-6 px-1 mb-2"><a href="<?php echo base_url('').'assets/'?>img/photo-1484154218962-a197022b5858.jpg" data-fancybox="gallery" title="Kitchen"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1484154218962-a197022b5858.jpg" alt="..." class="img-fluid"></a></div>
              <div class="col-lg-4 col-6 px-1 mb-2"><a href="<?php echo base_url('').'assets/'?>img/photo-1522771739844-6a9f6d5f14af.jpg" data-fancybox="gallery" title="Bedroom"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1522771739844-6a9f6d5f14af.jpg" alt="..." class="img-fluid"></a></div>
              <div class="col-lg-4 col-6 px-1 mb-2"><a href="<?php echo base_url('').'assets/'?>img/photo-1488805990569-3c9e1d76d51c.jpg" data-fancybox="gallery" title="Bedroom"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1488805990569-3c9e1d76d51c.jpg" alt="..." class="img-fluid"></a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div style="top: 100px;" class="p-4 shadow ml-lg-4 rounded sticky-top">
            <p class="text-muted"><span class="text-primary h2">$120</span> /2 hours</p>
            <hr class="my-4">
            <form id="booking-form" autocomplete="off" class="form">
              <div class="form-group">
                <label for="bookingDate" class="form-label">Date *</label>
				  <div class="input-group date">
                    <input class="form-control" type="text" name="bookingDate" id="bookingDate" data-date-start-date="0d" value="<?php echo date('d-F-Y');?>" style="cursor: pointer;">
                </div>
              </div>   

              <div class="form-group mb-4">
                <label for="category" class="form-label">Category*</label>
                <select name="category" id="category" class="form-control" onChange="changecategory();">
					<option value="ALL">-- choose -- </option>
                    <?php 
						foreach ($category as $key => $value)
                        {
                            echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                        }
                    ?>
                </select>
              </div>
			  
              <div class="form-group mb-4">
                <label for="time" class="form-label">Destination*</label>
                <select name="destination" id="destination" class="form-control" >
					<option value="ALL">-- choose -- </option>
                    <?php 
						foreach ($destination as $key => $value)
                        {
                            echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                        }
                    ?>
                </select>
              </div>
			  
			  <div class="form-group mb-4">
                <label for="time" class="form-label">Durasi*</label>
                <select name="time" id="time" class="form-control">
                 <option value="1">-- choose -- </option>
                  <option value="2">08.00 AM</option>
                  <option value="3">09.00 AM</option>
                  <option value="4">10.00 AM</option>                
                </select>
         </div>
          
			  <div class="form-group mb-4">
                <label for="time" class="form-label">Paket Foto*</label>
                <select name="time" id="time" class="form-control">
                 <option value="1">-- choose -- </option>
                  <option value="2">08.00 AM</option>
                  <option value="3">09.00 AM</option>
                  <option value="4">10.00 AM</option>                
                </select>
         </div>
         <div class="form-group mb-4">
                <label for="time" class="form-label">Item*</label>
                <select name="time" id="time" class="form-control">
                 <option value="1">-- choose -- </option>
                  <option value="2">08.00 AM</option>
                  <option value="3">09.00 AM</option>
                  <option value="4">10.00 AM</option>                
                </select>
         </div>
         <div class="form-group mb-4">
                <label for="time" class="form-label">Location*</label>
                <select name="time" id="time" class="form-control">
                 <option value="1">-- choose -- </option>
                  <option value="2">08.00 AM</option>
                  <option value="3">09.00 AM</option>
                  <option value="4">10.00 AM</option>                
                </select>
         </div>
         <div class="form-group mb-4">
                <label for="time" class="form-label">Meeting Location*</label>
                <select name="time" id="time" class="form-control">
                 <option value="1">-- choose -- </option>
                  <option value="2">08.00 AM</option>
                  <option value="3">09.00 AM</option>
                  <option value="4">10.00 AM</option>                
                </select>
         </div>
              <div class="form-group">
                <button type="submit" onclick="window.location.href='<?php echo base_url('Invoice')?>'" class="btn btn-primary btn-block">Book your stay</button>
              </div>
            </form>
            <p class="text-muted text-sm text-center">
            please check the data input again.</p>
            <hr class="my-4">
            <div class="text-center">            
            </div>
          </div>
        </div>
      </div>
    </div>   
	
    
      
