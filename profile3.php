<?php include('header.php');
include('menu.php');
?>
<style>
    .error {color: #FF0000;}
</style>

<?php

session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['mothertongue'])){
    if (empty($_POST['religion'])
        || empty($_POST['maritalstatus'])
        || empty($_POST['height'])
        || empty($_POST['country'])
        || empty($_POST['state'])){
        $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
        header("location: profile2.php"); // Redirecting to second page.
    } else {
        // Fetching all values posted from second page and storing it in variable.
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page3'])) {
        header("location: profile.php");// Redirecting to first page.
    }
}

?>

<p><span class="error" style="margin-left: 50px;">
    <?php
    // To show error of page 2.
    if (!empty($_SESSION['error_page3'])) {
        echo $_SESSION['error_page3'];
        unset($_SESSION['error_page3']);
    }
    ?></span></p>
<div class="boxclass">

<form method="post" action="profile4.php" style="margin-left: 20px;">
    <label>Highest degree:</label> <input type="text" name="highestdegree">
    <br>
    <label>Occupation:</label><input type="text" name="occupation" >
    <br>
    <label>Annual Income:</label> <input type="text" name="income" >
    <br>
    <label>Express about yourself:</label> <textarea name="express" rows="5" cols="40"></textarea>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
    </div>

