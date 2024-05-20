<?php
 include "./subheader_small_business_views.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>My Savings </title>
</head>
<link rel="stylesheet" href="../css/styles.css">

<div class="savings-body" data-aos="fade-up" data-aos-duration="1000">
    <h1 class="savings-title">My Savings</h1>
    <h4 class="user-name">Welcome, <?php echo $_SESSION['username']; ?></h4>

    <div class="add-savings-div">
        <div class="current-balace-div">
                <h2 class="current-balance-title">CURRENT BALANCE</h2>
                <h3 class="balance-amount">$40,0000</h3>
        </div>

        <!-- add savings -->
        <div class="add-savings">
            <h2 class="add-savings-title">Enter your savings</h2>
            <form action="" method="post" class="add-savings-form" id="savings">
                <div class="getid"><input class="savings-name-input" type ="text" id="savings_id" placeholder="Id" disabled></div>
                <input type="text" class="savings-name-input" id="savings-name"  placeholder="Savings name">
                <input type="text" class="savings-amount-input" id="savings-amount" placeholder="Savings amount">

                <label for="">Select type</label>
                <select class="savings-type" id="savings-type">
                    <option selected value=""></option>
                    <option value="technology">Technology</option>
                    <option value="office">Office Space</option>
                    <option value="marketing">Marketing</option>
                    <option value="transport">Transport</option>
                    <option value="others">Others</option>

                </select>
                <a class="add-savings-btn" type="submit" id = "addsavings" href=" " >Add Savings</a>
                <div id="msg"></div>
                <script src="../js/jquery.js"></script>
                <script src="../js/small_business_savings_ajax.js"></script>
            </form>
        </div>
    </div>

    <!-- savings history -->
    <div class="savings-history-div" >
    <input type="text" class="savings-name-input" id="search" placeholder="Search by type">

        <h1 class="savings-history-title">Savings History</h1>
        <div class="savings-history-list" id="savingshistory"></div>
    </div>
    
</div>


<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>


