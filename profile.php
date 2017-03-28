<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>
<body style="background-color:cornsilk;">
<div style="background-color: lightgoldenrodyellow;">
    <?php
include('menu.php');
?>

<?php

session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
?>



<div style="background-color: lightgoldenrodyellow;">
<div>
    <div >
        <ul class="breadcrumb">
            <li style="display: inline; "><a  id="id_1"  href="/profile.php" onclick="changeBackgroundcolor('red','id_1');">Profile</a></li>
            <li><a href="/profile2.php">General Info</a></li>
            <li><a href="/profile3.php">Occupation</a></li>
            <li ><a href="/profile4.php">Family Info</a></li>
            <li><a href="/profile5.php">Completion</a></li>
            <li style="display: none"><a href="#">Completion</a></li>
        </ul>
    </div>
</div>



<?php
if(($_SESSION && isset($_SESSION['post']))) {
    extract($_SESSION['post']);
}
else{
    $name= '';$email = ''; $phone='';$password = ''; $confirm = ''; $bday = '';
}
?>
<div class="boxclass">
        <form action="profile2.php" method="post" id="form1">
            <div style="margin: 10px;">
                <label>Full Name :<span>*</span></label><br/>
                <input name="name" type="text" placeholder="Ex-James Anderson" value="<?=$name;?>"required> <br/>
            </div>
            <div style="margin: 10px;">
                <label>Email :<span>*</span></label><br/>
                <input name="email" type="email" placeholder="Ex-anderson@gmail.com" value="<?=$email;?>" required><br/>
            </div>
            <div style="margin: 10px;">
                <label>Contact :<span>*</span></label><br/>
                <input name="phone" type="text" placeholder="10-digit number" value="<?=$phone;?>" required><br/>
            </div>
            <div style="margin: 10px;">
                <label>Password :<span>*</span></label><br/>
                <input name="password" type="Password" placeholder="*****"  value="<?=$password;?>" /><br/>
            </div>
            <div style="margin: 10px;">
                <label>Re-enter Password :<span>*</span></label><br/>
                <input name="confirm" type="password" placeholder="*****" value="<?=$confirm;?>" ><br/>
            </div>
            <div style="margin: 10px;">
                <label>Date of Birth :<span>*</span></label><br/>
                <input name="bday" type="date" placeholder="2/3/2017"  value="<?=$bday;?>"/><br/>
             </div>
            <div style="margin: 10px;">
                <input type="submit" value="Next" >
            </div>
        </form>

     <span class="error">
         <?php
         if (!empty($_SESSION['error'])) {
             echo $_SESSION['error'];
             unset($_SESSION['error']);
         }
         ?>
 </span>
</div>

</div>

<script>
    document.getElementById('form1').trigger("reset");
    changeBackgroundcolor('green','id_1');
    function changeBackgroundcolor(color,id)
    {
        document.getElementById(id).background = color;
        document.getElementById(id).style='border-left: 30px solid pink;background: pink;';
        console.log(   document.getElementsByClassName('.breadcrumb li a:after').style );
     //   document.getElementsByClassName('.breadcrumb li a:after').style = 'border-left: 30px solid green !important';

    }
</script>
    <?php include('footer.php'); ?>
    </body>

    </html>