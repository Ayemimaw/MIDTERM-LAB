
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
              <h2 class="title">Admin Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="eid"/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="adminpass"/>
            </div>
            <button type="submit" class="btn solid" name = "submit">LOGIN</button>
            <?php
            if(isset($_POST['submit'])){
              include 'adminlogin.php';
            }
            ?>
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>One of the Students?</h3>
            <p>
              Go to the students log-in form to proceed with your personal
              information inquiry and many more.
            </p>
            <form method="POST"><button class="btn transparent" id="sign-in-btn" name="go">GO</button>
              <?php
              if(isset($_POST['go'])){
                header("Location: http://localhost/Project/index.php");
              }
            ?>
            </form>
          </div>
          <img src="img/register.svg" class="image" alt="" />
       
      </div>
    </div>
  </div>
   <script src="app.js"></script>
  </body>
</html>
