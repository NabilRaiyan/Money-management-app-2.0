<?php include "./header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<title>Log In</title>



<div class="login-div" data-aos="fade-up" data-aos-duration="1000">
    <?php echo '<p class="unsuccess-message">' . $login_error_message . '</p>'; ?>
    <!-- left section  -->
    <div class="left-section" data-aos="fade-left" data-aos-duration="1000">
        <h1 class="login-title">Login</h1>
        <p class="login-subtitle">Login with your account</p>

        <form action="" method="POST">
            <input placeholder="Enter email" class="login-user-email-input" name="login-email" type="text">
            <?php echo '<p class="error" for="">' . $emailerror . '</p>'; ?>
            <input placeholder="Enter password" class="login-user-password-input" name="login-password" type="text">
            <?php echo '<p class="error" for="">' . $passworderror . '</p>'; ?>

            <label for="">User Type</label>
            <select class="business_type" name="user-type" id="">
                <option selected value=""></option>
                <option value="personal">Personal User</option>
                <option value="business">Small Business Owner</option>
            </select>
            <?php echo '<p class="error" for="">' . $usertypeerror . '</p>'; ?>

            <a href="./forgot_pass_view.php" class="forgot-pass">Forgot password?</a>
            <button type="submit" class="login-btn" name="Submit">Log In</button>
        </form>
        <p class="other-login-txt">Login with others</p>
        <a href="#" class="google-login-option"><i class="google-icon fa-brands fa-google"></i>Login with google</a>
    </div>

    <!-- right section -->
    <div class="right-section" data-aos="fade-right" data-aos-duration="1000">
        <img class="login-img" src="../assets/login image.png" alt="login image" srcset="">
    </div>
</div>



<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<?php include "./footer.php" ?>
</body>

</html>