
  <!-- Start Proerty header  -->
  <?php 
    $properties_obj = new Property();
    $property = $properties_obj->find($_GET['id'])[0]['acf'];
  ?>
  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Properties Details</h2>
            <ol class="breadcrumb">
            <li><a href="/">HOME</a></li>            
            <li class="active"><?php echo strtoupper($property['title']); ?></li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">            
            <!-- Start properties content body -->
            <div class="aa-properties-details">
             <div class="aa-properties-info" style="word-wrap: break-word">
               <?php echo $property['long_description'] ;?>
             </div>
             <!-- Nearby properties -->
             <!-- <div class="aa-nearby-properties">
               <div class="aa-title">
                 <h2>Nearby Properties</h2>
                 <span></span>
               </div>
               <div class="aa-nearby-properties-area">
                 <div class="row">
                   <div class="col-md-6">
                     <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="#">
                          <img alt="img" src="img/item/1.jpg">
                        </a>
                        <div class="aa-tag for-sale">
                          For Sale
                        </div>
                        <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                            <span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="#">Appartment Title</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              $35000
                            </span>
                            <a class="aa-secondary-btn" href="#">View Details</a>
                          </div>
                        </div>
                      </article>
                   </div>
                   <div class="col-md-6">
                     <article class="aa-properties-item">
                      <a class="aa-properties-item-img" href="#">
                        <img alt="img" src="img/item/2.jpg">
                      </a>
                      <div class="aa-tag for-sale">
                        For Sale
                      </div>
                      <div class="aa-properties-item-content">
                        <div class="aa-properties-info">
                          <span>5 Rooms</span>
                          <span>2 Beds</span>
                          <span>3 Baths</span>
                          <span>1100 SQ FT</span>
                        </div>
                        <div class="aa-properties-about">
                          <h3><a href="#">Appartment Title</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                        </div>
                        <div class="aa-properties-detial">
                          <span class="aa-price">
                            $35000
                          </span>
                          <a class="aa-secondary-btn" href="#">View Details</a>
                        </div>
                      </div>
                    </article>
                   </div>
                 </div>
               </div>

             </div> -->

            </div>           
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
        <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <!-- search widget STARTS-->
            <?php include_once(dirname(__FILE__, 1).'/components/sideSearchWidget.php') ?>
            <!-- Start Single properties sidebar -->
            <!-- search widget ENDS -->

            <!-- popular properties widget STARTS -->
            <?php include_once(dirname(__FILE__, 1).'/components/popularPropertiesWidget.php') ?>
            <!-- popular properties widget ENDS -->
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->