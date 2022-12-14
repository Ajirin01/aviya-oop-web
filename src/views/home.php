
<!-- Start slider  -->
<section id="aa-slider">
  <div class="aa-slider-area"> 
    <!-- Top slider -->
    <div class="aa-top-slider">
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="src/assets/img/slider/slider5.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Welcome to Aviya Residence and Apartment</span>
          <h2 class="aa-top-slider-title">Home of modern residence design</h2>
          <p class="aa-top-slider-location"></i>Find your dream home on today</p>
          <span class="aa-top-slider-off">Outright Payment Attracts 10% Discount</span>
          <!-- <p class="aa-top-slider-price">Contact Us</p> --> <br>
          <a href="contact" class="aa-top-slider-btn">Contact Us<span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="src/assets/img/slider/KIND.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Looking for perfect home?</span>
          <h2 class="aa-top-slider-title">Don't worry, got you covered</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Katampe Extension, Abuja</p>
          <span class="aa-top-slider-off">Outright Payment Attracts 10% Discount</span>
          <p class="aa-top-slider-price">All at affordable prices</p>
          <!--<a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>-->
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="src/assets/img/slider/slider2.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg">Our clients give postive feedback always</span>
          <h2 class="aa-top-slider-title">Your satisfaction is our goal</h2>
          <p class="aa-top-slider-location"><i class="fa fa-thumb"></i>Aviya always here for you</p>
          <span class="aa-top-slider-off">Need help?</span>
          <p class="aa-top-slider-price">Chat with our agent</p>
          <!--<a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>-->
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="src/assets/img/slider/slider7.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <h2 class="aa-top-slider-title">AVIYA RESIDENCE &</h2>
          <span class="aa-top-slider-catg">APARTMENT KATAMPE <br> EXTENSION</span>
          <span class="aa-top-slider-off">Developed By:</span>
          <p class="aa-top-slider-price"> Aviya Residence and Apartments Limited </p>
          <!--<a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>-->
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide --> 
    </div>
  </div>
</section>
<!-- End slider  -->

<!-- Advance Search -->
<?php include_once(dirname(__FILE__, 1).'/components/topSearchWidget.php') ?>
<!-- / Advance Search -->

<!-- About us -->
<section id="aa-about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-about-us-area">
          <div class="row">
            <div class="col-md-5">
              <div class="aa-about-us-left">
                <img src="src/assets/img/about_bg.jpeg" alt="image">
              </div>
            </div>
            <div class="col-md-7">
              <div class="aa-about-us-right">
                <div class="aa-title">
                  <h2>About Us</h2>
                  <span></span>
                </div>
                <p>Aviya Residence and Apartments Limited offers an experience that shapes the ideal lifestyle with focus on excellence of design, customer satisfaction, and value propositions.
                  Aligning with the Sustainable Development Goals (SDGs) 2030, we pride ourselves with the provision of sustainable real estate solutions that flourish as investments, providing unparalleled customer experience process for the real estate investor and home owner.</p>                  
                <ul>
                  <li>Market leader with global reach</li>
                  <li>Engendering partnerships and standards</li>
                  <li>We provide sustainable real estate solutions</li>                    
                  <li>Ensuring clients and customers are recipients of an unmatched service experience for property ownership</li>
                  <li>We pay attention to detail and guaranteed long term returns on investment</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / About us -->

<!-- Latest property -->
<section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Latest Properties</h2>
          <span></span>
          <p>Aviya Residence & Apartments Katampe extension Web Edges LTD ongoing sale</p>         
        </div>
        
        <div class="aa-latest-properties-content">
          <div class="row">
            <?php
                foreach(json_decode($properties) as $key => $property){
                    if($key == 6){break;}
                    $id = $property->acf->photo;
                    $photo_path = $media_obj->find($id);
                    ?>
                    <div class="col-md-4">
                        <article class="aa-properties-item">
                        <a href="details?id=<?php echo $property->id; ?>" class="aa-properties-item-img">
                            
                            <img width="370" height="400" src="<?php echo $photo_path[0]['guid']['rendered']; ?>" alt="img">
                        </a>
                        <div class="aa-tag for-sale">
                            For Sale
                        </div>
                        <div class="aa-properties-item-content">
                            <div class="aa-properties-info" style="height: 70px">
                              <span><?php echo $property->acf->bedrooms; ?> Bedrooms</span>
                              <span><?php echo $property->acf->others; ?></span>
                              <span><?php echo $property->acf->size; ?></span>
                            </div>
                            <div class="aa-properties-about">
                            <h3 style="height: 100px"><a href="details?id=<?php echo $property->id; ?>"><?php echo $property->acf->title; ?></a></h3>
                            <p><?php echo $property->acf->location; ?></p>                      
                            </div>
                            <div class="aa-properties-detial">
                            <span class="aa-price">
                              <?php echo html_entity_decode('&#8358;', ENT_COMPAT | ENT_HTML401, 'UTF-8') . number_format($property->acf->price, 0, '.', ',') ?>
                            </span>
                            <a href="details?id=<?php echo $property->id; ?>" class="aa-secondary-btn">View Details</a>
                            </div>
                        </div>
                        </article>
                    </div>
                <?php }// end foreach ?>
          </div>
        </div>
      </div>
    </div>
