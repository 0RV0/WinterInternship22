<?php
{
    $conn = mysqli_connect("localhost","root","","project","3306");
    if(!$conn){
        echo "Cannot connect to Database" .mysqli_connect_error($conn);
        exit;

    }
    $username= trim($_POST["uname"]);
    $Password= trim($_POST["psw"]);
    $email= trim($_POST["eml"]);

    $query = "INSERT into users(username,Password,email)values('$username','$Password','$email');";
    $result = mysqli_query($conn,$query);

    
}

if(!$result){
   echo "Query issue.".mysqli_error($conn);
}
else{
echo "<script>alert('Successfully registered!');
window.location.replace('http://localhost/project/index.php');

    </script>";
}
?>