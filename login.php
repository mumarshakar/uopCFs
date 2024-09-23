<?php

$user = "umarshakar@gmail.com";
$pass = "12345";

if(isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST['pass'];

  if($user == $email AND $pass == $password){
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['user_name'] = "Muhammad Umar";

      header("Location:classFellows.php");
  }else{
      $erro =  "<tt class='alert alert-warning'>Either Email or Password Wrong</tt>";
  }

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
  <body class="d-flex justify-content-between align-items-center">
      
   

 <div class="container">

    <div class="row">
        <div class="col-6 m-auto">
          <form action="" method="POST">
           <div class="card">
             <div class="card-header text-center"><h1>Login Here</h1></div>
             <div class="card-body">
               

                  <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" autocomplete="false" required>
                  </div>
                  <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" autocomplete="false" required>
                  </div>
                  
               

             </div>
             <div class="card-footer">
              <input type="submit" name="login" value="Submit" class="btn btn-primary btn-sm">
            </div>
            <?php 
              echo $error;
             ?>
           </div>
          </form>  
        </div>

    </div>
 </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>