<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<title>NEW LOGIN PAGE</title>
    
  </head>
  <body>
    <h1>Data Checking</h1>
  <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="psw">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>

<?php
session_start();

if(isset($_POST['submit'])){
  $conn = mysqli_connect("localhost","root","","project","3306");
    if(!$conn){
        echo "Cannot connect to Database" .mysqli_connect_error($conn);
        exit;

    }
    $username= $_POST["uname"];
    $Password= $_POST["psw"];
   

$query = "SELECT username,Password from users where username = '$username' ;";
$result = mysqli_query($conn,$query);

$row= mysqli_fetch_assoc($result);
// print_r($row);


 if(!$row){
    echo "<script>alert('Empty Data!');

     window.location.replace('index.php');
    

    </script>;";
           } 
             else if($username != $row['username'] OR $Password != $row['Password'])

        {
                       echo"<script>alert('Enter correct data!');
                       window.location.replace('index.php');

          </script>;";

          }

        else if($username == $row['username'] AND $Password == $row['Password'])
        $_SESSION['username']= $username;
        


            {
          
              echo"<script>alert('Registered Successfully!');

                window.location.replace('index.php');

                </script>;";
                           }
        
}
?>