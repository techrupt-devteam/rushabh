<main>
<style>
	.about-product p {
		color: #222;
		text-align: justify;
	}
</style>
  <div class="innerpage">
    <div class="main-product-banner"><img src="assets/images/livo/home-bg-livo.jpg"s class="resposive-img" title="Honda Livo | Blue Metallic | Rushabh Honda" alt="Available Blue Metallic Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
    <div class="about-product">
        <?php foreach($livo_details as $row);?>
      <div class="row">
        <div class="col-md-6">
          <div class="about-left">
            <h2><?php echo $row['name']; ?></h2>
            <p style="color: #000; text-align: justify;"><?php echo $row['description']; ?></p>
            
            <!--<p>Some follow the herd. Some make their own way. Some are part of the crowd. Some stand apart. Presenting, the New Stylish and fully BS6 compliant Honda Livo. It’s time to not settle for the regular, but Live Life Livo Style!</p>
            <p>Checkout <strong>Honda Livo on-road price, images, features, colours</strong> and more.</p>
            We invite you to join Honda Livo's ingenuity and efficiency
            <p></p>
            <div class="price"id="price"style="height:auto">
              <p class="city">Price for Nashik City</p>
              <table width="100%"cellspacing="0"cellpadding="0"border="0">
                <thead>
                  <tr>
                    <th>Model</th>
                    <th>On Road Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>LIVO SELF DRUM (CBF 110 BL 2 ID)</td>
                    <td><strong>Rs. 88,185</strong></td>
                  </tr>
                  <tr>
                    <td>LIVO SELF DISC  (CBF 110 BL 3 ID)</td>
                    <td><strong>Rs. 92,903</strong></td>
                  </tr>
                </tbody>
              </table>
              <p class="notice">* Prices are subject to change without any prior notice.</p>
            </div>-->
            
            
          </div>
        </div>
        <div class="col-md-6 text-center"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
      </div>
    </div>
    <div class="site-specification">
      <h2>Specifications*</h2>
      <div class="row">
          <?php foreach($body_dimensions as $data); ?>
        <div class="col-md-5"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $data['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
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
                <ul class="tab_content">
                    <?php $cnt=0; foreach($body_dimensions as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Length</span>2020 mm</li>
                  <li><span>Width</span>751 mm</li>
                  <li><span>Height</span>1116 mm</li>
                  <li><span>Wheel base</span>1278 mm</li>
                  <li><span>Ground clearance</span>163 mm</li>
                  <li><span>Kerb weight</span>115kg (Drum) / 114 Kg (Disc)</li>
                  <li><span>Seat Length</span>690 mm</li>
                  <li><span>Seat Height</span>790 mm</li>
                  <li><span>Fuel tank capacity</span>9L</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-engine"role="tabpanel"aria-labelledby="pills-profile-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Type</span>Air Cooled, 4 Stroke, SI, BS-VI Engine</li>
                  <li><span>Displacement</span>109.51 cc</li>
                  <li><span>Max net power</span>
                    <label for="">6.47 kW @7500 rpm</label>
                  </li>
                  <li><span>Max net torque</span>
                    <label for="">9.30 N-m @ 5500 rpm</label>
                  </li>
                  <li><span>Fuel System</span>PGM-FI</li>
                  <li><span>Compression Ratio</span>10.1:1</li>
                  <li><span>Air filter type</span>Viscous Paper Filter</li>
                  <li><span>Starting Method</span>Self/Kick</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-transmission"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($transmission as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Clutch Type</span>Multiplate Wet Clutch</li>
                  <li><span>No of Gears</span>4 Gear</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-tyres-brakes"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul>
                    <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Tyre Size (Front)</span>80/100-18 M/C 47P, Tubeless</li>
                  <li><span>Tyre Size (Rear)</span>80/100-18 M/C 54P, Tubeless</li>
                  <li><span>Brake Type & Size (Front)</span>Disc-240 mm, Drum-130 mm</li>
                  <li><span>Brake Type & Size (Rear)</span>Drum-130 mm</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-frame-suspension"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Frame type</span>Diamond</li>
                  <li><span>Front Suspension</span>Telescopic</li>
                  <li><span>Rear Suspension</span>Hydraulic Type</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-electricals"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Battery</span>12V, 5Ah</li>
                  <li><span>Headlamp</span>Halogen Bulb, DC</li>-->
                </ul>
              </div>
            </div>
             <?php if($data['description']){ ?>
                <p class="note">*<?php echo $data['description']; ?></p>
             <?php } ?>
           <!-- <p class="note">^Service more frequently when riding in unusually wet or dusty areas.<br>
              *The specifications and design of the motorcycle shown may vary according to requirements & conditions and are subject to change without any notice. Accessories shown in the picture are not a part of the standard equipment.</p>-->
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
                $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=6 order by id asc limit 1")->result();
                foreach($data_value as $data_value_row);
                ?>
                <div <?php if($row['id']==$data_value_row->id){ ?> class="fade tab-pane active show text-center" <?php }else{ ?> class="fade tab-pane text-center" <?php } ?> id="v-pills-<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
                <?php endforeach; ?>
              <!--<div class="fade tab-pane active show text-center"id="v-pills-red"role="tabpanel"aria-labelledby="v-pills-home-tab">
              <img src="assets/images/livo/athleticbluemetallic.png" class="resposive-img" title="Honda Livo | Blue Metallic | Rushabh Honda" alt="Available Blue Metallic Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. "></div>
              <div class="fade tab-pane text-center"id="v-pills-silver"role="tabpanel"aria-labelledby="v-pills-profile-tab">
              <img src="assets/images/livo/black.png" title="Honda Livo | Black colour | Rushabh Honda" alt="Available Black colour Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
              <div class="fade tab-pane text-center"id="v-pills-metallic"role="tabpanel"aria-labelledby="v-pills-messages-tab">
              <img src="assets/images/livo/imperialredmetallic.png" title="Honda Livo | Red Metallic | Rushabh Honda" alt="Available Imperial Red Metallic Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
              <div class="fade tab-pane text-center"id="v-pills-blue"role="tabpanel"aria-labelledby="v-pills-settings-tab">
              <img src="assets/images/livo/matteaxisgreymetallic.png" title="Honda Livo | Grey Metallic | Rushabh Honda" alt="Available Grey Metallic Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
              <div class="fade tab-pane text-center"id="v-pills-yellow"role="tabpanel"aria-labelledby="v-pills-settings-tab">
              <img src="assets/images/livo/Sunsetbrownmetallic.png" title="Honda Shine BS6 | Brown Metallic | Rushabh Honda" alt="Checkout Brown Metallic Honda Shine BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
              </div>-->
              
              
            </div>
          </div>
          <div class="color-section">
            <div class="nav flex-column nav-pills"id="v-pills-tab"role="tablist"aria-orientation="vertical">
                <?php foreach($colour as $row): 
                 $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=6 order by id asc limit 1")->result();
                foreach($data_value as $data_value_row);
                ?>
                <a href="#v-pills-<?php echo $row['id']; ?>" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" <?php if($row['id']==$data_value_row->id){ ?> class="active show nav-link" <?php }else{ ?> class="show nav-link" <?php } ?> id="v-pills-home-tab">
                    <span><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"/></span><abbr><?php echo $row['colour']; ?></abbr>
                </a><?php endforeach; ?>
                <!--<a href="#v-pills-red"data-toggle="pill"aria-controls="v-pills-home"aria-selected="true"role="tab"class="active show nav-link"id="v-pills-home-tab"><span><img src="assets/images/livo/athleticbluemetallic.png" class="resposive-img" title="Honda Livo | Blue Metallic | Rushabh Honda" alt="Available Blue Metallic Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. "></span><abbr>Athletic Blue Metallic</abbr></a> 
                <a href="#v-pills-silver"data-toggle="pill"aria-controls="v-pills-profile"aria-selected="false"role="tab"class="nav-link"id="v-pills-profile-tab"><span><img src="assets/images/livo/black.png" title="Honda Livo | Black colour | Rushabh Honda" alt="Available Black colour Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></span><abbr>Black</abbr></a> 
                <a href="#v-pills-metallic"data-toggle="pill"aria-controls="v-pills-messages"aria-selected="false"role="tab"class="nav-link"id="v-pills-messages-tab"><span><img src="assets/images/livo/imperialredmetallic.png" title="Honda Livo | Red Metallic | Rushabh Honda" alt="Available Imperial Red Metallic Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></span><abbr>Imperial Red Metallic</abbr></a> 
                <a href="#v-pills-blue"data-toggle="pill"aria-controls="v-pills-settings"aria-selected="false"role="tab"class="nav-link"id="v-pills-settings-tab"><span><img src="assets/images/livo/matteaxisgreymetallic.png" title="Honda Livo | Grey Metallic | Rushabh Honda" alt="Available Grey Metallic Honda Livo at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."> </span><abbr>Matte Axis Gray Metallic</abbr></a>-->
                
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>$(document).ready(function(){$("#price1").on("click",function(o){if(""!==this.hash){o.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},800,function(){window.location.hash=t})}})})</script>