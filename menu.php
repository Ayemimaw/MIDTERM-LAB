<?php
  include 'connection2.php';

  $conn = OpenCon();

  $sql = "SELECT * FROM student_info";
  $result = $conn -> query($sql);

    if($result -> num_rows > 0){
        while($rows = $result -> fetch_assoc()){
            $Firstname = $rows['FirstName'];
            $Lastname = $rows['LastName'];
            $Email = $rows['Email'];
            $Campus = $rows['Campus'];
            $Section = $rows['Section'];
            $Course = $rows['Course'];
            $Year = $rows['Year'];
            $Address = $rows['Address'];
            $Contact = $rows['ContactNo'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="shortcut icon" href="img/qculogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/menustyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <div class="loader">
        <img src="img/loading.gif" alt="Loading..." />
    </div>

    <header class="headerrr">
        <a href="#" class="header__logo"><?php echo $_SESSION['studnumber'];?></a>

        <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">

                <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                <div class="nav__perfil">
                    <div class="nav__img">
                        <img src="img/sad.jpg" alt="">
                    </div>

                    <div>
                        <a href="#" class="nav__name"><?php echo $Firstname , "&nbsp;", $Lastname;?></a>
                        <span class="nav__profesion">
                         <?php echo $Course;?>
                          <br>
                        </span>
                    </div>
                </div>

                <div class="nav__menu">

                </div>

                <div class="nav__social">
                </div>
            </div>
        </nav>
    </header>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>

    <!--image card layout start-->
    <div class="container">
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <div class="image">
          <img src="img/showgrade.jpg" alt="">
          <div class="details">
            <h2>Show <span>Grades</span></h2>
            <p>Show your Semestral Grades Through the School Year</p>
            <div class="more">
              <a href="grades.php" class="read-more">Click to <span>Continue</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="img/pay.jpg" alt="">
          <div class="details">
            <h2>Billing &<span>Payment</span></h2>
            <p>This panel will show the statement of your account, like tuition fees and miscellanious fees.</p>
            <div class="more">
              <a href="billing.php" class="read-more">Click to <span>Continue</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="img/forms.jpg" alt="">
          <div class="details">
            <h2>Request for <span>Forms</span></h2>
            <p>This panel will allow you to request specific forms/requirements and also show your pending ones.</p>
            <div class="more">
              <a href="reqform2.php" class="read-more">Click To <span>Continue</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
      </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <div class="image">
          <img src="img/profile.jpg" alt="">
          <div class="details">
            <h2>Profile <span>Dashboard</span></h2>
            <p>You will see details and information regarding you about your school curricular activities and etc.</p>
            <div class="more">
              <a href="profile.php" class="read-more">Click to <span>Continue</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="img/schedule.jpg" alt="">
          <div class="details">
            <h2>News &<span> Event Calendar</span></h2>
            <p>This panel will show your relevant news along with a event calendar.</p>
            <div class="more">
              <a href="eventcal.php" class="read-more">Click to <span>Continue</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="img/goodbye.jpg" alt="">
          <div class="details">
            <h2>Logging <span>Out?</span></h2>
            <p>This will go back to the log-in form panel as usual.</p>
            <div class="more">
              <a href="index.php" class="read-more">Click to <span>Continue</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
                <a href="#"><i class="fas fa-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
      </div>

      <footer class="footer-distributed" style="position: static;">

			<div class="footer-left">
      <img src="img/qculogo.png">

        <h3>Quezon City <span> University</span></h3>

				<p class="footer-company-name">© 1994 Quezon City Ordinance Institute Pvt. Ltd.</p>

			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>673 Quirino Highway
              , San Bartolome,</span>
              1116 Quezon City, Philippines</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>289368050</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@eduonix.com">qcu_inquiry@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the Campus</span>
					The Quezon City Polytechnic was created on March 1, 1994 by virtue of the City Council Ordinance No. SP-171 an institution to primarily undertake the training and development of qualified technicians and skilled workers.</p>
				<div class="footer-icons">
				</div>
			</div>
		</footer>

      <!--image row end-->
    </div>
    <!--image card layout end-->
<script type="text/javascript">
    window.addEventListener("load", function () {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
    });
    </script>
  </body>
</html>
