<?php include('header.php');
include('menu.php');
?>
<style>
    .error {color: #FF0000;}
</style>

<?php

session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['name'])){
    if (empty($_POST['name'])
        || empty($_POST['password'])
        || empty($_POST['email'])
        || empty($_POST['phone'])
        || empty($_POST['bday'])){
        // Setting error message
        $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: profile.php"); // Redirecting to first page
    } else {
        // Sanitizing email field to remove unwanted characters.
        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        // After sanitization Validation is performed.
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            // Validating Contact Field using regex.
            if (!preg_match("/^[0-9]{10}$/", $_POST['phone'])){
                $_SESSION['error'] = "10 digit contact number is required.";
                header("location: profile.php");
            }
            else{
                foreach ($_POST as $key => $value) {
                    $_SESSION['post'][$key] = $value;
                }
            }
        } else {
            $_SESSION['error'] = "Invalid Email Address";
            header("location: profile.php");//redirecting to first page
        }
    }
} else {
    if (empty($_SESSION['error_page2'])) {
        header("location: profile.php");//redirecting to first page
    }
}?>


<div>
    <div style="margin: 30px;">
        <ul style="list-style: none;">
            <li style="display: inline;margin:50px 0px;  padding: 15px;background-color: lightyellow;">Step1</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightgreen;box-shadow: 2px 2px 2px lightgreen"">Step2</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow;"">Step3</li>
            <li style="display: inline;margin:50px 0px; padding: 15px;background-color: lightyellow;"">Step4</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow;"">Step5</li>
        </ul>
    </div>
</div>


<p style="margin-top:20px;">
<span class="error" style="margin-left: 50px;">
<?php
if(isset($_SESSION['error_page2'])) {
    echo $_SESSION['error_page2'];
    unset($_SESSION['error_page2']);
} ?>
</span></p>
<div class="boxclass">
<form method="post" action="profile3.php" style="margin-left: 20px;">
    <div style="margin: 10px;">
    <label>Mothertongue<span>*</span></label>: <input type="text" name="mothertongue">
    <br>
    </div>
    <div style="margin: 10px;">
    <label>Religion<span>*</span></label>: <input type="text" name="religion" >
    <br>
    </div>
    <div style="margin: 10px;">
    <label>Marital Status<span>*</span></label>: <input type="text" name="maritalstatus" >
    <br>
    </div>
    <div style="margin: 10px;">
    <label>Height<span>*</span></label>: <input type="text" name="height" >
    <br>
    </div>
    <div style="margin: 10px;">
    <label>Country<span>*</span></label>: <input type="text" name="country" >
    <br>
    </div>
    <div style="margin: 10px;">
    <label>State<span>*</span></label>: <input type="text" name="state" >
    <br>
    </div>
    <div style="margin: 10px;">
    <label>City<span>*</span></label>: <input type="text" name="city">
    <br><br>
    <input type="submit" name="submit" value="Submit">
        </div>
</form>
    </div>

