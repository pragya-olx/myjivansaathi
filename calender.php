<html><?php
include_once('header.php');
?>
    <body>
<?php
include('menu.php');?>



<h3 style="margin: 12px 151px;background: beige;"> Build your event calender. Mark the important dates! </h3>
    <link type="text/css" rel="stylesheet" href="assets/style.css"/>
<link type="text/css" rel="stylesheet" href="/assets/add-new-event.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<?php
include('helper.php');?>
<div id="calendar_div">

    <?php  getCalender(); ?>

</div>


</html>