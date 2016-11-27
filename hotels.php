<?php 

$stmt = $conn->prepare("SELECT hotels.name, hotels.description, hotels.image_url FROM hotels");
$stmt->execute(); 

foreach($stmt as $q){
     echo"
        <div class='item col-md-8 col-md-offset-2'>
            <img src='../img/".$q['image_url']."' alt='' class='col-md-4'>
            <div class='description col-md-8'>
                <h2>".$q['name']."</h2>".trim(mb_strimwidth($q['description'], 0, 450))."...
            </div>
            <a class='more' href='$mainUrl/hotels?name=".$q['name']."'>
                <p>Read more</p>
                <i class='glyphicon glyphicon glyphicon-share-alt'></i>
            </a>
        </div>";
}

?>