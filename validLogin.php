<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <body>    
            <h1><a href="#">HOME</a></h1>    
    <?php
        $email =$_POST['username'];
        $password = $_POST['pword'];

    $conn = new mysqli('localhost','server_name','password',"db_name");
        if($conn->connect_error){
          die("Failed to connect :" .$con->connect_error);    
         }else{
            $quer =$conn->prepare("select * from userdetail where Email = ?");
            $quer->bind_param("s",$email);
            $quer->execute();
            $quer_result =$quer->get_result();
        if($quer_result->num_rows>0){
            $data=$quer_result->fetch_assoc();
            if($data['Password'] === $password){
                echo "<script>alert('Login Successful');</script>";
                header('Location:#.php');//redirect to home page
            }else{
                echo "<h2>Invalid Credentials</h2>";
                echo "<h2><a href='login.php'> Try again</a></h2>";
            }
        }else{
            echo "<h2>Invalid credentials</h2>";
            echo "<h2><a href='log.php'> Try again</a></h2>";
        }
      }
    ?>
</body>
        <tail>
</tail>
</html>
