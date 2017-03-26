<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Multi Page Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
    <div class="main">
        <h2>Form completion</h2>
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
                    $connection = mysql_connect("localhost", "root", "root");
                    $db = mysql_select_db("myjivansaathi", $connection); // Storing values in database.
                    $query = mysql_query("insert into user_profile (name,email,mobile_no,password,date_of_birth) values('$name','$email','$phone','$password','$bday')", $connection);
                    $user_id = mysql_insert_id();
                    $query =mysql_query("insert into profile2 (MotherTongue,Religion,MaritalStatus,Height,Country, State, City,user_id) values('$mothertongue','$religion','$maritalstatus','$height','$country','$state','$city' ,$user_id)", $connection);
                    $query = mysql_query("insert into profile3(highestdegree,occupation,income,express,user_id) values('$highestdegree','$occupation','$income','$express', $user_id)", $connection);
                     $query = mysql_query("insert into profile4 (familyType,Foccupation,Moccupation,Boccupation,Soccupation, familyLiving, contact, about,user_id) values('$familyType','$Foccupation','$Moccupation','$Boccupation','$Soccupation','$familyLiving','$contact','$about', $user_id)", $connection);

                    if ($query) {
                        echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
                    } else {
                        echo '<p><span>Form Submission Failed..!!</span></p>';
                    }
                    unset($_SESSION['post']); // Destroying session.
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
</body>
</html>