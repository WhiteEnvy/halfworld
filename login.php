<?php  
    $errorMes = '';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $conn = new PDO("mysql:host=$host;dbname=$dbname", "$login", "$password");	
       
      $username=$_POST['username'];
      $password=$_POST['password'];
       
       if($_POST && isset($_POST['username'])){
            $stmt = $conn->prepare("SELECT users.username, users.password FROM users WHERE username = '$username' AND password='$password'");
            $stmt->execute();
 
           if(!empty($stmt->fetchAll())) {              
                $_SESSION['login_user'] = $username;                
                header("location: personal");
           }
           else{
                $errorMes = "Your Login Name or Password is invalid";
           }
       } 
   }

echo
"<form action='' method='post' class='col-md-offset-4 col-md-4'>
    <h2>Login</h2>
    <div class='form-group'>
        <input type='text' placeholder='username' name='username'>
    </div>
    <div class='form-group'>
        <input type='password' placeholder='password' name='password'>
    </div>
    <button type='submit'>Submit</button>
    <br>
    <br>
   New to HALFWORLD? <a href='$mainUrl/signin'>Sign In</a>";
echo $errorMes;
echo "</form>";



?>