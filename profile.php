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
 <span class="error">
 <!---- Initializing Session for errors --->
     <?php
     if (!empty($_SESSION['error'])) {
         echo $_SESSION['error'];
         unset($_SESSION['error']);
     }
     ?>
 </span>



<div>
    <div style="margin: 30px;">
        <ul style="list-style: none;">
            <li style="display: inline;margin:50px 0px;  padding: 15px;background-color: lightgreen;box-shadow: 2px 2px 2px lightgreen">Step1</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow;"">Step2</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow;"">Step3</li>
            <li style="display: inline;margin:50px 0px; padding: 15px;background-color: lightyellow;"">Step4</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow;"">Step5</li>
        </ul>
    </div>
</div>




<div class="boxclass">
        <form action="profile2.php" method="post">
            <div style="margin: 10px;">
                <label>Full Name :<span>*</span></label>
                <input name="name" type="text" placeholder="Ex-James Anderson" required> <br/>
            </div>
            <div style="margin: 10px;">
                <label>Email :<span>*</span></label>
                <input name="email" type="email" placeholder="Ex-anderson@gmail.com" required><br/>
            </div>
            <div style="margin: 10px;">
                <label>Contact :<span>*</span></label>
                <input name="phone" type="text" placeholder="10-digit number" required><br/>
            </div>
            <div style="margin: 10px;">
                <label>Password :<span>*</span></label>
                <input name="password" type="Password" placeholder="*****" /><br/>
            </div>
            <div style="margin: 10px;">
                <label>Re-enter Password :<span>*</span></label>
                <input name="confirm" type="password" placeholder="*****" ><br/>
            </div>
            <div style="margin: 10px;">
                <label>Date of Birth :<span>*</span></label>
                <input name="bday" type="date" placeholder="2/3/2017" /><br/>
             </div>
            <div style="margin: 10px;">
                <input type="reset" value="Reset" />
                <input type="submit" value="Next" />
            </div>
        </form>
    </div>