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

    <div id="calender_section">
        <h2>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">&lt;&lt;</a>
            <select name="month_dropdown" class="month_dropdown dropdown"><?php echo getAllMonths($dateMonth); ?></select>
            <select name="year_dropdown" class="year_dropdown dropdown"><?php echo getYearList($dateYear); ?></select>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">&gt;&gt;</a>
        </h2>
        <div id="event_list" class="none"></div>
        <!--For Add Event-->
        <div id="event_add" class="none">
            <p>Add Event on <span id="eventDateView"></span></p>
            <p><b>Event Title: </b><input type="text" id="eventTitle" value=""/></p>
            <input type="hidden" id="eventDate" value=""/>
            <input type="button" id="addEventBtn" value="Add"/>
        </div>
        <div id="calender_section_top">
            <ul>
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
        </div>
        <div id="calender_section_bot">
            <ul>
                <?php
                  $year = ''; $month = '';
                $dateYear = ($year != '')?$year:date("Y");
                $dateMonth = ($month != '')?$month:date("m");
                $date = $dateYear.'-'.$dateMonth.'-01';
                $currentMonthFirstDay = date("N",strtotime($date));
                $totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
                $totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
                $boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;

                $dayCount = 1;
                for($cb=1;$cb<=$boxDisplay;$cb++){
                    if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
                        //Current date
                        $currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
                        $eventNum = 0;
                        //Include db configuration file
                        include 'dbConfig.php';
                        //Get number of events based on the current date
                        $result = $db->query("SELECT title FROM events WHERE date = '".$currentDate."' AND status = 1");
                        $eventNum = $result->num_rows;
                        //Define date cell color
                        if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
                            echo '<li date="'.$currentDate.'" class="grey date_cell">';
                        }elseif($eventNum > 0){
                            echo '<li date="'.$currentDate.'" class="light_sky date_cell">';
                        }else{
                            echo '<li date="'.$currentDate.'" class="date_cell">';
                        }
                        //Date cell
                        echo '<span>';
                        echo $dayCount;
                        echo '</span>';

                        //Hover event popup
                        echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
                        echo '<div class="date_window">';
                        echo '<div class="popup_event">Events ('.$eventNum.')</div>';
                        echo ($eventNum > 0)?'<a href="javascript:;" onclick="getEvents(\''.$currentDate.'\');">view events</a><br/>':'';
                        //For Add Event
                        echo '<a href="javascript:;" onclick="addEvent(\''.$currentDate.'\');">add event</a>';
                        echo '</div></div>';

                        echo '</li>';
                        $dayCount++;
                        ?>
                    <?php }else{ ?>
                        <li><span>&nbsp;</span></li>
                    <?php } } ?>
            </ul>
        </div>
    </div>


</div>


</html>