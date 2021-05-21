<?php
  include 'connection.php';
  session_start();

  $conn = OpenCon();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $studnumber = mysqli_real_escape_string($conn,$_POST['studno']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $_SESSION['studnumber'] = $studnumber;
    

  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="img/qculogo.png" type="image/x-icon">
    <title>QCU Portal</title>
  </head>

  <body>

  

    <div class="container">

      <div class="forms-container">

        <div class="signin-signup">
          <form class="sign-in-form" method="post">
              <img src="img/qculogo.png" alt="qculogo" width="80px" height="80px">
              <h2 class="title">Student Panel</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="studno"/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <button type="submit" class="btn solid" name = "studlogin">LOGIN</button>

            <?php
              if(isset($_POST['studlogin'])){
                include 'studentlogin.php';
              }
            ?>

          </form>

          

          <form class="sign-up-form" method="POST">
            <img src="img/qculogo.png" alt="qculogo" width="75px" height="75px">
            <h2 class="title">Admin Panel</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="eid" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="adminpass" />
            </div>
            <button type="submit" class="btn solid" name = "admin">LOGIN</button>

            <?php
              if(isset($_POST['admin'])){
                  include 'adminlogin.php';
              }
            ?>

          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Are You The Admin?</h3>
            <p>
              Proceed here to go to the administrations panel form
              where you can edit the contents of each and every student data
            </p>
            <form method="POST"><button class="btn transparent" id="sign-up-btn" name="go"> Go </button> 
            <?php
              if(isset($_POST['go'])){
                header("Location: http://localhost/Project/indexadmin.php");
              }
            ?>
            </form>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>

   
   <script src="app.js"></script>
  </body>
</html>
