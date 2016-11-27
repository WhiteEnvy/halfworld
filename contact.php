<?php
  
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['email'];
    
    $insertReq = "INSERT INTO questions ( name, email, message ) VALUES ('$name','$email','$message')";
    $conn->exec($insertReq);
}


echo
"<div class='contact-container col-md-8 col-md-offset-2'>
    <form action='' method='post' class='col-md-8'>
        <h2 class='col-md-12'>Send message:</h2>
        <div class='col-md-6'>
            <label>Name:</label>
            <input type='text' placeholder='Your Name' name='name' required>
        </div>

        <div class='col-md-6'>
            <label>Email:</label>
            <input type='text' placeholder='your@email.com' name='email' required>
        </div>

        <div class='col-md-12'>
            <label>Message:</label>
            <input type='text' placeholder='Anything you want...' name='message' required>
        </div>

        <button type='submit'>Send a message</button>
    </form>
    <div id='contact-info' class='col-md-4 col-sm-12'>
        <h2>Contact information:</h2>
        <p class='inf-name'>Email:</p>
        <p>ouremail@gmail.com</p>
        <br>
        <p class='inf-name'>Phone:</p>
        <p>+380583457932</p>
        <br>
        <i class='fa fa-facebook-square fa-2x'></i>
        <i class='fa fa-vk fa-2x'></i>
        <i class='fa fa-twitter fa-2x'></i>
    </div>
</div>";
            
?>