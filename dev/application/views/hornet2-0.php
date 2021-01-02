
<main>
  <div class="innerpage"> 
    <!--Main Banner Section-->
    <div class="main-product-banner"> <img src="assets/images/hornet2-0/home-bg.jpg"s class="resposive-img"> </div>
    <!--Main Banner Section--> 
    <!--Site About Section-->
    <div class="about-product">
         <?php foreach($hotnet2_details as $row);?>
      <div class="row">
        <div class="col-md-6">
          <div class="about-left">
            <h2><?php echo $row['name']; ?></h2>
            <p style="color: #000; text-align: justify;"><?php echo $row['description']; ?></p>
            
            <!--<p>There are many people who just like to go with the flow. They drift with the wind. And then, there are some people who like just the opposite. They like to explore the upside-down, they want to test the rules of Physics for themselves. They like to race ahead and challenge the wind. 
</p>
<p>The all-new Honda Hornet 2.0 is all about letting people live their dream. The fierce machine keeps you ahead of others. It is a manifestation of style, safety and power. It turns heads and converts the road into a steady blur in seconds. It’s pure exhilaration at a flick of your wrist. </p>
Go ahead, fly against the wind.

<div class="price" id="price" style="height: auto;">
<p class="city">Price for Nashik City </p>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <th>Model</th>
    <th>Color</th>
    <th>On Road Price</th>
  </tr>
  <tr>
    <td>Honda Hornet 2.0</td>
      <td>-</td>
    <td><strong>1,54,573/-</strong></td>
  </tr>
  <tr>
    <td></td>
      <td> Matte Axis Grey Metallic</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
      <td>Matte Marvel Blue Metallic</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
      <td>Matte Sangria Red Metallic</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
      <td>Pearl Igneous Black</td>
    <td>&nbsp;</td>
  </tr>
  
   
