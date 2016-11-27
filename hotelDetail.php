<?php 
$hotel_name = $_GET["name"];
$stmt = $conn->prepare("SELECT * FROM hotels WHERE name='$hotel_name'");
$stmt->execute();
$result = $stmt->fetchAll();

$username = $_SESSION ? $_SESSION['login_user'] : "";

  

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $date_from =  $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $number_rooms = (int)$_POST['number_rooms'];
    $number_people = (int)$_POST['number_people'];
    
    $date1=date_create($date_from);
    $date2=date_create($date_to);
    $diff=date_diff($date1,$date2);
    $number_days = $diff->d;    
    
    $totalPrice = ($result[0]['roomprice']*$number_rooms+$result[0]['peopleprice']*$number_people)*$number_days;
    
    $insertReq = "INSERT INTO orders (username,hotel_name,date_from,date_to,number_rooms,number_people,total_price) VALUES ('$username','$hotel_name','$date_from','$date_to',$number_rooms,$number_people,$totalPrice)";
    $conn->exec($insertReq);
}

echo "   
   <div class='description-container col-md-8 col-md-offset-2'>
    <div class='col-md-8 col-md-offset-2'>
        <img src='../img/".$result[0]['image_url']."' alt=''>
        <h2>".$result[0]['name']."</h2>
        <p>".$result[0]['description']."</p>

        <h2>Price list:</h2>
        <table class='col-md-8 col-md-offset-2'>
            <tr>
                <th class='col-md-4'>Amount</th>
                <th class='col-md-4'>Price per room</th>
                <th class='col-md-4'>Price per people</th>
            </tr>";
    for($i = 1; $i<5; $i++){
        echo "<tr>
                <td>$i</td>
                <td>$".$i*$result[0]['roomprice']."</td>
                <td>$".$i*$result[0]['peopleprice']."</td>
            </tr>";
    }
             
       echo "</table>";

if($username){    
echo "<form action='' method='post' class='col-md-8 col-md-offset-2'>
            <h2>Place order</h2>
            <label><i class='glyphicon glyphicon-calendar'></i> Date from:</label>
            <input type='date' class='form-control' name='date_from' required>
            <label><i class='glyphicon glyphicon-calendar'></i> Date to:</label>
            <input type='date' class='form-control' name='date_to' required>


            <label for='sel1'><i class='glyphicon glyphicon-bed'></i> Number of rooms:</label>

            <select class='form-control' name='number_rooms' required>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>

            <label for='sel1'><i class='glyphicon glyphicon-user'></i> Number of people:</label>

            <select class='form-control' name='number_people' required>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <button type='submit'>Submit</button>
        </form>";  
}
else{
    echo "<div class='col-md-8 col-md-offset-2'><h3>Please log in for place order</h3></div>";
}

echo "</div></div>";


                
?>