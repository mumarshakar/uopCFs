<?php 

  session_start();
  if($_SESSION['logged_in'] != true){
    header("Location:login.php");
  }
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-evenly">
        <div><a href="classFellows.php">Home</div>
        <div><a href="add_cf.php">Add</a></div>
        <div>Update</div>
        <div><a href="logout.php">logout</a></div>
      </div>
    </div>
   </div>