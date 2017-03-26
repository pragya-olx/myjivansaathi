<?php include('header.php');
include('menu.php');
?>
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
        <ul style="list-style: none;">
            <li style="display: inline;margin:50px 0px;  padding: 15px;background-color: lightyellow;">Step1</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow">Step2</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow">Step3</li>
            <li style="display: inline;margin:50px 0px; padding: 15px;background-color: lightgreen ;box-shadow: 2px 2px 2px lightgreen"">Step4</li>
            <li style="display: inline;margin:50px 0px;padding: 15px;background-color: lightyellow;"">Step5</li>
        </ul>
    </div>
</div><p>
<span class="error">
<?php
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
    <label>Family Type:<span>*</span> </label><input type="text" name="familyType" >
    <br>
        </div>
        <div style="margin: 10px;">
        <label>Fathers Occupation:<span>*</span></label> <input type="text" name="Foccupation">
    <br>
        </div>
    <div style="margin: 10px;">
        <label>Mothers Occupation :<span>*</span></label><input type="text" name="Moccupation" >
    <br>
    </div>
    <div style="margin: 10px;">
        <label>Brothers Occupation :<span>*</span></label><input type="text" name="Boccupation" >
    <br>
    </div>
    <div style="margin: 10px;">
        <label>Sisters Occupation :<span>*</span></label><input type="text" name="Soccupation" >
    <br>
    </div>
    <div style="margin: 10px;">
         <label>Family Living in :<span>*</span></label><input type="text" name="familyLiving" >
    <br>
    </div>
    <div style="margin: 10px;">
          <label>Contact Address :<span>*</span></label><input type="text" name="contact" >
    <br>
    </div>
    <div style="margin: 10px;">
         <label>About:<span>*</span></label> <textarea name="about" rows="5" cols="40"></textarea>
    <br><br>

    <input type="submit" name="submit" value="Submit">
        </div>
</form>
</div>