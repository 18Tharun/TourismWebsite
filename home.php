<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="a1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet">
        <style>
            h1{
    text-align: center;
    font-style: italic;
    font-size:xx-large;
}
body{
   background-repeat: no-repeat;
   background-size: cover;
   background-image: linear-gradient(#ff8a00, #e52e71);
   background-image: linear-gradient(to right, violet, darkred, purple);
   background-image: linear-gradient(30deg, rgb(23, 211, 236) 33%, rgb(222, 89, 237) );

   
}

.menu{
    height: 5%;
    width: 5%;
    margin-left: 2%;

}
.navbar{
    margin-bottom:5%;
    margin-left: 20%;
    margin-right: 10%;
    font-size: 30px;
    font-family:cursive;
}
li{
    display: inline;
    text-align: center;
}
h2{
    text-align: left;
}
ul{
    list-style-position: inside;
    margin: 0%;
    padding: 0%;
}
a{
    padding: 8%;
}

h2{
    font-size: xx-large;
    font-family: 'Rubik Distressed', cursive;
    text-align: center;
}
footer{
    text-align: right;
    font-family: cursive;
    text-align: bottom;
}
img{
    width: 5%;
    height: 5%;
   }



 

.section-heading {
  text-align:center;
  color:Blue;
  margin-top: 15px;
  margin-bottom:70px;
  font-size: 35px;
}


.locations {
  float: left;
  width: 25%;
  padding: 15px;
  margin:20px;
  height: 250px;
  margin-left: 30px;
  margin-right: 20px;
}


.place1 {
  
  background-color:aqua;
}
.place2 {
  
    background-color:greenyellow;
  }
  .place3 {
  
    background-color:lime;
  }
.placetext {
  text-align:center;
  font-size:50px;
  font-family:Verdana, Geneva, Tahoma, sans-serif;
}
        </style>
        <title>eXplore</title>
        <h1>Tourism Website</h1>
    </head>
    <body>
         <div class="navbar">
            <nav>
                <ul>
                    <li><a href="AboutUs.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
         </div>
        <h2 class="section-heading"> Chose your Desitination</h2>
        <div class="locations place1">
           <a href="AndhraPradesh.php"> <h2 class="placetext">Andhra <br>Pradesh</h2></a>    
        </div>
        
        <div class="locations place2">
          <a href="Kerala.php"><h2 class="placetext">KERALA</h2></a>
        </div>
        
        <div class="locations place3">
          <a href="Goa.php"><h2 class="placetext">GOA</h2></a>
        </div>
        
        


    </body>
   
    <footer>
    <marquee><h1> A warm welcome from <img src="namaste.png"> </h1></marquee>
    </footer>

</html>
