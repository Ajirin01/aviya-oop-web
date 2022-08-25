<?php 
    require_once('models/Property.php');
    require_once('models/Media.php');
    $property_obj = new Property();
    $media_obj = new Media();
    include_once(__DIR__.'/src/views/header.php');
?>
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
                foreach(json_decode($properties) as $property){
                    $media = new Media();
                    $id = $property->acf->photo;
                    $photo_path = $media_obj->find($id);
                    // echo json_encode(json_decode($photo_path, true)[0]['guid']['rendered']);
                    // exit;
                    ?>
                    <div class="col-md-4">
                        <article class="aa-properties-item">
                        <a href="#" class="aa-properties-item-img">
                            
                            <img src="<?php echo $photo_path[0]['guid']['rendered']; ?>" alt="img">
                        </a>
                        <div class="aa-tag for-sale">
                            For Sale
                        </div>
                        <div class="aa-properties-item-content">
                            <div class="aa-properties-info">
                            <span><?php echo $property->acf->bedrooms; ?> Bedrooms</span>
                            <span><?php echo $property->acf->others; ?></span>
                            <span><?php echo $property->acf->size; ?></span>
                            </div>
                            <div class="aa-properties-about">
                            <h3><a href="#"><?php echo $property->acf->title; ?></a></h3>
                            <p><?php echo $property->acf->location; ?></p>                      
                            </div>
                            <div class="aa-properties-detial">
                            <span class="aa-price">
                                N<?php echo $property->acf->price; ?>
                            </span>
                            <a href="#" class="aa-secondary-btn">View Details</a>
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

<?php include_once(__DIR__.'/src/views/footer.php'); ?>
