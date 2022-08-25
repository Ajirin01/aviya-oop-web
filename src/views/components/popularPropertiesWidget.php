<?php
    require_once(dirname(__FILE__,4).'/models/Property.php');
    $propertyModel = new Property();
    $properties = json_decode($propertyModel->all());
?>

<div class="aa-properties-single-sidebar">
    <h3>Populer Properties</h3>
    <?php 
        foreach ($properties as $key => $property) {
            $id = $property->acf->photo;
            $photo_path = $media_obj->find($id);

            if($key == 5){break;}
    ?>

    <div class="media">
        <div class="media-left">
            <a href="details?id=<?php echo $property->id; ?>">
            <img class="media-object" src="<?php echo $photo_path[0]['guid']['rendered']; ?>" alt="img">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading"><a href="details?id=<?php echo $property->id; ?>"><?php echo $property->acf->title ?></a></h4>
            <!-- <p><?php //echo substr($property->acf->short_description, 50) ?></p>                 -->
            <span><?php echo $property->acf->price ?></span>
        </div>              
    </div>

    <?php
        } 
    ?>
</div>