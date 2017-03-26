<?php include('header.php');
include('menu.php');
?>

<?php
$connection = mysql_connect("localhost", "root", "root");
$db = mysql_select_db("myjivansaathi", $connection); // Storing values in database.
$query = mysql_query("select * from user_profile", $connection);
while ($row = mysql_fetch_array($query, MYSQL_BOTH)) {
?>
    <div style="clear: both;">
    <a href="/detail.php?id=<?php echo $row['id'];?>">
        <div style ="border:1px solid red; padding: 5px; margin : 5px;float: left; background-color: lightgray; height:100px; width:100px;">
            <p> <img style="height: 80px;" src="assets/girl.png"></img></p>
        </div>


        <div  style ="border: 1px solid blue; padding: 5px; float:right; margin: 5px;background-color: lightgray; height:100px;width: 730px;"">
            <span> Name: <?php echo $row['name'];?></span><br>
             <span> Date Of Birth: <?php echo $row['date_of_birth'];?></span><br>
              <span> Mobile No: <?php echo $row['mobile_no'];?></span><br>
               <span> Email: <?php echo $row['email'];?></span><br>
        </div>
        </a>
    </div>


<?php
}
?>
