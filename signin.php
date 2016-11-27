<?php
$errorMes = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];    
 
    $checkUser = $conn->prepare("SELECT users.username FROM users WHERE username='$username'");
    $checkUser->execute(); 
    
    if(empty($checkUser->fetchAll())){
        $insertReq = "INSERT INTO users VALUES ('$username','$password','$name','$surname','$email','$tel')";
        $conn->exec($insertReq);
        header("location: login");
    }
    else{
        $errorMes = 'Sorry, this username is already exist';
    }
}

 
    
 

echo
"<form action='' method='post' class='col-md-offset-4 col-md-4'>
    <h2>Sign In</h2>
    <div class='form-group'>
        <input type='text' placeholder='username' name='username' required>
    </div>
    <div class='form-group'>
        <input type='password' placeholder='password' name='password' required>
    </div>
    <div class='form-group'>
        <input type='text' placeholder='name' name='name' required>
    </div>
    <div class='form-group'>
        <input type='text' placeholder='surname' name='surname' required>
    </div>
    <div class='form-group'>
        <input type='text' placeholder='email' name='email' required>
    </div>
    <div class='form-group'>
        <input type='text' placeholder='teleplone' name='tel' required>
    </div>
    
    
    
    <button type='submit'>Submit</button>
    <br>
    <br>
    Already have an account? <a href='$mainUrl/login'>Log In</a>";
echo $errorMes;
echo "</form>";



?>