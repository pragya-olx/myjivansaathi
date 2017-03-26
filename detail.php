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
    <div style="padding:5px; margin:10px; width:700px;height:200px;float: left;">
        <img class="mySlides" src="assets/detail1.jpg">
        <img class="mySlides" src="assets/detail2.jpg">
        <img class="mySlides" src="assets/detail3.jpg">
        <img class="mySlides" src="assets/detail4.jpg">

        <button style="margin-left: 300px;" onclick="plusDivs(-1)">&#10094;</button>
        <button style="margin-right: 200px;"  onclick="plusDivs(+1)">&#10095;</button>
    </div>

    <div style="padding:5px; margin:10px; height:200px; width: 75px; float:right;">
        <h6>Maritalstatus : <?=$row['Maritalstatus'];?></h6>
        <h6>Height : <?=$row['Height'];?></h6>
    </div>
    <div style="clear:both;"></div>
    <div style="margin:10px; padding: 5px; height: 600px; width: 800px;">
        <h3>Description</h3>
        <div>
            <h5>
                Address and family
            </h5>
            <div style="float:left">
                MotherTongue : <?=$row['Mothertongue'];?><br/>
                Religion: <?=$row['Religion'];?></br/>

                <h5>Address</h5>
                <h6>Country : <?=$row['Country'];?></h6>
                <h6>State : <?=$row['State'];?></h6>
                <h6>City : <?=$row['City'];?></h6>

                <h6>Highestdegree : <?=$row['highestdegree'];?></h6>
                <h6>Occupation : <?=$row['occupation'];?></h6>
                <h6>Income : <?=$row['income'];?></h6>
            </div>
            <div style="float:right;">
                Express : <?=$row['express'];?><br/>
                FamilyType: <?=$row['familyType'];?></br/>

                <h5>Family Occupation</h5>
                <h6>Foccupation : <?=$row['Foccupation'];?></h6>
                <h6>Moccupation : <?=$row['Moccupation'];?></h6>
                <h6>Boccupation : <?=$row['Boccupation'];?></h6>

                <h6>Soccupation : <?=$row['Soccupation'];?></h6>
                <h6>FamilyLiving : <?=$row['familyLiving'];?></h6>
                <h6>Contact : <?=$row['contact'];?></h6>
            </div>
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