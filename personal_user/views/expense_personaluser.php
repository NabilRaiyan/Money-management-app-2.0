<!-- expenses page -->
<?php

include "./subheader_personaluser.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Expenses</title>
</head>


<div class="savings-body" data-aos="fade-up" data-aos-duration="1000">
    <h1 class="savings-title">My Expenses</h1>
    <h4 class="user-name">Welcome</h4>

    <div class="add-savings-div">
        <div class="current-balace-div">
            <h2 class="current-balance-title">CURRENT BALANCE</h2>
            <h3 class="balance-amount">$40,0000</h3>
        </div>

        <!-- add expenses -->
        <div class="add-savings">
            <h2 class="add-savings-title">Enter your Expenses</h2>
            <form action="" method="post" class="add-savings-form" id="expences">
                <div class="getid"><input class="savings-name-input" type="text" id="expense_id" placeholder="Id"
                        disabled></div>
                <input type="text" class="savings-name-input" id="expense-name" placeholder="Expense name">
                <input type="text" class="savings-amount-input" id="expense-amount" placeholder="Expense amount">

                <label for="">Select type</label>
                <select class="savings-type" id="expense-type">
                    <option selected value=""></option>
                    <option value="technology">Technology</option>
                    <option value="office">Office Space</option>
                    <option value="marketing">Marketing</option>
                    <option value="transport">Transport</option>
                    <option value="others">Others</option>

                </select>
                <a class="add-savings-btn" type="submit" id="addexpense" href=" " name="submit">Add Expense</a>
                <div id="msg"></div>
                <script src="../script/jquery-3.7.1.js"></script>
            </form>
        </div>
    </div>

    <!-- savings history -->
    <div class="savings-history-div">
        <h1 class="savings-history-title">Expense History</h1>
        <input type="text" class="savings-name-input" id="search" placeholder="Search by type">
        <div class="savings-history-list" id="expensehistory"> </div>
    </div>

</div>







<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>