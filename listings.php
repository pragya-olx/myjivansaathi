<?php include('header.php');
include('menu.php');
?>
<style xmlns="http://www.w3.org/1999/html">
    span {}
</style>
<div style="background-color: lightgoldenrodyellow;">
<?php include 'dbConfig.php';
 $query = $db->query("select * from user_profile");
$i=0;
while ($row = $query->fetch_assoc()){
$i++;
?>
    <div style="clear: both;margin-top:10px;">
        <div style="padding:5px;margin : 5px;margin-left:67px;float: left; background-color: white; height:100px; width:100px;">
            <p> <img style="height: 80px;" src="assets/girl.png"></img></p>
        </div>


        <div style ="padding: 5px; float:right; margin: 5px;margin-right:93px;background-color: white; height:100px;width: 1000px;cursor:pointer" onclick="openPage('<?php echo $row['id'];?>')" id=<?php echo $row['id'];?>>
            <span style="color:darkred;"> Name: <?php echo $row['name'];?></span><br>
             <span style="color:darkred;"> Date Of Birth: <?php echo $row['date_of_birth'];?></span><br>
              <span style="color:darkred;"> Mobile No: <?php echo $row['mobile_no'];?></span><br>
               <span style="color:darkred;"> Email: <?php echo $row['email'];?></span><br>
        </div>
        <div style="margin-left:500px;cursor: pointer">
            <span style="float:right;margin-right:650px;color:darkred;display: inline ">
                <img height="40" width="40" onclick="shortlistIcon('<?php echo $i;?>');" id="shortlist_<?=$i?>" src="assets/shortlist-before.png"></img>
                <img height="40" width="40" id="shortlist_<?=$i?>" src="assets/mail.png"></img>
                <img height="40" width="40" id="shortlist_<?=$i?>" src="assets/call.png"></img>
            </span>

        </div>
 </div>


<?php
}

?>
</div>
<script>
    function shortlistIcon(e){
        if(document.getElementById('shortlist_'+e).src.includes('assets/shortlist-after.png')){
            document.getElementById('shortlist_'+e).src = 'assets/shortlist-before.png';
        }
        else{
            document.getElementById('shortlist_'+e).src = 'assets/shortlist-after.png';
            //ajax call to put data in database
        }
//        $.ajax({url: "/shortlist.php", success: function(result){
//            $("#div1").html(result);
//        }});
    }
    function openPage(i){
        window.location = 'detail.php?id='+i;
    }
</script>
<?php include('footer.php'); ?>