<main>
<style>
	.about-product p {
		color: #222;
		text-align: justify;
	}
</style>
  <div class="innerpage">
    <div class="main-product-banner">
    <img src="assets/images/x-blade/landingBanner.jpg" class="resposive-img" title="Honda X Blade | Red | Rushabh Honda" alt="Available Red Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
    </div>
    <div class="about-product">
    <?php foreach($xblade_details as $row);?>
      <div class="row">
        <div class="col-md-6">
          <div class="about-left">
            <h2><?php echo $row['name']; ?></h2>
            <p style="color: #000; text-align: justify;"><?php echo $row['description']; ?></p>
            
            <!--<h4>it's time to be advanced</h4>
            <p>Meet <strong>Honda X-Blade BS6</strong> that is beyond the usual. Beyond the gimmicks and stunts. Beyond the games, is a look that dares the regular. That challenges the status quo.<strong> X Blade mileage </strong> surely defies the ordinary.<strong> Honda X Blade</strong> has a  look that the rest look up to.</p>
            <p>Checkout <strong> on-road price, images, features, colours </strong> and more.</p>
            <h4>a quiet revolution</h4>
            <div class="price col-md-12"id="price">
              <p class="city">Price for Nashik City</p>
              <table width="100%"cellspacing="0"cellpadding="0"border="0">
                <tbody>
                  <tr>
                    <th>Model</th>
                    <th>Color</th>
                    <th style="width:129px">On Road Price</th>
                  </tr>
                  <tr>
                    <td>X BLADE SINGLE DISC</td>
                    <td>Pearl Spartan Red</td>
                    <td><strong>Rs 1,31,829</strong></td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Pearl Igneous Black</td>
                    <td><strong>-</strong></td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Matte Axis Grey Metallic</td>
                    <td><strong>-</strong></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Matte Marvel Blue Metallic</td>
                    <td><strong></strong></td>
                  </tr>
                  <tr>
                    <td>X BLADE DOUBLE DISC</td>
                    <td>Matte Axis Grey Metallic</td>
                    <td><strong>Rs 1,36,641</strong></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Pearl Igneous Black</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Pearl Igneous Black</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <p class="notice">* Prices are subject to change without any prior notice.</p>
            </div>-->
            
            
          </div>
        </div>
        <div class="col-md-6 text-center"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" class="resposive-img" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
      </div>
    </div>
    <div class="site-specification">
      <h2>Specifications*</h2>
      <div class="row">
          <?php foreach($body_dimensions as $data); ?>
        <div class="col-md-5"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $data['image']; ?>" class="resposive-img" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
        <div class="col-md-7">
          <ul class="nav nav-pills mb-3 specification-tabs"id="pills-tab"role="tablist">
            <li class="nav-item"><a href="#pills-body"data-toggle="pill"aria-controls="pills-home"aria-selected="true"role="tab"class="active nav-link"id="pills-home-tab">Body Dimensions</a></li>
            <li class="nav-item"><a href="#pills-engine"data-toggle="pill"aria-controls="pills-profile"aria-selected="false"role="tab"class="nav-link"id="pills-profile-tab">Engine</a></li>
            <li class="nav-item"><a href="#pills-transmission"data-toggle="pill"aria-controls="pills-contact"aria-selected="false"role="tab"class="nav-link"id="pills-contact-tab">Transmission</a></li>
            <li class="nav-item"><a href="#pills-tyres-brakes"data-toggle="pill"aria-controls="pills-contact"aria-selected="false"role="tab"class="nav-link"id="pills-contact-tab">Tyres & brakes</a></li>
            <li class="nav-item"><a href="#pills-frame-suspension"data-toggle="pill"aria-controls="pills-contact"aria-selected="false"role="tab"class="nav-link"id="pills-contact-tab">Frame & Suspension</a></li>
            <li class="nav-item"><a href="#pills-electricals"data-toggle="pill"aria-controls="pills-contact"aria-selected="false"role="tab"class="nav-link"id="pills-contact-tab">Electricals</a></li>
          </ul>
          <div class="tab-content"id="pills-tabContent">
            <div class="fade tab-pane active show"id="pills-body"role="tabpanel"aria-labelledby="pills-home-tab">
              <div class="body-dimension">
                <ul>
                    <?php $cnt=0; foreach($body_dimensions as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Length</span>2013 mm</li>
                  <li><span>Width</span>786 mm</li>
                  <li><span>Height</span>1115 mm</li>
                  <li><span>Wheel Base</span>1347 mm</li>
                  <li><span>Ground Clearance</span>160 mm</li>
                  <li><span>Kerb weight</span>Single Disc - 143 Kg, Double Disc - 144 Kg</li>
                  <li><span>Seat Length</span>582 mm</li>
                  <li><span>Seat Height</span>795 mm</li>
                  <li><span>Fuel tank capacity</span>12 L</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-engine"role="tabpanel"aria-labelledby="pills-profile-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                 <!-- <li><span>Type</span>4 Stroke, SI, BS-VI Engine</li>
                  <li><span>Displacement</span>162.71 cc</li>
                  <li><span>Max net power</span>10.2 kW @ 8000 rpm</li>
                  <li><span>Max net torque</span>14.7 N-m @ 5500 rpm</li>
                  <li><span>Fuel System </span>PGM-FI</li>
                  <li><span>Bore x Stroke</span>57.300 x 63.096 mm</li>
                  <li><span>Compression ratio</span>10.0:1</li>
                  <li><span>Starting method</span>Self/Kick</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-transmission"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul>
                    <?php $cnt=0; foreach($transmission as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Clutch Type</span>Multiplate Wet Clutch</li>
                  <li><span>No. of Gears</span>5 Gears</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-tyres-brakes"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Tyre Size & Type (Front)</span> 80/100-17 M/C 46P (Tubeless)</li>
                  <li><span>Tyre Size & Type (Rear)</span> 130/70-17 M/C 62P (Tubeless)</li>
                  <li><span>Brake Size & Type (Front)</span> Disc - 276 mm</li>
                  <li><span>Brake Size & Type (Rear)</span> Drum - 130 mm, Disc - 220 mm</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-frame-suspension"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul>
                    <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Frame Type</span>Diamond Type</li>
                  <li><span>Front Suspension</span>Telescopic</li>
                  <li><span>Rear Suspension</span>Hydraulic, Monoshock</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-electricals"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul>
                    <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Battery</span>12V, 5.0Ah</li>
                  <li><span>Head lamp</span>LED</li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bike-color">
      <h2>Available Color</h2>
      <div class="bd-example bd-example-tabs">
        <div class="row">
          <div class="col-9">
            <div class="tab-content"id="v-pills-tabContent">
              <?php foreach($colour as $row): 
                $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=5 order by id asc limit 1")->result();
                foreach($data_value as $data_value_row);
                ?>
                <div <?php if($row['id']==$data_value_row->id){ ?> class="fade tab-pane active show text-center" <?php }else{ ?> class="fade tab-pane text-center" <?php } ?> id="v-pills-<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
                <?php endforeach; ?>
              <!--<div class="fade tab-pane active show text-center"id="v-pills-red"role="tabpanel"aria-labelledby="v-pills-home-tab">
              <img src="assets/images/x-blade/pearl-spartan-red.png" title="Honda X Blade | Pearl Spartan Red | Rushabh Honda" alt="Available Pearl Spartan Red Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
              <div class="fade tab-pane text-center"id="v-pills-silver"role="tabpanel"aria-labelledby="v-pills-profile-tab">
              <img src="assets/images/x-blade/pearl-igneous-black.png" title="Honda X Blade | Pearl Igneous Black | Rushabh Honda" alt="Available Pearl Igneous Black Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
              <div class="fade tab-pane text-center"id="v-pills-metallic"role="tabpanel"aria-labelledby="v-pills-messages-tab">
              <img src="assets/images/x-blade/Matte-Axis-Grey-Metallic.png" title="Honda X Blade | Matte Axis Grey Metallic | Rushabh Honda" alt="Available Matte Axis Grey Metallic Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
              <div class="fade tab-pane text-center"id="v-pills-blue"role="tabpanel"aria-labelledby="v-pills-settings-tab">
              <img src="assets/images/x-blade/matte-marvel-blue-metallic.png" title="Honda X Blade | Blue Metallic | Rushabh Honda" alt="Available Blue Metallic Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
              </div>-->
              
              
            </div>
          </div>
          <div class="color-section">
            <div class="nav flex-column nav-pills"id="v-pills-tab"role="tablist"aria-orientation="vertical">
                <?php foreach($colour as $row): 
                 $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=5 order by id asc limit 1")->result();
                foreach($data_value as $data_value_row);
                ?>
                <a href="#v-pills-<?php echo $row['id']; ?>" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" <?php if($row['id']==$data_value_row->id){ ?> class="active show nav-link" <?php }else{ ?> class="show nav-link" <?php } ?> id="v-pills-home-tab">
                    <span><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"/></span><abbr><?php echo $row['colour']; ?></abbr>
                </a><?php endforeach; ?>
                <!--<a href="#v-pills-red"data-toggle="pill"aria-controls="v-pills-home"aria-selected="true"role="tab"class="active show nav-link"id="v-pills-home-tab"><span>
            <img src="assets/images/x-blade/pearl-spartan-red.png" title="Honda X Blade | Pearl Spartan Red | Rushabh Honda" alt="Available Pearl Spartan Red Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></span><abbr>Pearl Spartan Red</abbr> </a>
            <a href="#v-pills-silver"data-toggle="pill"aria-controls="v-pills-profile"aria-selected="false"role="tab"class="nav-link"id="v-pills-profile-tab"><span>
            <img src="assets/images/x-blade/pearl-igneous-black.png" title="Honda X Blade | Pearl Igneous Black | Rushabh Honda" alt="Available Pearl Igneous Black Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."> </span><abbr>Pearl Igneous Black</abbr> </a>
            <a href="#v-pills-metallic"data-toggle="pill"aria-controls="v-pills-messages"aria-selected="false"role="tab"class="nav-link"id="v-pills-messages-tab"><span>
            <img src="assets/images/x-blade/Matte-Axis-Grey-Metallic.png" title="Honda X Blade | Matte Axis Grey Metallic | Rushabh Honda" alt="Available Matte Axis Grey Metallic Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."> </span><abbr>Matte AXIS GreY Metallic </abbr></a>
            <a href="#v-pills-blue"data-toggle="pill"aria-controls="v-pills-settings"aria-selected="false"role="tab"class="nav-link"id="v-pills-settings-tab"><span>
            <img src="assets/images/x-blade/matte-marvel-blue-metallic.png"  title="Honda X Blade | Blue Metallic | Rushabh Honda" alt="Available Blue Metallic Honda X Blade at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."> </span><abbr>Matte Marvel Blue Metallic</abbr></a>-->
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>$(document).ready(function(){$("#price1").on("click",function(o){if(""!==this.hash){o.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},800,function(){window.location.hash=t})}})})</script>