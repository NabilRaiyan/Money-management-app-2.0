<!DOCTYPE html>
<html lang="en">

<title>Forgot Password?</title>
<?php include "./header.php"; ?>


<div class="forgot-pass-div" data-aos="fade-up" data-aos-duration="1000">
  <a href="./home_view.php" class="logo"><span class="logo-img">F</span>inTech</a>
  <p class="forgot-pass-description">
    Enter the email address associated with your <br> account and we will send you a link to reset your password
    <form class="forgot-pass-form" action="" method="post">
      <input name="forgot-email-input" placeholder="Enter Your Email" type="text" class="forgot-pass-email-input">
      <a class="forgot-pass-conbinue-btn" href="#">Conbinue</a>
    </form>
    <p class="other-login-txt">Don't have any account?</p>
    <a class="forgot-signup" href="./services_view.php">Sign Up</a>
  </p>
</div>



<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <?php include "./footer.php" ?>
</body>
</html>
