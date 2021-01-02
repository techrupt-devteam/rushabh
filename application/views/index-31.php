<div class="body-content">
      <div id="banner-fade" data-aos="fade-up" class="banner-fade-1">
      <ul class="bjqs">
		<?php foreach($slider as $row): ?>
      <li>
       <!--  <a href="<?php echo base_url(); ?>book-an-appointment"> --><picture>
        <source data-srcset='<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>' type="image/webp" media="(max-width: 500px)">
        <source data-srcset='<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>' type="image/webp" media="(max-width: 900px)">
        <source data-srcset='<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>' type="image/webp" media="(min-width: 901px)">
        <img data-src="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>" class="lazyload" alt="Cash Back Rs.1000" title="Cash Back Rs.1000" /></picture><!-- </a> -->
     </li>
      <?php endforeach; ?>
	</ul>
        <!-- end Basic jQuery Slider -->
      </div>
        </div>
<main>
<div class="container-fluid">
<!--NEW LAUNCH SECTION-->
<div class="new-launch">
<h2>Featured Vehicles</h2>
<div class="row">
<div class="col-md-4 col-md-4 col-sm-4">
	<div class="new-item">
<div class="new-launch-img">
	<img data-src="assets/images/new-unicorn.jpg" alt="New Unicorn BS-VI" class="lazyload">

</div>
<div class="new-launch-description">
<h3>New Unicorn BS-VI</h3>
<p>Honda takes forward its philosophy to the next level with the Unicorn that prides itself on the perfect ...</p>
<a href="<?php echo base_url(); ?>cb-unicorn" class="hvr-icon-wobble-vertical">Find Out More </a>
</div>
</div>
</div>
<div class="col-md-4 col-md-4 col-sm-4">
	<div class="new-item">
<div class="new-launch-img">
	<img data-src="assets/images/new-launch-dio.jpg" class="lazyload" alt="dio-BS-VI">

</div>
<div class="new-launch-description">
<h3>Dio BS VI</h3>
<p>With a sportier look and aggressive design, it’s time to express your attitude in the streets.</p>
<a href="<?php echo base_url(); ?>dio-BS-VI" class="hvr-icon-wobble-vertical">Find Out More </a>
</div>
</div>
</div>
<div class="col-md-4 col-md-4 col-sm-4">
	<div class="new-item">
<div class="new-launch-img">
	<img data-src="assets/images/new-launch-activa-6g.jpg" class="lazyload" alt="Activa 6g">
	
</div>
<div class="new-launch-description">
<h3>Activa 6G</h3>
<p>For about two decades, Activa has been changing the game in Indian scootering. With the latest ...</p>
<a href="<?php echo base_url(); ?>activa-6g" class="hvr-icon-wobble-vertical">Find Out More </a>
</div>
</div>
</div>
</div>
</div>

<!--NEW ARRIVALS SECTION-->

