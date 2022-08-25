<?php
    require_once(dirname(__FILE__,3).'/models/Property.php');
    require_once(dirname(__FILE__,3).'/controllers/SearchController.php');

    if(isset($_GET['title']) && isset($_GET['price']) && isset($_GET['size'])){
        $searchController = new SearchController();

        $properties = $searchController->search($_GET['title'], $_GET['price'], $_GET['size']);

        if(count($properties) == 0){
            echo "<script> window.location = '/zero-result.php' </script>";
        }
    }else{
        header('location: 404.php');
    }
?>
  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Search Results</h2>
            <ol class="breadcrumb">
            <li><a href="/">HOME</a></li>            
            <li class="active">Search Results</li>
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
            <!-- start properties content head -->
            <div class="aa-properties-content-head">              
              <!-- <div class="aa-properties-content-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">6</option>
                    <option value="2">12</option>
                    <option value="3">24</option>
                  </select>
                </form>
              </div> -->
              <div class="aa-properties-content-head-right">
                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
              </div>            
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body">
              <ul class="aa-properties-nav">
                <?php 
                    foreach ($properties as $key => $property) {
                        $id = $property['acf']['photo'];
                        $photo_path = $media_obj->find($id);
                ?>

                    <!-- SOLD OUT -->
                    <!-- <li>
                    <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="#">
                        <img alt="img" src="img/item/1.jpg">
                        </a>
                        <div class="aa-tag sold-out">
                        Sold Out
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
                    </li> -->
                    <!-- SOLD OUT ENDS HERE -->

                    <!-- FOR SALE -->
                    <li>
                        <article class="aa-properties-item">
                            <a class="aa-properties-item-img" href="details?id=<?php echo $property['id']; ?>">
                            <img alt="img" width="370" height="220" src="<?php echo $photo_path[0]['guid']['rendered']; ?>">
                            </a>
                            <div class="aa-tag for-sale">
                            For Sale
                            </div>
                            <div class="aa-properties-item-content">
                            <div class="aa-properties-info">
                                <?php
                                    $other_details = explode(",",$property['acf']['others']);

                                    foreach($other_details as $other){
                                ?>
                                    <span><?php echo $other; ?></span>
                                <?php }?>

                                <span style="float: right"><?php echo $property['acf']['size'] ?></span>
                            </div>
                            <div class="aa-properties-about">
                                <h3><a href="details?id=<?php echo $property['id']; ?>"><?php echo $property['acf']['title'] ?></a></h3>
                                <!-- <p><?php echo str_replace("aa-properties-info", " ",substr($property['acf']->short_description,50)); ?></p>                       -->
                            </div>
                            <div class="aa-properties-detial">
                                <span class="aa-price">
                                N <?php echo $property['acf']['price'] ?>
                                </span>
                                <a class="aa-secondary-btn" href="details?id=<?php echo $property['id']; ?>">View Details</a>
                            </div>
                            </div>
                        </article>
                    </li>
                    <!-- FOR SALE ENDS HERE -->
                <?php
                    } 
                ?>
              </ul>
            </div>
            <!-- Start properties content bottom -->
            <!-- <div class="aa-properties-content-bottom">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
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