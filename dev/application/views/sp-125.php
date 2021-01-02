<main>
    <div class="innerpage">
        <div class="main-product-banner"><img src="assets/images/sp-125bs-vi/sp-125bs-vi-landingBanner.jpg" title="Honda SP 125 BS6 | Specification | Rushabh Honda" alt="Checkout Metallic Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years." class="resposive-img" /></div>
        <div class="about-product">
            <?php foreach($sp125_details as $row);?>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-left">
                        <h2><?php echo $row['name']; ?></h2>
                        <p style="color: #000; text-align: justify;"><?php echo $row['description']; ?></p>

                        <!-- <h2>SP 125</h2>
                        <h4>it's time to be advanced</h4>
                        <p>
                            Experience thrilling performance and advanced technology come together in the SP 125. It comes with Honda’s globally acclaimed Enhanced Smart Power (eSP) technology with an eco-friendly, BS-VI engine in a dynamic
                            personality that makes for an equally smart and stylish ride. So, get ready to make a serious, attitude-packed style statement with a bike that’s strictly for the advanced.
                        </p>
                         <h4>a quiet revolution</h4>
                        <div class="price col-md-12" id="price">
                            <p class="city">Price for Nashik City</p>
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                        <th>Model</th>
                                        <th>Color</th>
                                        <th style="width: 129px;">On Road Price</th>
                                    </tr>
                                    <tr>
                                        <td>NEW SP125 DISC CBS-BSVI</td>
                                        <td>Gray Metallic</td>
                                        <td><strong>90876</strong></td>
                                    </tr>
                                    <tr>
                                        <td>NEW SP125 DRUM CBS-BSVI</td>
                                        <td>Gray Metallic</td>
                                        <td><strong>90876</strong></td>
                                    </tr>
                                    <tr>
                                        <td>SP125 DISC CBS-BSVI</td>
                                        <td>I RED-M</td>
                                        <td><strong>90876</strong></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>P S BLUE</td>
                                        <td><strong>90876</strong></td>
                                    </tr>
                                    <tr>
                                        <td>SP125 DRUM CBS-BSVI</td>
                                        <td>BLACK GREEN</td>
                                        <td><strong>89571</strong></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>I RED-M</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>P S BLUE</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="notice">* Prices are subject to change without any prior notice.</p>
                        </div>  -->
                    </div>
                </div>
               <!--title="Honda SP 125 BS6 | Grey | Specification | Rushabh Honda"
               alt="Checkout Grey Metallic Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."-->
              
                <div class="col-md-6 text-center"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>" class="resposive-img"   /></div>
            </div>
        </div>
        <div class="site-specification">
            <h2>Specifications*</h2>
            <div class="row">
                 <?php foreach($body_dimensions as $data); ?>
                <div class="col-md-5"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $data['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>" class="resposive-img" /></div>
                <div class="col-md-7">
                    <ul class="nav nav-pills mb-3 specification-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item"><a href="#pills-body" data-toggle="pill" aria-controls="pills-home" aria-selected="true" role="tab" class="active nav-link" id="pills-home-tab">Body Dimensions</a></li>
                        <li class="nav-item"><a href="#pills-engine" data-toggle="pill" aria-controls="pills-profile" aria-selected="false" role="tab" class="nav-link" id="pills-profile-tab">Engine</a></li>
                        <li class="nav-item"><a href="#pills-transmission" data-toggle="pill" aria-controls="pills-contact" aria-selected="false" role="tab" class="nav-link" id="pills-contact-tab">Transmission</a></li>
                        <li class="nav-item"><a href="#pills-tyres-brakes" data-toggle="pill" aria-controls="pills-contact" aria-selected="false" role="tab" class="nav-link" id="pills-contact-tab">Tyres & brakes</a></li>
                        <li class="nav-item"><a href="#pills-frame-suspension" data-toggle="pill" aria-controls="pills-contact" aria-selected="false" role="tab" class="nav-link" id="pills-contact-tab">Frame & Suspension</a></li>
                        <li class="nav-item"><a href="#pills-electricals" data-toggle="pill" aria-controls="pills-contact" aria-selected="false" role="tab" class="nav-link" id="pills-contact-tab">Electricals</a></li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="fade tab-pane active show" id="pills-body" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="body-dimension">
                                <ul>
                                   <?php $cnt=0; foreach($body_dimensions as $row): $cnt++; ?>
                                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                                    <?php endforeach; ?>
                                    <!-- <li><span>Length</span>2020 mm</li>
                                    <li><span>Width</span>785 mm</li>
                                    <li><span>Height</span>1103 mm</li>
                                    <li><span>Wheel Base</span>1285 mm</li>
                                    <li><span>Ground Clearance</span>160 mm</li>
                                    <li><span>Kerb weight</span>Disc 118 kg, Drum 117 kg</li>
                                    <li><span>Seat Length</span>705 mm</li>
                                    <li><span>Seat Height</span>790 mm</li>
                                    <li><span>Fuel tank capacity</span>11 L</li>  -->
                                </ul>
                            </div>
                        </div>
                        <div class="fade tab-pane" id="pills-engine" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="body-dimension">
                                <ul class="tab_content">
                                    <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                                    <?php endforeach; ?>
                                    <!-- <li><span>Type</span>4 stroke, SI Engine</li>
                                    <li><span>Displacement</span>124cc</li>
                                    <li><span>Max net power</span>8kW @ 7500 rpm</li>
                                    <li><span>Max net torque</span>10.9 N-m @ 6000 rpm</li>
                                    <li><span>Fuel System </span>PGM-FI</li>
                                    <li><span>Bore x Stroke</span>50.0 X 63.1 mm</li>
                                    <li><span>Compression ratio</span>10.0:1</li>
                                    <li><span>Starting method</span>Self/Kick</li>  -->
                                </ul>
                            </div>
                        </div>
                        <div class="fade tab-pane" id="pills-transmission" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="body-dimension">
                                <ul>
                                    <?php $cnt=0; foreach($transmission as $row): $cnt++; ?>
                                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                                    <?php endforeach; ?>
                                    <!-- <li><span>Clutch Type</span>Multiplate Wet Clutch</li>
                                    <li><span>No. of Gears</span>5 Gears</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="fade tab-pane" id="pills-tyres-brakes" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="body-dimension">
                                <ul class="tab_content">
                                    <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                                    <?php endforeach; ?>
                                    <!-- <li><span>Tyre Size & Type (Front)</span>80/100-18 M/C 47P, Tubeless</li>
                                    <li><span>Tyre Size & Type (Rear)</span>80/100-18 M/C 54P, Tubeless</li>
                                    <li><span>Brake Size & Type (Front)</span>Disc 240 mm, Drum 130 mm</li>
                                    <li><span>Brake Size & Type (Rear)</span>Drum 130 mm</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="fade tab-pane" id="pills-frame-suspension" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="body-dimension">
                                <ul>
                                    <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                                    <?php endforeach; ?>
                                    <!-- <li><span>Frame Type</span>Diamond Type</li>
                                    <li><span>Front Suspension</span>Telescopic</li>
                                    <li><span>Rear Suspension</span>Hydraulic Type</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="fade tab-pane" id="pills-electricals" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="body-dimension">
                                <ul>
                                    <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                                    <li><span><?php echo $row['list']; ?></span><?php echo $row['details']; ?></li>
                                    <?php endforeach; ?>
                                    <!-- <li><span>Battery</span>12V, 5.0Ah</li>
                                    <li><span>Head lamp</span>LED, DC</li> -->
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
                        <div class="tab-content" id="v-pills-tabContent">
                            <?php foreach($colour as $row): 
                            $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=1 order by id asc limit 1")->result();
                            foreach($data_value as $data_value_row);
                            ?>
                            <div <?php if($row['id']==$data_value_row->id){ ?> class="fade tab-pane active show text-center" <?php }else{ ?> class="fade tab-pane text-center" <?php } ?> id="v-pills-<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"></div>
                            <?php endforeach; ?>
                            <!-- <div class="fade tab-pane active show text-center" id="v-pills-red" role="tabpanel" aria-labelledby="v-pills-home-tab"><img src="assets/images/sp-125bs-vi/green.png" title="Honda SP 125 BS6 | Green | Rushabh Honda" alt="Checkout Green Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."></div>
                            <div class="fade tab-pane text-center" id="v-pills-silver" role="tabpanel" aria-labelledby="v-pills-profile-tab"><img src="assets/images/sp-125bs-vi/imperial-red-metallic.png" title="Honda SP 125 BS6 | Red | Specification | Rushabh Honda" alt="Checkout Red Metallic Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."/></div>
                            <div class="fade tab-pane text-center" id="v-pills-metallic" role="tabpanel" aria-labelledby="v-pills-messages-tab"><img src="assets/images/sp-125bs-vi/pearl-siren-blue.png" title="Honda SP 125 BS6 | Pearl Siren Blue | Rushabh Honda" alt="Checkout Pearl Siren Blue Honda SP 125 BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."/></div>
                            <div class="fade tab-pane text-center" id="v-pills-blue" role="tabpanel" aria-labelledby="v-pills-settings-tab"><img src="assets/images/sp-125bs-vi/matte-grey.png" title="Honda SP 125 BS6 | Grey | Specification | Rushabh Honda" alt="Checkout Grey Metallic Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."/></div> -->
                        </div>
                    </div>
                    <div class="color-section">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php foreach($colour as $row): 
                             $data_value = $this->db->query("Select * from available_colour where bike_scooter_id=1 order by id asc limit 1")->result();
                            foreach($data_value as $data_value_row);
                            ?>
                            <a href="#v-pills-<?php echo $row['id']; ?>" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" <?php if($row['id']==$data_value_row->id){ ?> class="active show nav-link" <?php }else{ ?> class="show nav-link" <?php } ?> id="v-pills-home-tab">
                                <span><img src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>" title="<?php echo $row['image_title']; ?>" alt="<?php echo $row['image_description']; ?>"/></span><abbr><?php echo $row['colour']; ?></abbr>
                            </a><?php endforeach; ?>
                            <!-- <a href="#v-pills-red" data-toggle="pill" aria-controls="v-pills-home" aria-selected="true" role="tab" class="active show nav-link" id="v-pills-home-tab">
                                <span><img src="assets/images/sp-125bs-vi/green.png" title="Honda SP 125 BS6 | Green | Rushabh Honda" alt="Checkout Green Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."/></span><abbr>Striking Green</abbr>
                            </a>
                            <a href="#v-pills-silver" data-toggle="pill" aria-controls="v-pills-profile" aria-selected="false" role="tab" class="nav-link" id="v-pills-profile-tab">
                                <span><img src="assets/images/sp-125bs-vi/imperial-red-metallic.png" title="Honda SP 125 BS6 | Red | Specification | Rushabh Honda" alt="Checkout Red Metallic Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."/> </span><abbr>Imperial Red Metallic</abbr>
                            </a>
                            <a href="#v-pills-metallic" data-toggle="pill" aria-controls="v-pills-messages" aria-selected="false" role="tab" class="nav-link" id="v-pills-messages-tab">
                                <span><img src="assets/images/sp-125bs-vi/pearl-siren-blue.png" title="Honda SP 125 BS6 | Pearl Siren Blue | Rushabh Honda" alt="Checkout Pearl Siren Blue Honda SP 125 BS6 at reasonable price exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."/> </span><abbr>Pearl Siren Blue </abbr>
                            </a>
                            <a href="#v-pills-blue" data-toggle="pill" aria-controls="v-pills-settings" aria-selected="false" role="tab" class="nav-link" id="v-pills-settings-tab">
                                <span><img src="assets/images/sp-125bs-vi/matte-grey.png" title="Honda SP 125 BS6 | Grey | Specification | Rushabh Honda" alt="Checkout Grey Metallic Honda SP 125 BS6 features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years."/> </span><abbr>Matte Axis Grey Mettalic</abbr>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function () {
        $("#price1").on("click", function (o) {
            if ("" !== this.hash) {
                o.preventDefault();
                var t = this.hash;
                $("html, body").animate({ scrollTop: $(t).offset().top }, 800, function () {
                    window.location.hash = t;
                });
            }
        });
    });
</script>
