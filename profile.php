<?php include('header.php');
include('menu.php');
?>
<style>
    .error {color: #FF0000;}
</style>

<?php

session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
?>
<div style=" margin-top: 30px"><span class="spanclass">Fill out the form below!</span></div>
 <span class="error">
 <!---- Initializing Session for errors --->
     <?php
     if (!empty($_SESSION['error'])) {
         echo $_SESSION['error'];
         unset($_SESSION['error']);
     }
     ?>
 </span>
<div class="boxclass">
        <form action="profile2.php" method="post">
            <label>Full Name :<span>*</span></label>
            <input name="name" type="text" placeholder="Ex-James Anderson" required> <br/>
            <label>Email :<span>*</span></label>
            <input name="email" type="email" placeholder="Ex-anderson@gmail.com" required><br/>
            <label>Contact :<span>*</span></label>
            <input name="phone" type="text" placeholder="10-digit number" required><br/>
            <label>Password :<span>*</span></label>
            <input name="password" type="Password" placeholder="*****" /><br/>
            <label>Re-enter Password :<span>*</span></label>
            <input name="confirm" type="password" placeholder="*****" ><br/>
            <label>Date of Birth :<span>*</span></label>
            <input name="bday" type="date" placeholder="2/3/2017" /><br/>
            <input type="reset" value="Reset" />
            <input type="submit" value="Next" />
        </form>
    </div>