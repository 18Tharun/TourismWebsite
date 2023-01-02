<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #f1{
    border-style: solid;
    border-width: 2px;
    text-align: center;
    background-image: radial-gradient(#ff00bb, #2e96e5);
    background-image: radial-gradient(square at bottom left, #ff8a00, rgb(255, 0, 162), #e52e71);
    font-family: cursive;
    padding: auto;
    border-radius: 5px;
    margin-left: 35%;
    margin-right: 35%;
    margin-top: 6%;
    padding-top: 3%;
    padding-bottom: 3%;
   }
   h2{
    text-align: left;
}
   img{
    width: 5%;
    height: 5%;
   }
   h1{
    text-align: center;
   }
   body{
    background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(#ff8a00, #e52e71);
    background-image: linear-gradient(to right, violet, darkred, purple);
    background-image: linear-gradient(30deg, rgb(11, 199, 224) 33%, rgb(0, 255, 60) );  
 }
 footer{
    text-align: right;
    font-family: cursive;
}
        </style>
        <title>LoginPage</title>
    </head>
    <body>
        <h1> login to your Account</h1>
         <h2><a href="home.php">home</a></h2>
        
        <div id="f1">
            <form id="form" action="loginValidation.php" method="post">
                username <input type="text" name="username" id="username" placeholder="Enter your UserId" required onmouseover="dis_on()" onmouseout="dis_off()"><br>
                password <input type="password" name="pword" id="pword"  required placeholder="Enter your Password"><br>
                <input id="btn" type="submit" value="LOGIN" > <br>
                <span id="spn"></span>
            </form>
        </div>
        <h1>Don't have an account?<a href="accountCreation.php">create one</a></h1>
        <script src="login.js"></script>
    </body>
   <!-- <footer>
        <h4>Prepared by JONNAGADDALATARUNKUMAR 20191CSE0216 <br>and<br>JABIREDDYPRANEETHREDDY 20191CSE0207</h4>
    </footer>-->
</html>