<div class="hot_details_product pt-110 pb-107">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-lg-3 col-md-3 col-12 mb-3">
                                <div class="section_title">
                                    <h2>Hot Deals</h2>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="nav product_tab_menu justify-content-end" role="tablist">
                                    <a class="active" href="#hot_all" data-toggle="tab" role="tab" aria-selected="true" aria-controls="hot_all">All</a>
                                    <a href="#hot_bike" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_bike">Bike</a>
                                    <a href="#hot_tiar" class="mr-0" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_tiar">Scooter </a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-lg-9 col-md-12 ">
                                <div class="tab-content">
                                    <div class="tab-pane active show fade" id="hot_all" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>sp-125"><img src="assets/images/sp-125.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small>
                                                            </a>
                                                           <a href="<?php echo base_url(); ?>sp-125" data-toggle="tooltip" title="More Details">
                                                              <i class="fa fa-info-circle"></i></a> 
                                                            
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>sp-125">CB SHINE SP DRUM CBS </a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">
                                                                  <i class="fa fa-inr"></i> 92,388/-
                                                                </span>
                                                                <span class="old_price"> On Road </span>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>shine-disc-bsvi">
                                                          <img src="assets/images/shine-vi.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small> Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>shine-disc-bsvi" data-toggle="tooltip" title="More Details">
                                                              <i class="fa fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>shine-disc-bsvi">CB SHINE SP DISC CBS</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"><i class="fa fa-inr"></i> 97,106/-</span>
                                                                <span class="old_price"> On Road </span>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>cb-unicorn"><img src="assets/images/new-unicon.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i><small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>cb-unicorn" data-toggle="tooltip" title="More Details">
                                                              <i class="fa fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>cb-unicorn">UNICORN BS VI</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"><i class="fa fa-inr"></i> 1,18,177/-</span>
                                                                <span class="old_price"> On Road </span>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>cd-110-dream"><img src="assets/images/cd110.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i><small>Book Now</small></a>
                                                            <a href="<?php echo base_url(); ?>cd-110-dream" data-toggle="tooltip" title="More Details">
                                                              <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3>
                                                              <a href="<?php echo base_url(); ?>cd-110-dream">CD 110 DREAM</a>
                                                            </h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"><i class="fa fa-inr"></i> 81,685/-</span>
                                                                <span class="old_price"> On Road </span>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>dio-BS-VI">
                                                          <img src="assets/images/ddd1.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now" >
                                                              <i class="fa fa-shopping-cart"></i>  <small> Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>dio-BS-VI" data-toggle="tooltip" title="More Details">
                                                              <i class="fa fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>dio-BS-VI">DIO  (DLX) BS VI </a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"><i class="fa fa-inr"></i> 84,979/-</span>
                                                                <span class="old_price"> On Road </span>
                                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>activa-6g">
                                                          <img src="assets/images/activa-6g.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now" >
                                                              <i class="fa fa-shopping-cart"></i> <small> Book Now</small></a>
                                                            <a href="<?php echo base_url(); ?>activa-6g" data-toggle="tooltip" title="More Details">
                                                              <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>activa-6g">ACTIVA 6G BS VI </a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"> <i class="fa fa-inr"></i> 82,797/-</span>
                                                                <span class="old_price"> On Road </span>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hot_bike" role="tabpanel">
                                        <div class="row">

                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>sp-125"><img src="assets/images/sp-125.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now" style="font-size: 15px; width: 70px;">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>sp-125">CB SHINE SP DRUM</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"><i class="fa fa-inr"></i> 92,388/-</span>
                                                                <span class="old_price"> On Road </span>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>shine-disc-bsvi"><img src="assets/images/shine-vi.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i><small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>shine-disc-bsvi" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>shine-disc-bsvi">CB SHINE SP DISC CBS</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"> <i class="fa fa-inr"></i> 97,106/-</span>
                                                                <span class="old_price"> On Road </span>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>cb-unicorn"><img src="assets/images/new-unicon.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>cb-unicorn" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>cb-unicorn">UNICORN BS VI</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"> <i class="fa fa-inr"></i> 1,18,177/-</span>
                                                                <span class="old_price"> On Road </span>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>cd-110-dream"><img src="assets/images/cd110.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small></a>
                                                            <a href="<?php echo base_url(); ?>cd_110_dream" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>cd-110-dream">CD 110 DREAM</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"> <i class="fa fa-inr"></i> 81,685/-</span>
                                                                <span class="old_price"> On Road </span>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hot_tiar" role="tabpanel">
                                        <div class="row">
                                          
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>dio-BS-VI"><img src="assets/images/DeluxeYellow.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>dio-BS-VI" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>dio-BS-VI">DIO  (DLX) BS VI </a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"> <i class="fa fa-inr"></i> 84,979/-</span>
                                                                <span class="old_price">On Road </span>
                                                                <!-- <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>activa-6g"><img src="assets/images/activa-6g.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>activa-6g" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>activa-6g">ACTIVA 6G BS VI </a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"> 
                                                                  <i class="fa fa-inr"></i>  82,797/-</span>
                                                                  <span class="old_price"> On Road </span>
                                                                <!-- <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>activa-125-bs-vi"><img src="assets/images/activa-125-About_me.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>activa-125-bs-vi" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>activa-125-bs-vi">ACTIVA 125 DRUM</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price"> <i class="fa fa-inr"></i> 87,727/-</span>
                                                                <span class="old_price"> On Road </span>
                                                                <!-- <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="<?php echo base_url(); ?>grazia-125"><img src="assets/images/grazia.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now">
                                                              <i class="fa fa-shopping-cart"></i> <small>Book Now</small>
                                                            </a>
                                                            <a href="<?php echo base_url(); ?>grazia-125" data-toggle="tooltip" title="More Details">
                                                            	<i class="fa fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="<?php echo base_url(); ?>grazia-125">GRAZIA 125 S.DRUM</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">
                                                                   <i class="fa fa-inr"></i> 91,913/-
                                                                </span>
                                                                <span class="old_price"> On Road </span>
                                                                <!-- <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-lg-3 col-md-12 logo d-none d-sm-block">
                                <div class="single_banner long_hot_detals d-lg-none">
                                    <a href="#"><img src="assets/images/sideimg.jpg" alt="Shop Banner"></a>
                                </div>
                                <div class="single_banner long_hot_detals d-none d-lg-block">
                                    <a href="#"><img src="assets/images/sideimg.jpg" alt="Shop Banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--NEW ARRIVALS SECTION-->