</section>


<!-- / Latest property -->

<!-- Service section -->
<section id="aa-service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-service-area">
          <div class="aa-title">
            <h2>Our Service</h2>
            <span></span>
            <p>Aviya Residence and Apartment is a one-stop destination for all your real estate needs, offering a wide range of services from buying and selling properties to property management and rental services.</p>
          </div>
          <!-- service content -->
          <div class="aa-service-content">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-service">
                  <div class="aa-service-icon">
                    <span class="fa fa-home"></span>
                  </div>
                  <div class="aa-single-service-content">
                    <h4><a href="#">Property Sale</a></h4>
                    <!-- <p>We offer Nigerian property seekers an easy way to find </p> -->
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-3">
                <div class="aa-single-service">
                  <div class="aa-service-icon">
                    <span class="fa fa-check"></span>
                  </div>
                  <div class="aa-single-service-content">
                    <h4><a href="#">Property Rent</a></h4> -->
                    <!-- <p>Find Properties For rent with webedges.com.ng. Browse the Nigeria's largest property database and find Properties For rent</p> -->
                  <!-- </div>
                </div>
              </div> -->
              <div class="col-md-4">
                <div class="aa-single-service">
                  <div class="aa-service-icon">
                    <span class="fa fa-crosshairs"></span>
                  </div>
                  <div class="aa-single-service-content">
                    <h4><a href="#">Property Development</a></h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="aa-single-service">
                  <div class="aa-service-icon">
                    <span class="fa fa-bar-chart-o"></span>
                  </div>
                  <div class="aa-single-service-content">
                    <h4><a href="#">Market Analysis</a></h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Service section -->

<!-- Promo Banner Section -->
<section id="aa-promo-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div style="color: white; width: 70%; margin: 0 auto">
          <h3 class="text-center" style="font-size: 2.5rem">More ways to find your dream home!</h3>
          <p>Dear valued customers,</p>
          <p>
              We are excited to announce that we are expanding our services and adding new properties to our website, Aviya Residence and Apartment. In the coming weeks, you can expect to see an array of new and exciting offerings, including:
          </p>
          <ul style="list-style: circle; margin-left: 10px">
            <li>
                <p>A wider selection of homes and apartments in popular neighborhoods, with a range of prices and features to suit every budget and lifestyle.</p>
            </li>
          </ul>

          <p>Stay tuned for more updates and thank you for choosing Aviya Residence and Apartment for all your real estate needs.</p>

          <strong>Best regards, </strong> <br>

          <strong>The Aviya Residence and Apartment team</strong>

          <br><br><br>
          <a href="#" class="aa-view-btn" style="text-align: center">Coming soon...</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Promo Banner Section -->

<!-- Our Agent Section-->
<section id="aa-agents">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-agents-area">
          <div class="aa-title">
            <h2>From Our Youtube</h2>
            <span></span>
            <p>Our videos help to see documentation of developments and detail tour of our properties</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Our Agent Section-->

<!--video slider area starts-->
<section id="aa-slider" style="margin-top: -100px">
  <div class="aa-slider-area"> 
    <!-- Top slider -->
    <div class="aa-top-slider">
      <!-- Top slider single slide -->
      <?php
          require_once('models/Youtube.php');
          $youtube_obj = new Youtube();
          $videos = $youtube_obj->all();

          foreach(json_decode($videos) as $video){
              // echo json_encode($video->acf->video_link);
              $parts = parse_url($video->acf->video_link);
              parse_str($parts['query'], $query); 
        ?>
              <div class="aa-top-slider-single">
                  <iframe class="youtube" onload="iframeLoaded()"
                      src= "https://www.youtube.com/embed/<?php echo $query['v']; ?>">
                  </iframe>
              </div>
      <?php 
          }
      ?>
      
      
    </div>
  </div>
</section>
<!--video slider area ends-->



