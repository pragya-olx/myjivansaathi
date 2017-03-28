<?php include('header.php');
include('menu.php');
?>
<div style="background-color: lightgoldenrodyellow;">

<style>
    .error {color: #FF0000;}
</style>

<?php

session_start();
extract($_SESSION['post']);
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
<div>

    <div>
        <div >
            <ul class="breadcrumb">
                <li><a href="profile.php">Profile</a></li>
                <li ><a href="profile2.php" >General Info</a></li>
                <li style="display: inline;background-color: lightgreen;box-shadow: 2px 2px 2px lightgreen"><a  id="id_3" onclick="changeBackgroundcolor('pink','id_3')";>Occupation</a></li>
                <li ><a href="profile4.php">Family Info</a></li>
                <li><a href="profile5.php">Completion</a></li>
                <li style="display: none"><a href="#">Completion</a></li>
            </ul>
        </div>
    </div>
</div>
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
    <div style="margin: 10px;">
    <label>Highest degree:</label> <input type="text" name="highestdegree" value="<?=$highestdegree;?>">
    <br>
    </div>
    <div style="margin: 10px;">
    <label>Occupation:</label><input type="text" name="occupation" value="<?=$occupation;?>">
    <br>
    </div>
    <div style="margin: 10px;">
    <label>Annual Income:</label> <input type="text" name="income" value="<?=$income;?>">
    <br>
    </div>
    <div style="margin: 10px;">
    <label>Express about yourself:</label> <textarea name="express" rows="5" cols="40"><?=$express;?></textarea>
    <br>
    <input type="submit" name="submit" value="Submit">
        </div>
</form>
    </div>

</div>

<script>
    changeBackgroundcolor('green','id_3');
    function changeBackgroundcolor(color,id)
    {
        document.getElementById(id).background = color;
        document.getElementById(id).style='border-left: 30px solid pink;background: pink;';
        console.log(   document.getElementsByClassName('.breadcrumb li a:after').style );
        //   document.getElementsByClassName('.breadcrumb li a:after').style = 'border-left: 30px solid green !important';

    }
</script>
<?php include('footer.php'); ?>