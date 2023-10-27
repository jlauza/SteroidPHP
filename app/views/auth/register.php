<?php
  // require '../../../app/controller/UserController.php';
  // require_once(dirname(__FILE__) ."../../controller/UserController.php");

  $controller = new UserController();

  $request = [
    "fname"=> "",
    "lname"=> "",
    "email"=> "",
    "password"=> "",
    "confirm_password"=> "",
  ];

  $controller->createUser($request);
  
?>

<?php echo $error; ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
 </div>

 <div class="container">
    <label for="fname"><b>Firstname</b></label><br/>
    <input type="text" placeholder="Enter Firstname" name="fname" required>
  </div>
 
  <div class="container">
    <label for="lname"><b>Lastname</b></label><br/>
    <input type="text" placeholder="Enter Firstname" name="lname" required>
  </div>  

 <div class="container">
    <label for="uname"><b>Email</b></label><br/>
    <input type="text" placeholder="Enter Username" name="email" required>
  </div>

  <div class="container">
    <label for="psw"><b>Password</b></label><br/>
    <input type="password" placeholder="Enter Password" name="password" required>
  </div>

  <div class="container">
    <label for="psw"><b>Confirm Password</b></label><br/>
    <input type="password" placeholder="Enter Password" name="confirm_password" required>
  </div>  

  <div class="container">
    <br />
    <button type="submit">Register</button>
  </div>

  <div class="container">
    <p>Have an account? <a href="/login">Login now</a></p>
  </div>  
</form>