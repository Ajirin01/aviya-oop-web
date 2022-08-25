<?php
    header("Content-Type: application/json");
    // require_once('models/Property.php');

    // $property = new Property();
    
    // $properties_json = $properties;

    require_once('controllers/SearchController.php');

    // // $properties->find(json_decode($properties)[0]->id);
    // $id = (int)(json_decode($properties_json)[0]->id);
    // $property->find($id);

    // echo json_encode($_GET);
    // $min_price = explode(",",$_GET['price'])[0];
    // $max_price = explode(",",$_GET['price'])[1];

    // echo  18000000 >= $min_price*1000000  && 18000000 <= $max_price*1000000;
    // exit();

    // if(isset($_GET['title']) && isset($_GET['price']) && isset($_GET['size'])){
    //     $properties_array = json_decode($properties, true);

    //     $property_obj = array_filter($properties_array, function($property) {
    //         // check if minimum filter price is grater or equals properity price
    //         $property_price_greater_OR_equals_filter__min_price = $property['acf']['price'] >= explode(",",$_GET['price'])[0]*1000000;

    //         // check if maximum filter price is less or equals properity price
    //         $property_price_less_OR_equals_filter__max_price = $property['acf']['price'] <= explode(",",$_GET['price'])[1]*1000000;

    //         // (property price Greater OR Equals to filter minimum price) And (property price Less OR Equals to filter maximum price)
    //         $price_greater_OR_equals_min_AND_less_or_equals_max =  $property_price_greater_OR_equals_filter__min_price && $property_price_less_OR_equals_filter__max_price;
            

    //         // check if minimum filter size is grater or equals properity size
    //         $property_size_greater_OR_equals_filter__min_size = explode(" ",$property['acf']['size'])[0] >= explode(",",$_GET['size'])[0];

    //         // check if maximum filter size is less or equals properity size
    //         $property_size_less_OR_equals_filter__max_size = explode(" ",$property['acf']['size'])[0] <= explode(",",$_GET['size'])[1];

    //         $size_greater_OR_equals_min_AND_less_or_equals_max =  $property_size_greater_OR_equals_filter__min_size && $property_size_less_OR_equals_filter__max_size;

    //         return (strpos($property['acf']['title'], $_GET['title']) !== false) && ($price_greater_OR_equals_min_AND_less_or_equals_max) && ($size_greater_OR_equals_min_AND_less_or_equals_max) ;
    //     });

    //     echo json_encode(array_values($property_obj));
    // }else{
    //     header('location: 404.php');
    // }

    if(isset($_GET['title']) && isset($_GET['price']) && isset($_GET['size'])){
        $searchController = new SearchController();

        $result = $searchController->search($_GET['title'], $_GET['price'], $_GET['size']);

        echo json_encode($result);
    }else{
        header('location: 404.php');
    }

    
?>