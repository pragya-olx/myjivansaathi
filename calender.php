<?php
include_once('header.php');
include_once('functions.php');
include('menu.php');?>

<h3 style="margin: 12px 151px;background: beige;"> Build your event calender. Mark the important dates! </h3>
    <link type="text/css" rel="stylesheet" href="assets/style.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<div id="calendar_div">
    <?php echo getCalender(); ?>
</div>

