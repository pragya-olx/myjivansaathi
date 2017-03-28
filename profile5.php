<?php
include('header.php');
include('menu.php');
?>
<div style="background-color: lightgoldenrodyellow;">
<div class="container" style="background-color: lightpink;">
    <div class="main">


        <div style="margin: 30px;">
            <ul class="breadcrumb">
                <li><a href="profile.php">Profile</a></li>
                <li ><a href="profile2.php">General Info</a></li>
                <li><a href="profile3.php">Occupation</a></li>
                <li ><a href="profile4.php">Family Info</a></li>
                <li style="display: inline;background-color: lightgreen;box-shadow: 2px 2px 2px lightgreen"><a href="profile5.php">Completion</a></li>
                <li style="display: none"><a href="#">Completion</a></li>
            </ul>
        </div>
    </div>
        <?php
        session_start();
        if (isset($_POST['familyType'])) {
            if (!empty($_SESSION['post'])){
                if (empty($_POST['Foccupation'])
                    || empty($_POST['Moccupation'])
                    || empty($_POST['Boccupation'])
                    || empty($_POST['Soccupation'])){
                    // Setting error for page 3.
                    $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
                    header("location: profile4.php"); // Redirecting to third page.
                } else {
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                    extract($_SESSION['post']);
                     // Function to extract array.
                    include 'dbConfig.php';
                    $query = $db->query("insert into user_profile (name,email,mobile_no,password,date_of_birth) values('$name','$email','$phone','$password','$bday')");
                    $user_id = mysql_insert_id();
                    $query =$db->query("insert into profile2 (MotherTongue,Religion,MaritalStatus,Height,Country, State, City,user_id) values('$mothertongue','$religion','$maritalstatus','$height','$country','$state','$city' ,$user_id)");
                    $query = $db->query("insert into profile3(highestdegree,occupation,income,express,user_id) values('$highestdegree','$occupation','$income','$express', $user_id)");
                     $query = $db->query("insert into profile4 (familyType,Foccupation,Moccupation,Boccupation,Soccupation, familyLiving, contact, about,user_id) values('$familyType','$Foccupation','$Moccupation','$Boccupation','$Soccupation','$familyLiving','$contact','$about', $user_id)");

                    if ($query) {
                        echo '<div style="margin:100px; color:firebrick;"><h3>Congrtaulations <br>You are now alive on myjivansaathi. Browse more <a href="listings.php" style="">profiles</a></h3></div>';
                    } else {
                        echo '<p><span>Form Submission Failed..!!</span>Browse more  <a href=" listings.php">profiles</a></p>';
                    }
                   //unset($_SESSION['post']); // Destroying session.
                }
            } else {
                 header("location: profile.php"); // Redirecting to first page.
            }
        } else {
            header("location: profile.php"); // Redirecting to first page.
        }
        ?>
    </div>
</div>
</div>