</tbody></table>
<p class="notice">* Prices are subject to change without any prior notice.</p>
</div>
-->
          </div>
        </div>
        <div class="col-md-6 text-center"> <img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>"  title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>" class="resposive-img"></div>
      </div>
    </div>
    <!--Site About Section--> 
    <!--Specification-->
    <div class="site-specification">
      <h2>Specifications*</h2>
      <div class="row">
          <?php foreach($body_dimensions as $data); ?>
        <div class="col-md-5"> <img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $data['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"> </div>
        <div class="col-md-7">
          <ul class="nav nav-pills mb-3 specification-tabs" id="pills-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-body" role="tab" aria-controls="pills-home" aria-selected="true">Body Dimensions</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-engine" role="tab" aria-controls="pills-profile" aria-selected="false">Engine</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-transmission" role="tab" aria-controls="pills-contact" aria-selected="false">Transmission</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-tyres-brakes" role="tab" aria-controls="pills-contact" aria-selected="false">Tyres & brakes</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-frame-suspension" role="tab" aria-controls="pills-contact" aria-selected="false">Frame & Suspension</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-electricals" role="tab" aria-controls="pills-contact" aria-selected="false">Electricals</a> </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-body" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($body_dimensions as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                       <!--<li><span>Length</span>2047 mm</li>
                        <li><span>Width</span>783 mm</li>
                        <li><span>Height</span>1064 mm</li>
                        <li><span>Wheel Base</span>1355 mm</li>
                        <li><span>Ground Clearance</span>167 mm</li>
                        <li><span>Kerb Weight</span>142 Kg</li>
                        <li><span>Seat Length</span>590 mm</li>
                        <li><span>Fuel Tank Capacity</span>12 L</li>-->
                    </ul>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="body-dimension">
              <ul class="tab_content">
                   <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                        <!--<li><span>Type</span>4 Stroke, SI Engine, BS-VI</li>
                        <li><span>Displacement</span>184.40 cc</li>
                        <li><span>Max Net Power</span><label for="">12.7 kW @ 8500 rpm</label></li>
                        <li><span>Max Net Torque</span><label for="">16.1 N-m @ 6000 rpm </label></li>
                        <li><span>Bore</span>61.0 mm</li>
                        <li><span>Stroke</span>63.09 mm</li>
                        <li><span>Fuel System</span>PGM-FI</li>
                        <li><span>Compression Ratio</span>9.5:1</li>
                        <li><span>Air Filter Type</span>Viscous Air Filter^</li>
                        <li><span>Starting Method</span>Self Start</li>-->
                    </ul>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            <div class="tab-pane fade" id="pills-tyres-brakes" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content" style="right: 0px;">
                     <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                        <!--<h2>Tyres &amp; brakes</h2>-->
                        <!--<li><span>Tyre Size (Front)</span>110/70-17 M/C 54S (Tubeless)</li>
                        <li><span>Tyre Size (Rear)</span>140/70- 17 M/C 66S (Tubeless)</li>
                        <li><span>Brake Type & Size (Front)</span>Disc - 276 mm (1 Channel ABS)</li>
                        <li><span>Brake Type & Size (Rear)</span>Disc - 220 mm</li>-->
                    </ul>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-frame-suspension" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content" >
                    <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                        <!--<li><span>Frame Type</span>Diamond Type</li>
                        <li><span>Front </span>Upside down Fork (USD)</li>
                        <li><span>Rear </span>Monoshock</li>-->
                    </ul>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-electricals" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="body-dimension">
                <ul class="tab_content">
                    <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                    <?php endforeach; ?>
                    <!--<li><span>Battery</span>12V, 5.0 Ah</li>
                    <li><span>Head Lamp</span>LED</li>
                    <li><span>Tail lamp</span>LED</li>
                    <li><span>Winkers</span>LED</li>-->
               </ul>
              </div>
            </div>
            <?php if($data['description']){ ?>
                <p class="note">*<?php echo $data['description']; ?></p>
             <?php } ?>
            <!--<p class="note">*Own the street with the forward-leaning design and the bulky tank. They are a true expression of dominance and aggression. </p>-->
          </div>
        </div>
      </div>
    </div>
    <!--Color-->
    <div class="bike-color">
      <h2>Available  Color</h2>
      <div class="bd-example bd-example-tabs">
        <div class="row">
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <?php foreach($colour as $row): 
                $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=7 order by id asc limit 1")->result();
                foreach($data_value as $data_value_row);
                ?>
                <div <?php if($row['id']==$data_value_row->id){ ?> class="fade tab-pane active show text-center" <?php }else{ ?> class="fade tab-pane text-center" <?php } ?> id="v-pills-<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
                <?php endforeach; ?>
             <!-- <div class="tab-pane fade active show text-center" id="v-pills-red" role="tabpanel" aria-labelledby="v-pills-home-tab">
              	<img src="assets/images/hornet2-0/MatTE-Axis-Grey-Metallic.png" title="Hornet on road price in Nashik | Grey | Rushabh Honda" alt="Checkout Grey Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
              </div>
              <div class="tab-pane fade text-center" id="v-pills-silver" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              	<img src="assets/images/hornet2-0/MatTE-Marvel-Blue-Metallic.png" title="Hornet on road price in Nashik | Blue | Rushabh Honda" alt="Checkout Blue Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
              </div>
              <div class="tab-pane fade text-center" id="v-pills-metallic" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              	<img src="assets/images/hornet2-0/MatTE-Sangria-Red-Metallic.png" title="Hornet on road price in Nashik | Red | Rushabh Honda" alt="Checkout Red Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
              </div>
              <div class="tab-pane fade text-center" id="v-pills-metallic-black" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              	<img src="assets/images/hornet2-0/Pearl-Igneous-Black.png" title="Hornet on road price in Nashik | Black | Rushabh Honda" alt="Checkout Black Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
              </div>-->
             
            </div>
          </div>
          <div class="color-section">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php foreach($colour as $row): 
                 $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=7 order by id asc limit 1")->result();
                foreach($data_value as $data_value_row);
                ?>
                <a href="#v-pills-<?php echo $row['id']; ?>" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" <?php if($row['id']==$data_value_row->id){ ?> class="active show nav-link" <?php }else{ ?> class="show nav-link" <?php } ?> id="v-pills-home-tab">
                    <span><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"/></span><abbr><?php echo $row['colour']; ?></abbr>
                </a><?php endforeach; ?>
             <!--<a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-red" role="tab" aria-controls="v-pills-home" aria-selected="true">
             	<span>
                	<img src="assets/images/hornet2-0/MatTE-Axis-Grey-Metallic.jpg" title="Hornet on road price in Nashik | Grey | Rushabh Honda" alt="Checkout Grey Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
                </span>
                <abbr>Matte Axis Grey Metallic</abbr>
             </a>
             <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-silver" role="tab" aria-controls="v-pills-profile" aria-selected="false">
             	<span>
             		<img src="assets/images/hornet2-0/MatTE-Marvel-Blue-Metallic.jpg" title="Hornet on road price in Nashik | Blue | Rushabh Honda" alt="Checkout Blue Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
                </span>
                <abbr>Matte Marvel Blue Metallic</abbr>
             </a>
             <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-metallic" role="tab" aria-controls="v-pills-messages" aria-selected="false">
             	<span>
              		<img src="assets/images/hornet2-0/MatTE-Sangria-Red-Metallic.jpg" title="Hornet on road price in Nashik | Red | Rushabh Honda" alt="Checkout Red Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
              	</span><abbr>Matte Sangria Red Metallic</abbr>
             </a>
             	<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-metallic-black" role="tab" aria-controls="v-pills-messages" aria-selected="false">
             		<span>
                    	<img src="assets/images/hornet2-0/Pearl-Igneous-Black.jpg"  title="Hornet on road price in Nashik | Black | Rushabh Honda" alt="Checkout Black Honda Hornet 2.0 specifications, price, and more easily online. Available Honda Two wheeler at reasonable prices exclusively at Rushabh Honda.">
                    </span>
                    <abbr>Pearl Igneous Black</abbr>
                </a>-->
                
                
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
