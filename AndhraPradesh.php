<!DOCTYPE html>

    <head><title> fetch data from server</title>
    <link rel="stylesheet" href="a1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet">
        <style>
        body{
             background-repeat: no-repeat;
             background-size: cover;
             background-image: linear-gradient(#ff8a00, #e52e71);
             background-image: linear-gradient(to right, violet, darkred, purple);
             background-image: linear-gradient(30deg, rgb(23, 211, 236) 33%, rgb(222, 89, 237) );
        }
        footer{
         text-align: right;
        font-family: cursive;
        text-align: bottom;
        }
        table{
            background-color:white;
        }
    </style>
    </head>
    

<body>
    <h2><a href="home.php">home</a></h2>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
    <tr>
        <th colspan="4"><h2>list of place to visit in AndhraPradesh</h2></th>
    </tr>
    <tr>
        <th>Place</th>
        <th>MustVisit</th>
        <th>Location</th>
        <th>RoundTripBudget</th>
    </tr>
    <?php
    
    $conn = new mysqli('localhost','server_name','',"db_name");
    if (!$conn) {
        die ('Could not connect: ' . mysql_error());
    }
    
   $result = $conn->query("select Place,MustVisit,location,RoundTripBudget from dest where State='AndhraPradesh'");
    #echo "Returned rows are: " . mysqli_num_rows($result);
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row['Place']."</td>";
          echo "<td>" . $row['MustVisit']."</td>";
          echo "<td><a href='". $row["location"]."'> Map location</a></td>";
          echo "<td>" . $row["RoundTripBudget"]. "</td></tr>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
   
   
?>

    </table>
</body>
<footer>
    <marquee><h1> A warm welcome from <img src="namaste.png"> </h1></marquee>
    </footer>
</html>



