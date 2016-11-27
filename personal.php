<?php    
//session_start(); 
include("connect.inc.php");
$username = $_SESSION['login_user'];
$userData = $conn->prepare("SELECT * FROM users WHERE username='$username'");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
$userData->execute(); 

$result = $userData->fetchAll();

if(empty($result)){
    header("location: login");
}    

$orders = $conn->prepare("SELECT * FROM orders WHERE username='$username'");
$orders->execute(); 

?>




<div class='orders col-md-8 col-md-offset-2'>
    <h2>Welcome, <?php echo $result[0]['name']; ?></h2>
    <table class='table table-striped col-md-12'>
            <h3>Orders</h3>
            <tr>
                <th>Hotel Name</th>
                <th>Date from</th>
                <th>Date to</th>
                <th>Number of rooms</th>
                <th>Number of people</th>
                <th>Total price</th> 
            </tr>
    <?php 
        foreach($orders as $q){            
            echo "<tr>";
            echo "<td>".$q['hotel_name'].
                 "<td>".$q['date_from'].
                 "<td>".$q['date_to'].
                 "<td>".$q['number_rooms'].
                 "<td>".$q['number_people'].
                 "<td>".$q['total_price'];
        }    
    ?>
            
    </table>
    
</div>