<?php include('header.php');
include('menu.php');

$id = $_GET['id'];
$connection = mysql_connect("localhost", "root", "root");
$db = mysql_select_db("myjivansaathi", $connection); // Storing values in database.
$query = mysql_query("select * from user_profile up,profile2 p2,profile3 p3,profile4 p4 where p2.user_id = p3.user_id AND p3.user_id = p4.user_id and p2.user_id = up.id and up.id = $id", $connection);
if($query    === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
?>

<div>
    <div style="padding:5px; margin:10px; width:300px;height:300px;float: left;">
        <img class="mySlides" src="assets/detail1.jpg">
        <img class="mySlides" src="assets/detail2.jpg">
        <img class="mySlides" src="assets/detail3.jpg">
        <img class="mySlides" src="assets/detail4.jpg">

        <button style="margin-left: 65px;" onclick="plusDivs(-1)">&#10094;</button>
        <button style="margin-right: 159px;"  onclick="plusDivs(+1)">&#10095;</button>
    </div>


    <div style="margin:10px; padding: 5px; height: 600px; width: 800px;">

        <div>
            <div style="padding:3px; margin-left:60px; height:100px; width: 400px; float:left;">
                <h6>Mobile No : <?=$row['mobile_no'];?></h6>
                <h6>Email : <?=$row['email'];?></h6>

                <h6>Name : <?=$row['name'];?></h6>
                <h6>Date of birth : <?=$row['date_of_birth'];?></h6>
                <h6>Express : <?=$row['express'];?></h6>
                <h6>FamilyType: <?=$row['familyType'];?><h6>

                        <h6>Highestdegree : <?=$row['highestdegree'];?></h6>
                        <h6>Occupation : <?=$row['occupation'];?></h6>
                        <h6>Income : <?=$row['income'];?></h6>
            </div>
            <div style="clear:both;"></div>
            <div style="margin-left: 341px;">
                <h3 style="margin-top: -60px">Description</h3>
                <h5>
                    Address and family
                </h5>
            </div>
            <div style="float:left; margin-left:50px;">
                <h6>MotherTongue : <?=$row['Mothertongue'];?></h6>
                <h6>Religion: <?=$row['Religion'];?></h6>
                <h6>Maritalstatus : <?=$row['Maritalstatus'];?></h6>
                <h6>Height : <?=$row['Height'];?></h6>
            </div>
            <div style="float:left; margin-left:150px;">
                <h4>Address</h4>
                <h6>Country : <?=$row['Country'];?></h6>
                <h6>State : <?=$row['State'];?></h6>
                <h6>City : <?=$row['City'];?></h6>
                <h6>FamilyLiving : <?=$row['familyLiving'];?></h6>
                <h6>Contact : <?=$row['contact'];?></h6>

            </div>
            <div style="float:right; margin-right:70px;">
                <h4>Family Occupation</h4>
                <h6>Foccupation : <?=$row['Foccupation'];?></h6>
                <h6>Moccupation : <?=$row['Moccupation'];?></h6>
                <h6>Boccupation : <?=$row['Boccupation'];?></h6>

                <h6>Soccupation : <?=$row['Soccupation'];?></h6>

            </div>
            <div style="clear:both"></div>
        </div>
    </div>
    <?php }?>
</div>

<script>
var slideIndex = 1;
    showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}
</script>