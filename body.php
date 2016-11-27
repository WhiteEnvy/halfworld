<?php
 
$action = $_SERVER['REQUEST_URI']; 
$pathUrl = parse_url($url, PHP_URL_PATH); 
$urlParam = parse_url($url, PHP_URL_QUERY); 
//$mainUrl = mb_strimwidth($_SERVER['PHP_SELF'], 0, strlen($_SERVER['PHP_SELF'])-strlen(parse_url($url, PHP_URL_PATH))-1);
//$mainUrl = $_SERVER['HTTP_HOST'];
$mainUrl = "https://$_SERVER[HTTP_HOST]/index.php";

 
var_dump($mainUrl);
    
$cssfile = '';
$htmlfile = '';

var_dump($action);
var_dump($pathUrl);
var_dump($urlParam);
var_dump($mainUrl);

if($urlParam){
    $cssfile = "<link rel='stylesheet' href='../css/fullDescription.css'></head>";
    $htmlfile = 'hotelDetail.php';
}
else{
    switch($pathUrl) {				
        case "hotels": $cssfile = "<link rel='stylesheet' href='../css/hotels.css'></head>"; $htmlfile="hotels.php"; break;
        case "contact": $cssfile = "<link rel='stylesheet' href='../css/contact.css'></head>"; $htmlfile="contact.php"; break;
        case "about-us": $cssfile = "<link rel='stylesheet' href='../css/about-us.css'></head>"; $htmlfile="about-us.php"; break;
        case "login": $cssfile = "<link rel='stylesheet' href='../css/login.css'></head>"; $htmlfile="login.php"; break;
        case "signin": $cssfile = "<link rel='stylesheet' href='../css/login.css'></head>"; $htmlfile="signin.php"; break;
        case "personal": $cssfile = "<link rel='stylesheet' href='../css/personal.css'></head>"; $htmlfile="personal.php"; break;
        case "admin": $cssfile = "<link rel='stylesheet' href='../css/admin.css'></head>"; $htmlfile="admin.php"; break;
        default : $htmlfile="main.php"; break;
    }
}


echo
"<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <title>HALFWORLD</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../css/font-awesome.min.css'>
    <link rel='stylesheet' href='../css/style.css'>";      

echo $cssfile;
 
echo "<body>";

session_start(); 
$username = $_SESSION ? $_SESSION['login_user'] : "";

echo " <div class='nav col-md-8 col-md-offset-2'>
        <a id='logo' href='$mainUrl/' class='col-md-2 col-sm-12'>HALFWORLD</a></li>
        <ul class='col-md-7 col-md-offset-3 col-sm-12 col-sm-offset-0'>
            <li class='col-md-3 col-sm-12'><a href='$mainUrl/hotels'>HOTELS</a></li>
            <li class='col-md-3 col-sm-12'><a href='$mainUrl/about-us'>ABOUT US</a></li>
            <li class='col-md-3 col-sm-12'><a href='$mainUrl/contact'>CONTACT</a></li>";
if($username){
    echo "<li class='col-md-3 col-sm-12' id='logIn'><a href='$mainUrl/personal'>MY ORDERS</i></a></li>"; 
}
else{
    echo "<li class='col-md-3 col-sm-12' id='logIn'><a href='$mainUrl/login'>LOG IN</i></a></li>";
}
echo "</ul></div>";

 
 
echo "<div class='darkfilter'>";
include($htmlfile);
echo "</div></body></html>";

?>