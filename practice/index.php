<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    
<?php

session_start();
if(isset($_SESSION['username'])){
    ?>
    <h1> This is logged in page</h1>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input id="namess" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
    <!-- Button trigger modal -->
<button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"  id="submit">
    Log Out

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Log Out</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div>This is model body
      </div>
      <div id="show" class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-danger" onclick = "window.location.href='logout.php'">Logging Out</button>
      </div>
    </div>
  </div>
</div>
    <?php
}
else{    
    ?>
    <h1> This is not logged in page</h1>
<?php
}
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script  type="text/javascript">
    /*function store(){
    var inputEmail= document.getElementById("namess").value;
   
    document.getElementById('show').innerHTML =inputEmail;
    }*/
    //   Input function using jQuery
     jQuery(document).ready(function(){
      jQuery('#submit').on('click',function(){
        var inputagvalue = jQuery('#namess').val();
        jQuery('#show').html(inputagvalue);

      })
    })
</script>
</body>
</html>