<div class="videos-latest-update">
	<div class="container">
		<div class="section_title">
            <h2>Latest Updates</h2>
        </div>
<div class="row mt-4">
<div class="col-md-6 p-0" data-aos="fade-left" data-aos-offset="200"  data-aos-delay="100" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true"  data-aos-once="false"  data-aos-anchor-placement="top-center">
<!-- <h3>Videos</h3> -->
<div class="video-section position-relative">
	<img data-src="assets/images/video-img1.png" alt="Video" class="lazyload">
	<a class="video video-play-button" video-url="https://youtu.be/nDMExdociXw">
	<i class="fa fa-play" style="position: relative;z-index: 99;color: #222"></i>
	</a>
</div>
</div>
<div class="col-md-6 p-0" data-aos="fade-right" data-aos-offset="200"  data-aos-delay="100" data-aos-duration="1000"  data-aos-easing="ease-in-out"  data-aos-mirror="true"  data-aos-once="false"  data-aos-anchor-placement="top-center">
<!-- <h3>Latest Updates</h3> -->
<div class="latest-updates holder">
<ul id="ticker01">
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers retails 21,000 & serviced 2.5 lac units in May’20<span>Gurugram, May 15, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda dealer family starts rebooting their operations with “Safety Comes First” approach post lockdown2.0<span>Gurugram, May 06, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India announces New Top Management for India <span>Gurugram, May 01, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda workshops serve over 500 frontline Corona Warriors on Two Wheels following the guidelines of COVID-19 lockdown<span>Kochi, April 18, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India pledges support to its dealer family to maintain business continuity<span>Gurugram, April 09, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda India Foundation pledges support towards India’s fight against COVID-19<span>New Delhi, April 01, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India’s BS-VI sales cross 5.5 lac unit mark! <span>Mumbai, March 16, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India celebrates International Women’s Day across India<span>New Delhi, March 08, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda celebrates the Power of 6 with the Nation!<span>Gurugram, March 02, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>BE A WING RIDER<span>New Delhi, February 27, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India’s BS-VI sales zoom past 3 lac units mark!<span>New Delhi, February 26, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda unveils Next-Generation of India’s favorite 125cc motorcycle<span>New Delhi, February 20, 2020</span></li>

<li><i class="fa fa-newspaper-o"></i>Honda delivers its flagship scooter Forza 300 in India!<span>New Delhi, February 18, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers signs MoU with Pine Labs<span>New Delhi, February 14, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda celebrates 18 years of India’s 1st Moto-scooter<span>New Delhi, February 10, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India sales cross 4 Lac units in Jan’20<span>Patna, February 03, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India celebrates 20 lac customers in Madhya Pradesh!<span>Bhopal, January 31, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India cumulative exports cross the 25 Lakh units’ landmark<span> Gurugram, January 28, 2020 </span></li>
<li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India leads #AQuietRevolution in BS-VI era!<span>New Delhi, January 24, 2020</span></li>
<li><i class="fa fa-newspaper-o"></i>Honda celebrates 2020 with the Power of 6!<span>New Delhi, January 15, 2020</span></li>

</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</main>



