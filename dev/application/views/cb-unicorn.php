<main>
<style>
	.about-product p {
		color: #222;
		text-align: justify;
	}
</style>
  <div class="innerpage">
    <div class="main-product-banner">
    <img src="assets/images/unicorn/main-bannner.jpg"class="resposive-img" title="Honda CB Unicorn | Black | Rushabh Honda" alt="Checkout Black Honda CB Unicorn features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!">
    </div>
    <div class="about-product">
          <?php foreach($cbunicorn_details as $row);?>
      <div class="row">
        <div class="col-md-6">
          <div class="about-left">
            <h2><?php echo $row['name']; ?></h2>
            <p style="color: #000; text-align: justify;"><?php echo $row['description']; ?></p>
            
            <!--<p><strong>Honda</strong> takes forward its philosophy to the next level with the <strong>CB Unicorn</strong> that prides itself with the perfect blend of quality, comfort and class. <strong>Honda Unicorn Abs BS6</strong> is by far the most sophisticated motorcycle in its category-in looks and in robustness. It is yet another creation of the renowned Honda technology.</p>
            <p>Checkout <strong>on-road price, images, features, colours </strong>and more.</p>
            <div class="price"id="price"style="height:auto">
              <p class="city">Price for Nashik City</p>
              <table border="0"cellpadding="0"cellspacing="0"width="100%">
                <tbody>
                  <tr>
                    <th>Model</th>
                    <th>Color</th>
                    <th>On Road Price</th>
                  </tr>
                  <tr>
                    <td>UNICORN ABS-BSVI</td>
                    <td>I RED-M</td>
                    <td><strong>1,18,857</strong></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>P BLACK</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <p class="notice">* Prices are subject to change without any prior notice.</p>
            </div>-->
            
            
          </div>
        </div>
        <div class="text-center col-md-6"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
      </div>
    </div>
    <div class="site-specification">
      <h2>Specifications*</h2>
      <div class="row">
          <?php foreach($body_dimensions as $data); ?>
        <div class="col-md-5">
        	<img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $data['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
        <div class="col-md-7">
          <ul class="nav nav-pills mb-3 specification-tabs"id="pills-tab"role="tablist">
            <li class="nav-item"><a aria-controls="pills-home"aria-selected="true"class="nav-link active"data-toggle="pill"href="#pills-body"id="pills-home-tab"role="tab">Body Dimensions</a></li>
            <li class="nav-item"><a aria-controls="pills-profile"aria-selected="false"class="nav-link"data-toggle="pill"href="#pills-engine"id="pills-profile-tab"role="tab">Engine</a></li>
            <li class="nav-item"><a aria-controls="pills-contact"aria-selected="false"class="nav-link"data-toggle="pill"href="#pills-transmission"id="pills-contact-tab"role="tab">Transmission</a></li>
            <li class="nav-item"><a aria-controls="pills-contact"aria-selected="false"class="nav-link"data-toggle="pill"href="#pills-tyres-brakes"id="pills-contact-tab"role="tab">Tyres & brakes</a></li>
            <li class="nav-item"><a aria-controls="pills-contact"aria-selected="false"class="nav-link"data-toggle="pill"href="#pills-frame-suspension"id="pills-contact-tab"role="tab">Frame & Suspension</a></li>
            <li class="nav-item"><a aria-controls="pills-contact"aria-selected="false"class="nav-link"data-toggle="pill"href="#pills-electricals"id="pills-contact-tab"role="tab">Electricals</a></li>
          </ul>
          <div class="tab-content"id="pills-tabContent">
            <div class="fade tab-pane active show"id="pills-body"role="tabpanel"aria-labelledby="pills-home-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    
                    <?php $cnt=0; foreach($body_dimensions as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Length</span>2081 mm</li>
                  <li><span>Width</span>756 mm</li>
                  <li><span>Height</span>1103 mm</li>
                  <li><span>Wheel Base</span>1335 mm</li>
                  <li><span>Ground Clearance</span>187 mm</li>
                  <li><span>Kerb Weight</span>140 kg</li>
                  <li><span>Seat Length</span>715 mm</li>
                  <li><span>Seat Height</span>798 mm</li>
                  <li><span>Fuel Tank Capacity</span>13 L</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-engine"role="tabpanel"aria-labelledby="pills-profile-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                 <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                <?php endforeach; ?> 
                  <!--<li><span>Type</span>4 Stroke, SI, BS-VI Engine</li>
                  <li><span>Displacement</span>162.7 cc</li>
                  <li><span>Max Engine Output</span>
                    <label for="">9.5 Kw @7500 rpm</label>
                  </li>
                  <li><span>Max Torque</span>
                    <label for="">14 N-m @ 5500 rpm</label>
                  </li>
                  <li><span>Fuel System</span>PGM- FI</li>
                  <li><span>Bore X Stroke</span> 57.3 X 63.1 mm</li>
                  <li><span>Compression Ratio</span>10±0.2</li>
                  <li><span>Air Filter Type</span>Viscous Air Filter^</li>
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
                  <li><span>No of Gears</span>5</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-tyres-brakes"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content"style="right:0">
                  <h2>Tyres & brakes</h2>
                  <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                <?php endforeach; ?>
                 <!-- <li><span>Tyre Size & Type (Front)</span> 80/100-18 M/C 47P, Tubeless</li>
                  <li><span>Tyre Size & Type (Rear) </span> 100/90-18 M/C 56P, Tubeless</li>
                  <li><span>Brake Type & Size (Front) </span>Disc - 240 mm</li>
                  <li><span>Brake Type & Size (Rear) </span>Drum - 130 mm</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-frame-suspension"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Frame Type</span>Diamond Type</li>
                  <li><span>Front Suspension</span>Telescopic</li>
                  <li><span>Rear Suspension</span>Hydraulic Type (Monoshock)</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-electricals"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Battery</span>12V, 4Ah</li>
                  <li><span>Head Lamp</span>Halogen Bulb</li>-->
                </ul>
              </div>
            </div>
            <?php if($data['description']){ ?>
                <p class="note">*<?php echo $data['description']; ?></p>
            <?php } ?>
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
                    $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=3 order by id asc limit 1")->result();
                    foreach($data_value as $data_value_row);
                 ?>
                <div <?php if($row['id']==$data_value_row->id){ ?> class="fade tab-pane active show text-center" <?php }else{ ?> class="fade tab-pane text-center" <?php } ?> id="v-pills-<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
                <?php endforeach; ?>
                
              <!--<div class="fade tab-pane text-center active show"id="v-pills-red"role="tabpanel"aria-labelledby="v-pills-home-tab">
              <img src="assets/images/unicorn/Pearl-Igneous-Black.png" title="Honda CB Unicorn | Pearl Igneous Black | Rushabh Honda" alt="Available Pearl Igneous Black Honda CB Unicorn at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. ">
              </div>
              <div class="fade tab-pane text-center"id="v-pills-silver"role="tabpanel"aria-labelledby="v-pills-profile-tab">
              <img src="assets/images/unicorn/Red.png" title="Honda CB Unicorn | Red Colour | Rushabh Honda" alt="Available Red Honda CB Unicorn at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more info!">
              </div>
              <div class="fade tab-pane text-center"id="v-pills-metallic"role="tabpanel"aria-labelledby="v-pills-messages-tab">
              <img src="assets/images/unicorn/Geny-Grey-Metallic.png">
              </div>-->
              
              
            </div>
          </div>
          <div class="color-section">
            <div class="nav nav-pills flex-column"id="v-pills-tab"role="tablist"aria-orientation="vertical">
                 <?php foreach($colour as $row): 
                     $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=3 order by id asc limit 1")->result();
                    foreach($data_value as $data_value_row);
                ?>
                <a href="#v-pills-<?php echo $row['id']; ?>" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" <?php if($row['id']==$data_value_row->id){ ?> class="active show nav-link" <?php }else{ ?> class="show nav-link" <?php } ?> id="v-pills-home-tab">
                    <span><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"/></span><abbr><?php echo $row['colour']; ?></abbr>
                </a><?php endforeach; ?>
                <!--<a aria-controls="v-pills-home"aria-selected="true"class="nav-link active show"data-toggle="pill"href="#v-pills-red"id="v-pills-home-tab"role="tab"><span>
            <img src="assets/images/unicorn/Pearl-Igneous-Black.png" title="Honda CB Unicorn | Pearl Igneous Black | Rushabh Honda" alt="Available Pearl Igneous Black Honda CB Unicorn at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
            </span><abbr>Pearl Igneous Black</abbr></a> 
            
            <a aria-controls="v-pills-profile"aria-selected="false"class="nav-link"data-toggle="pill"href="#v-pills-silver"id="v-pills-profile-tab"role="tab"><span>
            <img src="assets/images/unicorn/Red.png" title="Honda CB Unicorn | Red Colour | Rushabh Honda" alt="Available Red Honda CB Unicorn at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more info!">
            </span><abbr>Red</abbr></a> 
            
            <a aria-controls="v-pills-messages"aria-selected="false"class="nav-link"data-toggle="pill"href="#v-pills-metallic"id="v-pills-messages-tab"role="tab"><span>
            <img src="assets/images/unicorn/Geny-Grey-Metallic.png" title="Honda CB Unicorn | Grey Metallic | Rushabh Honda" alt="Checkout Grey Metallic Honda CB Unicorn features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!">
            </span><abbr>Geny Gray Metallic</abbr></a>-->
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>$(document).ready(function(){$("#price1").on("click",function(o){if(""!==this.hash){o.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},800,function(){window.location.hash=t})}})})</script>