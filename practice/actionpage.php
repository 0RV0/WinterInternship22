<?php

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
print_r($row);


// if(!$row){
//     echo "<script>alert('Empty Data!');
//     // window.location.replace('index.php');
    
//         </script>;";
//     } 
//     else if($username != $row['username'] OR $Password != $row['Password'])
//         {
//             echo"<script>alert('Enter correct data!');
//             window.location.replace('index.php');
//             </script>;";
//         }
//             else if($username == $row['username'] AND $Password == $row['Password'])
//             {
//                 echo"<script>alert('Registered Successfully!');
//                 window.location.replace('index.php');
//                 </script>;";
//             }
        

        ?>
