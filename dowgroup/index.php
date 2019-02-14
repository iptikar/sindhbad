<?php 
session_start();
ob_start();

require 'controller/controller.php';
$obj = new DowGroup();



?>
<!doctype html>
<html lang="en" >

<head >

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<h1 class="text-center">Dow Group</h1>
<div class="container pt-3">
  <div class="row justify-content-sm-center">
    <div class="col-sm-6 col-md-4">

      <div class = "php-message">
          
<?php


   $obj->login('email', 'password');

 ?>

        <div class="alert alert-danger">
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>


      </div>
      <div class="card border-info text-center">
        <div class="card-header">
          Sign in to continue
        </div>
        <div class="card-body">
          <img src="https://placeimg.com/128/128/tech/sepia">
          <h4 class="text-center"></h4>
          

          <form class="form-signin" method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
            <input name = "email" type="text" class="form-control mb-2" placeholder="Email" required autofocus>
           

            <input name = "password" type="password" class="form-control mb-2" placeholder="Password" required>
           

            <label class="checkbox float-left">
              <input type="radio" value="admin" name = "role">
              Administrator
            </label>


<label class="checkbox float-left ">
              <input type="radio" class = "" value="agent" name = "role">
              Agent
            </label>

 <button class="btn btn-lg btn-primary btn-block mb-1" type="submit">Sign in</button>
            

           


          </form>
        </div>
      </div>
     
    </div>
  </div>
</div>

<hr>




</body>
</html>