<!-- Client Testimonial -->
<section id="aa-client-testimonial" style="margin-top: 70px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-client-testimonial-area">
          <div class="aa-title">
            <h2>What Client Say</h2>
            <span></span>
            <p>We always get postive feed back from our clients. Here are few of the great reviews from out clients!</p>
          </div>
          <!-- testimonial content -->
          <div class="aa-testimonial-content">
            <!-- testimonial slider -->
            <ul class="aa-testimonial-slider">
              <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="src/assets/img/dummy image.png" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>“We recently purchased a home at Aviya Residence and couldn't be happier with our experience. The entire process was smooth and stress-free, thanks to the helpful and knowledgeable team at Aviya. We love our new home and are grateful to the team for making it happen.”</p>
                  </div>
                  <!-- <div class="aa-testimonial-bio">
                    <p>David Muller</p>
                    <span>Web Designer</span>
                  </div> -->
                </div>
              </li>

              <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="src/assets/img/dummy image.png" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>“As first-time homebuyers, we were a bit intimidated by the process of buying a new home. But the team at Aviya Residence and Apartment made it so easy and enjoyable. They answered all of our questions and were always available to help. We love our new apartment and are so glad we chose Aviya.”</p>
                  </div>
                  <!-- <div class="aa-testimonial-bio">
                    <p>David Muller</p>
                    <span>Web Designer</span>
                  </div> -->
                </div>
              </li>

              <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="src/assets/img/dummy image.png" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>“We have been living at Aviya Residence and Apartment for several years now and have been extremely happy with our experience. The community is friendly and well-maintained, and the team is always quick to respond to any questions or concerns we may have. We highly recommend Aviya to anyone looking for a great place to call home.”</p>
                  </div>
                  <!-- <div class="aa-testimonial-bio">
                    <p>David Muller</p>
                    <span>Web Designer</span>
                  </div> -->
                </div>
              </li>

              <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="src/assets/img/dummy image.png" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>“As a real estate investor, I've worked with many different companies and teams. But the team at Aviya Residence and Apartment stands out for their professionalism, expertise, and dedication to their clients. I've had a great experience working with them and highly recommend their services.”</p>
                  </div>
                  <!-- <div class="aa-testimonial-bio">
                    <p>David Muller</p>
                    <span>Web Designer</span>
                  </div> -->
                </div>
              </li>

              <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="src/assets/img/dummy image.png" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>“My family and I recently moved into an apartment at Aviya Residence and Apartment and couldn't be happier. The location is perfect, the amenities are top-notch, and the team is always available to help with anything we need. We highly recommend Aviya to anyone looking for a new home.”</p>
                  </div>
                  <!-- <div class="aa-testimonial-bio">
                    <p>David Muller</p>
                    <span>Web Designer</span>
                  </div> -->
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Client Testimonial -->

<!-- Executive section -->
<section id="aa-service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-service-area">
          <div class="aa-title">
            <h2>Meet Aviya Residence and Apartments Managements</h2>
            <span></span>
            <p>For all organizations that run smooth there are always people that make it possible. Aviya Residence and Apartment is proud to show you our wonderful team</p>
          </div>
          <!-- service content -->
          <div class="aa-service-content">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-service">

                  <div class="aa-service-icon">
                    <img style="width: 250px; height: 250px; border-radius: 50%" src="" alt="" srcset="src/assets/img/chairman.jpg">
                  </div>

                  <div class="aa-single-service-content">
                    <h4><a href="#"> Mr Clemon Iziengbe Aigbogun Chairman Aviya Residence &Apartments Ltd</a></h4>
                    <!-- <p>We offer Nigerian property seekers an easy way to find </p> -->
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="aa-single-service">

                  <div class="aa-service-icon">
                    <img style="width: 250px; height: 250px; border-radius: 50%" src="" alt="" srcset="src/assets/img/CEO.jpg">
                  </div>

                  <div class="aa-single-service-content">
                    <h4><a href="#"> Vivian Idoko CEO Aviya Residence &Apartments Ltd</a></h4>
                    <!-- <p>We offer Nigerian property seekers an easy way to find </p> -->
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="aa-single-service">

                  <div class="aa-service-icon">
                    <img style="width: 250px; height: 250px; border-radius: 50%" src="" alt="" srcset="src/assets/img/MD.jpg">
                  </div>

                  <div class="aa-single-service-content">
                    <h4><a href="#">  Chioma Ezeilo MD Aviya Residence &Apartments Ltd</a></h4>
                    <!-- <p>We offer Nigerian property seekers an easy way to find </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Executive section -->
