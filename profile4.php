<?php include('header.php');
include('menu.php');
?>
<div style="background-color: lightgoldenrodyellow;">

<style xmlns="http://www.w3.org/1999/html">
    .error {color: #FF0000;}
</style>

<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['highestdegree'])){
    if (empty($_POST['occupation'])
        || empty($_POST['income'])
        || empty($_POST['express'])){
        $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
        header("location: profile3.php"); // Redirecting to second page.
    } else {
        // Fetching all values posted from second page and storing it in variable.
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page4'])) {
        header("location: profile.php");// Redirecting to first page.
    }
}

?>
<div>
    <div style="margin: 30px;">
        <ul class="breadcrumb">
            <li><a href="profile.php">Profile</a></li>
            <li ><a href="profile2.php">General Info</a></li>
            <li><a href="profile3.php">Occupation</a></li>
            <li id="id_4" style="display: inline;" ><a id="id_4" onclick="changeBackgroundcolor('red','id_4');">Family Info</a></li>
            <li><a href="profile5.php">Completion</a></li>
            <li style="display: none"><a href="#">Completion</a></li>
        </ul>
    </div>
</div><p>
<span class="error">
<?php
    extract($_SESSION['post']);
// To show error of page 2.
    if (!empty($_SESSION['error_page4'])) {
        echo $_SESSION['error_page4'];
        unset($_SESSION['error_page4']);
    }
    ?></></span>
</p>
<div class="boxclass">
<form method="post" action="profile5.php" style="margin-left: 20px;">
    <div style="margin: 10px;">
    <label>Family Type:<span>*</span> </label><input type="text" name="familyType" value="<?=$familyType;?>">
    <br>
        </div>
        <div style="margin: 10px;">
        <label>Fathers Occupation:<span>*</span></label> <input type="text" name="Foccupation" value="<?=$Foccupation;?>">
    <br>
        </div>
    <div style="margin: 10px;">
        <label>Mothers Occupation :<span>*</span></label><input type="text" name="Moccupation" value="<?=$Moccupation;?>">
    <br>
    </div>
    <div style="margin: 10px;">
        <label>Brothers Occupation :<span>*</span></label><input type="text" name="Boccupation" value="<?=$Boccupation;?>">
    <br>
    </div>
    <div style="margin: 10px;">
        <label>Sisters Occupation :<span>*</span></label><input type="text" name="Soccupation" value="<?=$Soccupation;?>">
    <br>
    </div>
    <div style="margin: 10px;">
         <label>Family Living in :<span>*</span></label><input type="text" name="familyLiving" value="<?=$familyLiving;?>">
    <br>
    </div>
    <div style="margin: 10px;">
          <label>Contact Address :<span>*</span></label><input type="text" name="contact" value="<?=$contact;?>" >
    <br>
    </div>
    <div style="margin: 10px;">
         <label>About:<span>*</span></label> <textarea name="about" rows="5" cols="40"><?=$about;?></textarea>
    <br><br>
    <input type="submit" name="submit" value="Submit">
        </div>
</form>
</div>
</div>

<script>
    changeBackgroundcolor('green','id_4');
    function changeBackgroundcolor(color,id)
    {
        document.getElementById(id).background = color;
        document.getElementById(id).style='border-left: 30px solid pink;background: pink;';
        console.log(   document.getElementsByClassName('.breadcrumb li a:after').style );
        //   document.getElementsByClassName('.breadcrumb li a:after').style = 'border-left: 30px solid green !important';

    }
</script>
<?php include('footer.php'); ?>