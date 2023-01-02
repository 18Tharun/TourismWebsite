<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <style>
        *{ box-sizing: border-box; }
        html, body{ margin: 0; padding: 0; }
       
        .form-group{
            margin: 20px;
            margin-left:100px;
            margin-right:100px;
        }
        
        input{
            width: 100%;
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        button{
            width: 200px;
            padding: 15px;
            margin-left: 250px;
            background: #fff;
            color: dodgerblue;
            border: solid 1px dodgerblue;
            border-radius:33px;
            cursor: pointer;
            transition:  all .38s ease-in-out;
        }
        button:hover{
            background:red;
            color: #fff;
        }
        table tr td{
            border: solid 1px #eee;
            padding: 10px;
        }
        .form-group:before{
         content: " *";
         color: red;
        }
        .container {
    width: 640px;
    height: 660px;
    align: center;
    border: 5px solid #339;
    margin:50px;
    margin-left:220px;
}
.he{
text-align:center;
}
.c1{
margin-left: auto;
margin-right:auto;
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
    <h2><a href="home.php">Home</a></h2>
    <div class="container">
        <h2 class="he"><u>Account Creation</u></h2>
        <br><br>
        <form action="Registration.php", method="POST">
            <div class="form-group">
             <b>Name</b>   <input type="text" name="fname" id="name" required placeholder="Enter first name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
             </div>
            <div class="form-group">
             <b>MobileNumber</b>   <input type="text" name="number" id="lname"  required placeholder="Enter Mobile number" pattern="^[0-9]+$" oninvalid="this.setCustomValidity('only digits')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Email Address</b>  <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('enter valid format, ends with @email.com ')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Password</b>  <input type="password" name="pwd" id="pwd" placeholder="Enter new password" ></input>
              </div>
             <div class="form-group">
               <b>Confirm Password</b> <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
            </div>
           
            <div class="form-group1">
                <button type="submit">Create Account</button>
            </div>
        </form>
          </div>
        
     
 
    
   <script>
var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("psw-repeat");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;