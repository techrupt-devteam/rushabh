<main>
<style>
	.about-product p {
		color: #222;
		text-align: justify;
	}
</style>
  <div class="innerpage">
    <div class="main-product-banner">
    	<img src="assets/images/shine-disc-bsvi/home-banner.jpg"class="resposive-img" title="Honda Shine Disc BS6 | Grey | Features | Rushabh Honda" alt="Checkout Black Honda Shine Disc BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!">
     </div>
    <div class="about-product">
        <?php foreach($shine_bs_vi_details as $row);?>
      <div class="row">
        <div class="col-md-6">
          <div class="about-left">
            <h2><?php echo $row['name']; ?></h2>
             <p style="color: #000; text-align: justify;"><?php echo $row['description']; ?></p>
            
            <!--<span>AMAZING COMFORT.</span> <span>AMAZING TECHNOLOGY.</span> <span>AMAZING FEELING.</span>
            <p><strong>Honda</strong> presents the <strong>all-new Shine</strong> with amazing eSP Technology and eco-friendly <strong>BS-VI Engine</strong> that keeps emission in check. Its ACG Starter removes gear meshing noise and helps start the engine without a jolt. And Honda Shine BS6  5-Speed Transmission ensures that your ride is always amazingly smooth.</p>
            <p>Checkout<strong>on-road price, images, features, colours </strong>and more.</p>
            <div class="price"id="price">
              <p class="city">Price for Nashik City</p>
              <table width="100%"cellspacing="0"cellpadding="0"border="0">
                <tbody>
                  <tr>
                    <th>Model</th>
                    <th>Color</th>
                    <th>On Road Price</th>
                  </tr>
                  <tr>
                    <td>SHINE S DRUM BS VI</td>
                    <td>Black</td>
                    <td><strong>86,666</strong></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>GREY</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>REBEL RED METALLIC 2</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>SHINE S DISC BS VI</td>
                    <td>Black</td>
                    <td><strong>91,947</strong></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Blue</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>GREY</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>REBEL RED METALLIC 2</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <p class="notice">* Prices are subject to change without any prior notice.</p>
            </div>-->
          </div>
          
          
        </div>
        <div class="col-md-6 text-center">
        <img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="Honda Shield | Motorbike Engine Oil | Rushabh Honda" alt="Available perfect Honda Shield Motorbike Engine Oil for your Honda Two wheeler at best price exclusively at Rushabh Honda, Nashik. Check for more products!">
        </div>
      </div>
    </div>
    <div class="site-specification">
      <h2>Specifications*</h2>
      <div class="row">
          <?php foreach($body_dimensions as $data); ?>
        <div class="col-md-5"><img src="http://rushabh2w.com/dev/assets/admin/post_image/bikes_scooters/<?php echo $data['image']; ?>" class="resposive-img" title="<?php echo $data['image_title']; ?>" alt="<?php echo $data['image_description']; ?>"></div>
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
                  <!--<li><span>Length</span>2012 mm</li>
                  <li><span>Width</span>762 mm</li>
                  <li><span>Height</span>1090 mm</li>
                  <li><span>Wheel base</span>1266 mm</li>
                  <li><span>Ground clearance</span>157 mm</li>
                  <li><span>Kerb weight</span>123 kg (CBS)</li>
                  <li><span>Fuel tank capacity</span>10.5 L</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-engine"role="tabpanel"aria-labelledby="pills-profile-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Type</span>Air Cooled, 4 Stroke, SI Engine</li>
                  <li><span>Cylinder Capacity</span>124.73 cc</li>
                  <li><span>Max net power</span>
                    <label for="">7.58 kW (10.16 bhp) @ 7500 rpm</label>
                  </li>
                  <li><span>Max net torque</span>
                    <label for="">10.30 Nm @ 5500 rpm</label>
                  </li>
                  <li><span>Bore </span>52.4 mm</li>
                  <li><span>Stroke</span>57.8 mm</li>
                  <li><span>Compression Ratio</span>9.2:1</li>
                  <li><span>Air Filter Type</span>Viscous Paper Filter</li>
                  <li><span>Starting Method</span>Kick/Self</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-transmission"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($transmission as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>No of gears</span>5</li>
                  <li><span>Gear pattern</span>N-1-2-3-4</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-tyres-brakes"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                 <!-- <li><span>Tyre size (front)</span>80/100-18</li>
                  <li><span>Tyre size (Rear)</span>80/100-18</li>
                  <li><span>Tyre type (front)</span>Tubeless</li>
                  <li><span>Tyre type (rear)</span>Tubeless</li>
                  <li><span>Brake type & size (front)</span>Drum 130 mm/Disc 240 mm</li>
                  <li><span>Brake type & size (rear)</span>Drum 130 mm</li>-->
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
                  <li><span>Front</span>Telescopic</li>
                  <li><span>Rear</span>Spring Loaded Hydraulic Type</li>-->
                </ul>
              </div>
            </div>
            <div class="fade tab-pane"id="pills-electricals"role="tabpanel"aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                  <!--<li><span>Battery</span>12V 3Ah (MF)</li>
                  <li><span>Head lamp</span>12V 35/35W</li>-->
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
                    $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=2 order by id asc limit 1")->result();
                    foreach($data_value as $data_value_row);
                 ?>
                <div <?php if($row['id']==$data_value_row->id){ ?> class="fade tab-pane active show text-center" <?php }else{ ?> class="fade tab-pane text-center" <?php } ?> id="v-pills-<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
                <?php endforeach; ?>
                
              <!--<div class="fade tab-pane active show text-center"id="v-pills-red"role="tabpanel"aria-labelledby="v-pills-home-tab">
              	<img src="assets/images/cb-shine1/01-black.png" title="Honda CB Shine | Black | Specification | Rushabh Honda" alt="Checkout Black Honda CB Unicorn specifications, features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
                </div>
              <div class="fade tab-pane text-center"id="v-pills-silver"role="tabpanel"aria-labelledby="v-pills-profile-tab">
              	<img src="assets/images/cb-shine1/02-SunsetBrownMetallic.png" title="Honda Shine BS6 | Brown Metallic | Rushabh Honda" alt="Checkout Brown Metallic Honda Shine BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
              </div>
              <div class="fade tab-pane text-center"id="v-pills-metallic"role="tabpanel"aria-labelledby="v-pills-messages-tab">
              	<img src="assets/images/cb-shine1/03-GenyGreyMetallic.png" title="Honda CB Shine | Grey | About | Rushabh Honda" alt="Checkout Grey Honda CB Unicorn specifications, features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
              </div>
              <div class="fade tab-pane text-center"id="v-pills-redmetallic"role="tabpanel"aria-labelledby="v-pills-messages-tab">
              	<img src="assets/images/cb-shine1/04-ImperialRedMetallic.png" title="Honda CB Shine | Red Metallic | Rushabh Honda" alt="Checkout Red Metallic Honda CB Unicorn specifications, features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
              </div>
              <div class="fade tab-pane text-center"id="v-pills-siren"role="tabpanel"aria-labelledby="v-pills-messages-tab">
              	<img src="assets/images/cb-shine1/05-AthleticBlueMetallic.png" title="Honda CB Shine BS6  | Blue Metallic | Rushabh Honda" alt="Checkout Blue Metallic Honda CB Shine BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!">
              </div>
              <div class="fade tab-pane text-center"id="v-pills-siren1"role="tabpanel"aria-labelledby="v-pills-messages-tab">
              <img src="assets/images/cb-shine1/06-RebelRedMetallic.png" title="Honda Shine Disc BS6 | Rebel Red Metallic | Rushabh Honda" alt="Available Rebel Red Metallic Honda Shine Disc BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. "></div>-->
              
            </div>
          </div>
          <div class="color-section">
            <div class="nav flex-column nav-pills"id="v-pills-tab"role="tablist"aria-orientation="vertical">
                
                <?php foreach($colour as $row): 
                     $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=2 order by id asc limit 1")->result();
                    foreach($data_value as $data_value_row);
                ?>
                <a href="#v-pills-<?php echo $row['id']; ?>" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" <?php if($row['id']==$data_value_row->id){ ?> class="active show nav-link" <?php }else{ ?> class="show nav-link" <?php } ?> id="v-pills-home-tab">
                    <span><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"/></span><abbr><?php echo $row['colour']; ?></abbr>
                </a><?php endforeach; ?>
                
                <!--<a href="#v-pills-red"data-toggle="pill"aria-controls="v-pills-home"aria-selected="true"role="tab"class="active show nav-link"id="v-pills-home-tab"><span>
            <img src="assets/images/cb-shine1/01-black.png" title="Honda CB Shine | Black | Specification | Rushabh Honda" alt="Checkout Black Honda CB Unicorn specifications, features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
            </span><abbr>Black</abbr></a>
            
            <a href="#v-pills-metallic"data-toggle="pill"aria-controls="v-pills-messages"aria-selected="false"role="tab"class="nav-link"id="v-pills-messages-tab"><span>
            <img src="assets/images/cb-shine1/03-GenyGreyMetallic.png" title="Honda CB Shine | Grey | About | Rushabh Honda" alt="Checkout Grey Honda CB Unicorn specifications, features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
            </span><abbr>Geny Grey Metallic</abbr></a> 
            
            <a href="#v-pills-redmetallic"data-toggle="pill"aria-controls="v-pills-messages"aria-selected="false"role="tab"class="nav-link"id="v-pills-messages-tab"><span>
            <img src="assets/images/cb-shine1/04-ImperialRedMetallic.png" title="Honda CB Shine | Red Metallic | Rushabh Honda" alt="Checkout Red Metallic Honda CB Unicorn specifications, features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></span><abbr>Rebel Red Metallic</abbr></a> 
            
            <a href="#v-pills-siren"data-toggle="pill"aria-controls="v-pills-messages"aria-selected="false"role="tab"class="nav-link"id="v-pills-messages-tab"><span>
            <img src="assets/images/cb-shine1/05-AthleticBlueMetallic.png" title="Honda CB Shine BS6  | Blue Metallic | Rushabh Honda" alt="Checkout Blue Metallic Honda CB Shine BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!">
            </span>
            <abbr>Athletic Blue Metallic</abbr></a>-->
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>$(document).ready(function(){$("#price1").on("click",function(o){if(""!==this.hash){o.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},800,function(){window.location.hash=t})}})})</script>