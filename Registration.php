<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
    h1{
        font-size:50px;
    }
    h2{
        font-family:cursive;
        text-align:center;
    }
    body{
    background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(#ff8a00, #e52e71);
    background-image: linear-gradient(to right, violet, darkred, purple);
    background-image: linear-gradient(30deg, rgb(11, 199, 224) 33%, rgb(0, 255, 60) );  
 }
</style>
</head>
<body>
    <h1><a href="home.php">HOME</a></h1>
<?php
    $Name=$_POST['fname'];
    $Number=$_POST['number'];
    $Mail=$_POST['email'];
    $Password=$_POST['pwd'];
    
    $conn = new mysqli('localhost','root','','tourism');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }else{
        $insquery = $conn->prepare("insert into userdetail(Name,MobileNumber,Email,Password) values(?,?,?,?)");
        $insquery->bind_param("siss",$Name,$Number,$Mail,$Password);
        $insquery->execute();
        echo "<h2>Registration successful :)</h2><br>";
        $insquery->close();
    }

?>
<h2>would you like to <a href="login.php">login</a> ?</h2>
</body>
</html>