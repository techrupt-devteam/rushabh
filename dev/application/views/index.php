<div class="body-content">
    <div class="banner-fade-1" id="banner-fade" data-aos="fade-up">
        <ul class="bjqs">
            <?php foreach($slider as $row): ?>
            <li>
                <picture>
                    <source data-srcset="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>" media="(max-width: 500px)" type="image/webp" />
                    <source data-srcset="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>" media="(max-width: 900px)" type="image/webp" />
                    <source data-srcset="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>" media="(min-width: 901px)" type="image/webp" />
                    <img
                        alt="Exclusive Honda bike available at amazing offers only at Rushbah Honda, Nashik. Checkout price, color variants, features and more. Click to avail offers!"
                        title="Rushabh Honda | Nashik"
                        class="lazyload"
                        data-src="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>"
                    />
                </picture>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<main>
    <div class="container-fluid">
        <div class="new-launch">
            <h2>Featured Vehicles</h2>
            <div class="row">
                
                <?php foreach($bikes_scooters as $bikes_scooters_featured): ?>
                	<div class="col-md-4 col-md-4 col-sm-4">
                    <div class="new-item">
                        <div class="new-launch-img"><img alt="dio-BS-VI" class="lazyload" data-src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $bikes_scooters_featured['banner_image']; ?>" /></div>
                        <div class="new-launch-description">
                            <h3><?php echo $bikes_scooters_featured['name'];  ?></h3>
                            <p><?php $original_string = $bikes_scooters_featured['description'];
									$limited_string = word_limiter($original_string , 30, '');
									$rest_of_string = trim(str_replace($limited_string, "", $original_string)); echo $limited_string; ?>
                            	<!-- With a sportier look and aggressive design, it’s time to express your attitude in the streets. --></p>
                            <a href="<?php echo base_url(); ?>bikes-scooters-details/<?php echo $bikes_scooters_featured['id']; ?>" class="hvr-icon-wobble-vertical">Find Out More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                <!-- <div class="col-md-4 col-md-4 col-sm-4">
                    <div class="new-item">
                        <div class="new-launch-img"><img alt="New Unicorn BS-VI" class="lazyload" data-src="assets/images/new-unicorn.jpg" /></div>
                        <div class="new-launch-description">
                            <h3>New Unicorn BS-VI</h3>
                            <p>Honda takes forward its philosophy to the next level with the Unicorn that prides itself on the perfect ...</p>
                            <a href="<?php echo base_url(); ?>cb-unicorn" class="hvr-icon-wobble-vertical">Find Out More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-4 col-sm-4">
                    <div class="new-item">
                        <div class="new-launch-img"><img alt="dio-BS-VI" class="lazyload" data-src="assets/images/new-launch-dio.jpg" /></div>
                        <div class="new-launch-description">
                            <h3>Dio BS VI</h3>
                            <p>With a sportier look and aggressive design, it’s time to express your attitude in the streets.</p>
                            <a href="<?php echo base_url(); ?>dio-BS-VI" class="hvr-icon-wobble-vertical">Find Out More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-4 col-sm-4">
                    <div class="new-item">
                        <div class="new-launch-img"><img alt="Activa 6g" class="lazyload" data-src="assets/images/new-launch-activa-6g.jpg" /></div>
                        <div class="new-launch-description">
                            <h3>Activa 6G</h3>
                            <p>For about two decades, Activa has been changing the game in Indian scootering. With the latest ...</p>
                            <a href="<?php echo base_url(); ?>activa-6g" class="hvr-icon-wobble-vertical">Find Out More</a>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
        <div class="hot_details_product pb-107 pt-110">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-3 mb-3">
                        <div class="section_title"><h2>Hot Deals</h2></div>
                    </div>
                    <div class="align-self-center col-8 col-md-9 p-0">
                        <div class="justify-content-end nav product_tab_menu" role="tablist">
                            <a href="#hot_all" data-toggle="tab" aria-controls="hot_all" aria-selected="true" role="tab" class="active">All</a>
                            <a href="#hot_bike" data-toggle="tab" aria-controls="hot_bike" aria-selected="false" role="tab">Bike</a>
                            <a href="#hot_tiar" data-toggle="tab" aria-controls="hot_tiar" aria-selected="false" role="tab" class="mr-0">Scooter</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-md-12 col-lg-9">
                        <div class="tab-content">
                            <div class="fade tab-pane active show" id="hot_all" role="tabpanel">
                                <div class="row">

                                	<?php foreach($all_hot_deals as $all_row): ?>
                                	<div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>bikes-scooters-details/<?php echo $all_row['id']; ?>">
												<img alt="Checkout Imperial Red Metallic Honda Shine sp 125 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years." src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $all_row['image']; ?>" title="Honda Shine sp 125-Imperial Red Metallic-Rushabh Honda" />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>sp-125" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>bikes-scooters-details/<?php echo $all_row['id']; ?>"><?php echo $all_row['name']; ?></a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> <?php echo number_format($all_row['price']);  ?>/- </span><span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                    <!-- <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>sp-125">
												<img alt="Checkout Imperial Red Metallic Honda Shine sp 125 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years." src="assets/images/sp-125bs-vi/imperial-red-metallic-home.png" title="Honda Shine sp 125-Imperial Red Metallic-Rushabh Honda"/>
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>sp-125" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>sp-125">CB SHINE SP DRUM CBS</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 93,065/- </span><span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>shine-disc-bsvi">
                                                    <img
                                                        alt="Honda Shine BS6 available in black colour at the best price only at best Two wheeler Honda Dealers for years, Rushabh Honda in Nashik. Avail amazing offers!"
                                                        src="assets/images/cb-shine/black.png"
                                                        title="Honda Shine BS6 | Black Colour | Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>shine-disc-bsvi" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>shine-disc-bsvi">CB SHINE SP DISC CBS</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 98,085/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>cb-unicorn">
                                                    <img
                                                        alt=""
                                                        alt="Available Geny Gray Metallic Honda CB Unicorn at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/geny-gray-metallic.png"
                                                        title="Honda CB Unicorn | Geny Gray Metallic | Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i><small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>cb-unicorn" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>cb-unicorn">UNICORN BS VI</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 1,18,857/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>cd-110-dream">
                                                    <img
                                                        alt=""
                                                        alt="Checkout Imperial Red Metallic Honda CD Dream 110 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/cd110dream/imperial-red-metallic.png"
                                                        title="Honda CD Dream 110-Imperial Red Metallic-Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i><small>Book Now</small></a>
                                                    <a href="<?php echo base_url(); ?>cd-110-dream" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>cd-110-dream">CD 110 DREAM</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 81,888/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>dio-BS-VI">
                                                    <img
                                                        alt="Available Dazzle Yellow Honda Dio BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/dio-BS-VI/Yellow.png"
                                                        title="Honda Dio BS6 | Dazzle Yellow | Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>dio-BS-VI" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>dio-BS-VI">DIO (DLX) BS VI</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 85,509/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>activa-6g">
                                                    <img
                                                        alt=""
                                                        alt="Checkout Matte Axis Grey Metallic Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/matte-axis-grey-metallic.png"
                                                        title="Honda Activa 6G | Matte Axis Grey Metallic | Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small></a>
                                                    <a href="<?php echo base_url(); ?>activa-6g" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>activa-6g">ACTIVA 6G BS VI</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 83,329/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->


                                </div>
                            </div>



                            <div class="fade tab-pane" id="hot_bike" role="tabpanel">
                                <div class="row">
                                	
                                	<?php foreach($bikes_hot_deals as $bikes_row): ?>
                                	<div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>bikes-scooters-details/<?php echo $bikes_row['id']; ?>">
                                                    <img alt="Checkout Imperial Red Metallic Honda Shine sp 125 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years." src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $bikes_row['image']; ?>" title="Honda Shine sp 125-Imperial Red Metallic-Rushabh Honda" /> </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>bikes-scooters-details/<?php echo $bikes_row['id']; ?>"><?php echo $bikes_row['name']; ?></a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> <?php echo number_format($bikes_row['price']); ?>/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                	<?php endforeach; ?>
                                    <!-- <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>sp-125">
                                                    <img
                                                        alt=""
                                                        alt="Checkout Imperial Red Metallic Honda Shine sp 125 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/sp-125bs-vi/imperial-red-metallic-home.png"
                                                        title="Honda Shine sp 125-Imperial Red Metallic-Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>sp-125">CB SHINE SP DRUM</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 93,065/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>shine-disc-bsvi">
                                                    <img
                                                        alt="Honda Shine BS6 available in black colour at the best price only at best Two wheeler Honda Dealers for years, Rushabh Honda in Nashik. Avail amazing offers!"
                                                        src="assets/images/cb-shine/black.png"
                                                        title="Honda Shine BS6 | Black Colour | Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i><small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>shine-disc-bsvi" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>shine-disc-bsvi">CB SHINE SP DISC CBS</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 98,085/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>cb-unicorn"><img alt="" src="assets/images/geny-gray-metallic.png" /></a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>cb-unicorn" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>cb-unicorn">UNICORN BS VI</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 1,18,857/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>cd-110-dream">
                                                    <img
                                                        alt=""
                                                        alt="Checkout Imperial Red Metallic Honda CD Dream 110 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/cd110dream/imperial-red-metallic.png"
                                                        title="Honda CD Dream 110-Imperial Red Metallic-Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small></a>
                                                    <a href="<?php echo base_url(); ?>cd_110_dream" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>cd-110-dream">CD 110 DREAM</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 81,888/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->



                                </div>
                            </div>
                            <div class="fade tab-pane" id="hot_tiar" role="tabpanel">
                                <div class="row">
                                	
                                	<?php foreach($scooters_hot_deals as $scooters_row): ?>
                                	<div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>bikes-scooters-details/<?php echo $scooters_row['id']; ?>">
                                                    <img alt="Available Dazzle Yellow Honda Dio BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years." src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $scooters_row['image']; ?>" title="Honda Dio BS6 | Dazzle Yellow | Rushabh Honda"/> </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>dio-BS-VI" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>bikes-scooters-details/<?php echo $scooters_row['id']; ?>"><?php echo $scooters_row['name']; ?></a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> <?php echo number_format($scooters_row['price']); ?>/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                	<?php endforeach; ?>
                                    <!-- <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>dio-BS-VI">
                                                    <img
                                                        alt=""
                                                        alt="Available Dazzle Yellow Honda Dio BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/dio-BS-VI/Yellow.png"
                                                        title="Honda Dio BS6 | Dazzle Yellow | Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>dio-BS-VI" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>dio-BS-VI">DIO (DLX) BS VI</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 85,509/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>activa-6g">
                                                    <img
                                                        alt="Checkout Matte Axis Grey Metallic Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."
                                                        src="assets/images/matte-axis-grey-metallic.png"
                                                        title="Honda Activa 6G | Matte Axis Grey Metallic | Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>activa-6g" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>activa-6g">ACTIVA 6G BS VI</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 83,329/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>activa-125-bs-vi">
                                                    <img
                                                        alt=""
                                                        alt="Available Rebel Red Metallic Honda Activa 125 BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. "
                                                        src="assets/images/activa-125-Rebel-Red-Metallic.png"
                                                        title="Honda Activa 125 BS6-Rebel Red Metallic-Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>activa-125-bs-vi" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>activa-125-bs-vi">ACTIVA 125 DRUM</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 88,259/-</span> <span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-4">
                                        <div class="single__product">
                                            <div class="produc_thumb">
                                                <a href="<?php echo base_url(); ?>grazia-125">
                                                    <img
                                                        alt="Honda Grazia 125 available in Matte Cyber Yellow colour at the best price only at best Two wheeler Honda Dealers for years, Rushabh Honda in Nashik."
                                                        src="assets/images/grazia/matte-cyber-yellow.png"
                                                        title="Honda Grazia 125-Matte Cyber Yellow-Rushabh Honda"
                                                    />
                                                </a>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_action">
                                                    <a href="<?php echo base_url(); ?>online-booking" data-toggle="tooltip" title="Book Now"><i class="fa fa-shopping-cart"></i> <small>Book Now</small> </a>
                                                    <a href="<?php echo base_url(); ?>grazia-125" data-toggle="tooltip" title="More Details"><i class="fa fa-info-circle"></i></a>
                                                </div>
                                                <div class="product__desc">
                                                    <h3><a href="<?php echo base_url(); ?>grazia-125">GRAZIA 125 S.DRUM</a></h3>
                                                    <div class="price_amount">
                                                        <span class="current_price"><i class="fa fa-inr"></i> 91,917/- </span><span class="old_price">On Road</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-sm-block col-lg-3 col-md-12 logo">
                        <div class="long_hot_detals single_banner d-lg-none">
                            <a href="#">
                                <img
                                    alt="Honda Grazia 125 available in Matte Cyber Yellow colour at the best price only at best Two wheeler Honda Dealers for years, Rushabh Honda in Nashik."
                                    src="assets/images/grazia/matte-cyber-yellow.jpg"
                                    title="Honda Grazia 125-Matte Cyber Yellow-Rushabh Honda"
                                />
                            </a>
                        </div>
                        <div class="d-none d-lg-block long_hot_detals single_banner">
                            <a href="#">
                                <img
                                    alt="Honda Grazia 125 available in Matte Cyber Yellow colour at the best price only at best Two wheeler Honda Dealers for years, Rushabh Honda in Nashik."
                                    src="assets/images/grazia/matte-cyber-yellow.jpg"
                                    title="Honda Grazia 125-Matte Cyber Yellow-Rushabh Honda"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="videos-latest-update">
            <div class="container">
                <div class="section_title"><h2>Latest Updates</h2></div>
                <div class="row mt-4">
                    <div
                        class="col-md-6 p-0"
                        data-aos="fade-left"
                        data-aos-anchor-placement="top-center"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-offset="200"
                        data-aos-once="false"
                    >
                        <div class="position-relative video-section">
                            <img alt="Video" class="lazyload" data-src="assets/images/video-img1.png" />
                            <a class="video video-play-button" video-url="https://youtu.be/nDMExdociXw"><i class="fa fa-play" style="position: relative; z-index: 99; color: #222;"></i></a>
                        </div>
                    </div>
                    <div
                        class="col-md-6 p-0 d-none d-sm-block"
                        data-aos="fade-right"
                        data-aos-anchor-placement="top-center"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-offset="200"
                        data-aos-once="false"
                    >
                        <div class="holder latest-updates">
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
                                <li><i class="fa fa-newspaper-o"></i>Honda 2Wheelers India cumulative exports cross the 25 Lakh units’ landmark<span> Gurugram, January 28, 2020</span></li>
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
