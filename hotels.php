<?php 
    try {
	include("connect.inc.php");
	$conn = new PDO("mysql:host=$host;dbname=$dbname", "$login", "$password");	
	   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	   $conn->exec("set names utf8");	
    }
    catch (PDOException $erreur) {	
	   echo "<p>Erreur : " . $erreur->getMessage() . "</p>\n";
    }


$stmt = $conn->prepare("SELECT hotels.name, hotels.description, hotels.image_url FROM hotels");
$stmt->execute(); 

$myhotels = $stmt->fetchAll();

//foreach($myhotels as $q){
//     echo"
//        <div class='item col-md-8 col-md-offset-2'>
//            <img src='../img/".$q['image_url']."' alt='' class='col-md-4'>
//            <div class='description col-md-8'>
//                <h2>".$q['name']."</h2>".trim(mb_strimwidth($q['description'], 0, 450))."...
//            </div>
//            <a class='more' href='$mainUrl/hotels?name=".$q['name']."'>
//                <p>Read more</p>
//                <i class='glyphicon glyphicon glyphicon-share-alt'></i>
//            </a>
//        </div>";
//}

 
for($i=0; $i<count($myhotels);$i++){
        echo "<div class='item col-md-8 col-md-offset-2'>
            <img src='../img/".$myhotels[$i]['image_url']."' alt='' class='col-md-4'>
            <div class='description col-md-8'>
                <h2>".$myhotels[$i]['name']."</h2>".trim(mb_strimwidth($myhotels[$i]['description'], 0, 150))."...
            </div>
            <a class='more' href='$mainUrl/hotels?name=".$myhotels[$i]['name']."'>
                <p>Read more</p>
                <i class='glyphicon glyphicon glyphicon-share-alt'></i>
            </a>
        </div>"; 
}

?>