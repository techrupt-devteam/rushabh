<main>
<style>
	.about-product p {
		color: #222;
		text-align: justify;
	}
</style>
  <div class="innerpage">
    <div class="main-product-banner">
    	<img src="assets/images/activa6g/banner.jpg"s class="resposive-img" title="Honda Activa 6G | Blue | Rushabh Honda" alt="Checkout Blue Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
    </div>
    <div class="about-product">
            <?php foreach($activa6g_details as $row);?>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-left">
                        <h2><?php echo $row['name']; ?></h2>
                        <p style="color: #000; text-align: justify;"><?php echo $row['description']; ?></p>
                        
                        <!--<p>For about two decades, Activa has been changing the game in Indian scootering. With the latest technological innovation, Honda Activa 6G changes the world of scootering all over again with its amazing mileage. It is equipped with the new eSP technology along with incredible new features like the revolutionary silent start, telescopic suspension, double lid external fuel fill, 12 inch front wheel and 10%^ more mileage. In short, with the all new Activa 6G and its BS-VI engine, Honda scores a magnificient, game changing 6!</p>
                        <p>Checkout<strong>on-road price, images, features, colours </strong>and more.</p>
                       
                        <div class="price col-md-12" id="price">
                            <table width="100%"cellspacing="0"cellpadding="0"border="0">
              <tr>
                <th>Model</th>
                <th>Color</th>
                <th>On Road Price.</th>
              </tr>
              <tr>
                <td>ACTIVA 6G BS VI ( SCV 110 L ID)</td>
                <td>DAZZLE YELLOW METALL</td>
                <td><strong>Rs. 83,329</strong></td>
              </tr>
              <tr>
                <td></td>
                <td>Black</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>DAZZLE YELLOW METALL</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>DECENT BLUE METALLIC</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>Gray Metallic</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>PEARL PRECIOUS WHITE</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>PEARL SPARTAN RED 2</td>
                <td></td>
              </tr>
              <tr>
                <td>ACTIVA 6G (DLX) BS VI</td>
                <td>Black</td>
                <td><strong>Rs. 85,014</strong></td>
              </tr>
              <tr>
                <td></td>
                <td>Blue</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>DAZZLE YELLOW METALL</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>DECENT BLUE METALLIC</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>Gray Metallic</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>MAT AXIS GRAY METALL</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>PEARL PRECIOUS WHITE</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>PEARL SPARTAN RED 2</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>RED</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>WHITE</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>YELLOW</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>Black</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>DAZZLE YELLOW METALL</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>DECENT BLUE METALLIC</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>Gray Metallic</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>PEARL PRECIOUS WHITE</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>PEARL SPARTAN RED 2</td>
                <td></td>
              </tr>
            </table>
                            <p class="notice">* Prices are subject to change without any prior notice.</p>
                        </div> -->
                    </div>
                </div>
              
                <div class="col-md-6 text-center"> <img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>" class="resposive-img"   /></div>
            </div>
        </div>
  <div class="site-specification">
    <h2>Specifications*</h2>
    <div class="row">
        <?php foreach($body_dimensions as $data); ?>
      <div class="col-md-5"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $data['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>" class="resposive-img" /></div>
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
                <!--<li><span class="full text1">Body Dimensions</span></li>
                <li><span>Length</span><span>1833 mm</span></li>
                <li><span>Width</span><span>697 mm</span></li>
                <li><span>Height</span><span>1156 mm</span></li>
                <li><span>Wheel Base</span><span>1260 mm</span></li>
                <li><span>Ground Clearance</span><span>171 mm (Best in Segment)</span></li>
                <li><span>Seat Length</span><span>692 mm</span></li>
                <li><span>Kerb Weight</span><span>107 kg</span></li>
                <li><span>Fuel Tank capacity</span><span>5.3 L</span></li>-->
              </ul>
            </div>
          </div>
          <div class="fade tab-pane"id="pills-engine"role="tabpanel"aria-labelledby="pills-profile-tab">
            <div class="body-dimension">
              <ul class="tab_content">
                <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                <?php endforeach; ?>
                <!--<li><span class="full text1">Engine</span></li>
                <li><span>Type</span><span>Fan Cooled, 4 Stroke, SI Engine</span></li>
                <li><span>Displacement</span><span>109.51 cc</span></li>
                <li><span>Max Net Power</span><span>5.73kW @ 8000 rpm</span></li>
                <li><span>Max Net Torque</span><span>8.79 Nm @ 5250 rpm</span></li>
                <li><span>Bore</span><span>47.0 mm</span></li>
                <li><span>Stroke</span><span>63.1 mm</span></li>
                <li><span>Fuel System</span><span>PGM-FI</span></li>
                <li><span>Compression Ratio</span><span>10.0±0.2</span></li>
                <li><span>Air Filter Type</span><span>Viscous Paper Filter</span></li>
                <li><span>Starting Method</span><span>Kick/Self E</span></li>-->
                
              </ul>
            </div>
          </div>
          <div class="fade tab-pane"id="pills-transmission"role="tabpanel"aria-labelledby="pills-contact-tab">
            <div class="body-dimension">
              <ul class="tab_content">
                <?php $cnt=0; foreach($transmission as $row): $cnt++; ?>
                <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                <?php endforeach; ?>
                <!--<li><span class="full text1">Transmission</span></li>
                <li><span>Clutch Type</span><span>Automatic</span></li>-->
              </ul>
            </div>
          </div>
          <div class="fade tab-pane"id="pills-tyres-brakes"role="tabpanel"aria-labelledby="pills-contact-tab">
            <div class="body-dimension">
              <ul class="tab_content">
                <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                <?php endforeach; ?>
                <!--<li><span class="full text1">Tyres & Brakes</span></li>
                <li><span>Tyre Size (Front) </span><span>90/90-12 54J</span></li>
                <li><span>Tyre Size (Rear) </span><span>90/100-10 53J</span></li>
                <li><span>Tyre Type (Front) </span><span>Tubeless</span></li>
                <li><span>Tyre Type (Rear) </span><span>Tubeless</span></li>
                <li><span>Brake Type & Size (Front)</span><span>Drum-130 mm</span></li>
                <li><span>Brake Type & Size (Rear)</span><span>Drum-130 mm</span></li>-->
              </ul>
            </div>
          </div>
          <div class="fade tab-pane"id="pills-frame-suspension"role="tabpanel"aria-labelledby="pills-contact-tab">
            <div class="body-dimension">
              <ul class="tab_content">
                <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                <?php endforeach; ?>
               <!-- <li><span class="full text1">Frame & Suspension</span></li>
                <li><span>Frame Type</span><span>Under Bone</span></li>
                <li><span>Front</span><span>Telescopic</span></li>
                <li><span>Rear</span><span>3-Step Adjustable Spring Loaded Hydraulic</span></li>-->
              </ul>
            </div>
          </div>
          <div class="fade tab-pane"id="pills-electricals"role="tabpanel"aria-labelledby="pills-contact-tab">
            <div class="body-dimension">
              <ul class="tab_content">
                <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                <?php endforeach; ?>
                <!--<li><span class="full text1">Electricals</span></li>
                <li><span>Battery</span><span>3.0 Ah</span></li>
                <li><span>Head Lamp</span><span>LED</span></li>-->
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
            $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=9 order by id asc limit 1")->result();
            foreach($data_value as $data_value_row);
            ?>
            <div <?php if($row['id']==$data_value_row->id){ ?> class="fade tab-pane active show text-center" <?php }else{ ?> class="fade tab-pane text-center" <?php } ?> id="v-pills-<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
            <?php endforeach; ?>
            
           <!-- <div class="fade tab-pane active show text-center"id="v-pills-red"role="tabpanel"aria-labelledby="v-pills-home-tab">
            	<img src="assets/images/activa6g/01Blue.png" title="Honda Activa 6G | Glitter Blue Metallic | Rushabh Honda" alt="Checkout Glitter Blue Metallic Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
             </div>
            <div class="fade tab-pane text-center"id="v-pills-silver"role="tabpanel"aria-labelledby="v-pills-profile-tab">
            	<img src="assets/images/activa6g/02-red.png" title="Honda Activa 6G | Pearl Spartan Red | Rushabh Honda" alt="Checkout Pearl Spartan Red Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!">
             </div>
            <div class="fade tab-pane text-center"id="v-pills-metallic"role="tabpanel"aria-labelledby="v-pills-messages-tab">
            	<img src="assets/images/activa6g/03-Yellow.png" title="Honda Activa 6G | Pearl Spartan Red | Rushabh Honda" alt="Checkout Pearl Spartan Red Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!">
             </div>
            <div class="fade tab-pane text-center"id="v-pills-blue"role="tabpanel"aria-labelledby="v-pills-settings-tab">
            	<img src="assets/images/activa6g/04-Black.png" title="Honda Activa 6G | Black | Rushabh Honda" alt="Checkout Black Metallic Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
            </div>
            <div class="fade tab-pane text-center"id="v-pills-yellow"role="tabpanel"aria-labelledby="v-pills-settings-tab">
            	<img src="assets/images/activa6g/05-white.png" title="Honda Activa 6G | White | Rushabh Honda" alt="Checkout white Metallic Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
             </div>
            <div class="fade tab-pane text-center"id="v-pills-yellow1"role="tabpanel"aria-labelledby="v-pills-settings-tab">
            	<img src="assets/images/activa6g/06-Grey.png" title="Honda Activa 6G | Grey | Rushabh Honda" alt="Checkout Matte Grey Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.">
            </div>-->
            
            
          </div>
        </div>
        <div class="color-section">
          <div class="nav flex-column nav-pills"id="v-pills-tab"role="tablist"aria-orientation="vertical">
             <?php foreach($colour as $row): 
             $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=9 order by id asc limit 1")->result();
            foreach($data_value as $data_value_row);
            ?>
            <a href="#v-pills-<?php echo $row['id']; ?>" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" <?php if($row['id']==$data_value_row->id){ ?> class="active show nav-link" <?php }else{ ?> class="show nav-link" <?php } ?> id="v-pills-home-tab">
                <span><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"/></span><abbr><?php echo $row['colour']; ?></abbr>
            </a><?php endforeach; ?>
           <!--<a href="#v-pills-red"data-toggle="pill"aria-controls="v-pills-home"aria-selected="true"role="tab"class="active show nav-link"id="v-pills-home-tab"><span>
          <img src="assets/images/activa6g/01Blue.png" title="Honda Activa 6G | Glitter Blue Metallic | Rushabh Honda" alt="Checkout Glitter Blue Metallic Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></span><abbr>Glitter Blue Metallic</abbr></a> 
          <a href="#v-pills-silver"data-toggle="pill"aria-controls="v-pills-profile"aria-selected="false"role="tab"class="nav-link"id="v-pills-profile-tab"><span>
          <img src="assets/images/activa6g/02-red.png" title="Honda Activa 6G | Pearl Spartan Red | Rushabh Honda" alt="Checkout Pearl Spartan Red Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!"></span><abbr>Pearl Spartan Red</abbr></a> 
          <a href="#v-pills-metallic"data-toggle="pill"aria-controls="v-pills-messages"aria-selected="false"role="tab"class="nav-link"id="v-pills-messages-tab"><span>
          <img src="assets/images/activa6g/03-Yellow.png" title="Honda Activa 6G | Pearl Spartan Red | Rushabh Honda" alt="Checkout Pearl Spartan Red Honda Activa 6G at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years. Click for more!"></span><abbr>Dazzle Yellow Metallic</abbr></a> 
          <a href="#v-pills-blue"data-toggle="pill"aria-controls="v-pills-settings"aria-selected="false"role="tab"class="nav-link"id="v-pills-settings-tab"><span>
          <img src="assets/images/activa6g/04-Black.png" title="Honda Activa 6G | Black | Rushabh Honda" alt="Checkout Black Metallic Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."> </span><abbr>Black</abbr></a> 
          <a href="#v-pills-yellow"data-toggle="pill"aria-controls="v-pills-settings"aria-selected="false"role="tab"class="nav-link"id="v-pills-settings-tab"><span>
          <img src="assets/images/activa6g/05-white.png" title="Honda Activa 6G | White | Rushabh Honda" alt="Checkout white Metallic Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."> </span><abbr>Pearl Precious White</abbr></a> <a href="#v-pills-yellow1"data-toggle="pill"aria-controls="v-pills-settings"aria-selected="false"role="tab"class="nav-link"id="v-pills-settings-tab"><span>
          <img src="assets/images/activa6g/06-Grey.png"  title="Honda Activa 6G | Grey | Rushabh Honda" alt="Checkout Matte Grey Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."> 
          </span><abbr>Matte Axis Grey Metallic</abbr></a>-->
          
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
