<?php
/*
 * Function requested by Ajax
 */
if(isset($_POST['func']) && !empty($_POST['func'])){
    switch($_POST['func']){
        case 'getCalender':
            getCalender($_POST['year'],$_POST['month']);
            break;
        case 'getEvents':
            getEvents($_POST['date']);
            break;
        //For Add Event
        case 'addEvent':
            addEvent($_POST['date'],$_POST['title']);
            break;
        default:
            break;
    }
}

/*
 * Get calendar full HTML
 */
function getCalender($year = '',$month = '')
{

    ?>

    <script type="text/javascript">
        function getCalendar(target_div,year,month){
            $.ajax({
                type:'POST',
                url:'functions.php',
                data:'func=getCalender&year='+year+'&month='+month,
                success:function(html){
                    $('#'+target_div).html(html);
                }
            });
        }

        function getEvents(date){
            $.ajax({
                type:'POST',
                url:'functions.php',
                data:'func=getEvents&date='+date,
                success:function(html){
                    $('#event_list').html(html);
                    $('#event_add').slideUp('slow');
                    $('#event_list').slideDown('slow');
                }
            });
        }
        //For Add Event
        function addEvent(date){
            $('#eventDate').val(date);
            $('#eventDateView').html(date);
            $('#event_list').slideUp('slow');
            $('#event_add').slideDown('slow');
        }
        //For Add Event
        $(document).ready(function(){
            $('#addEventBtn').on('click',function(){
                var date = $('#eventDate').val();
                var title = $('#eventTitle').val();
                $.ajax({
                    type:'POST',
                    url:'functions.php',
                    data:'func=addEvent&date='+date+'&title='+title,
                    success:function(msg){
                        if(msg == 'ok'){
                            var dateSplit = date.split("-");
                            $('#eventTitle').val('');
                            alert('Event Created Successfully.');
                            getCalendar('calendar_div',dateSplit[0],dateSplit[1]);
                        }else{
                            alert('Some problem occurred, please try again.');
                        }
                    }
                });
            });
        });

        $(document).ready(function(){
            $('.date_cell').mouseenter(function(){
                date = $(this).attr('date');
                $(".date_popup_wrap").fadeOut();
                $("#date_popup_"+date).fadeIn();
            });
            $('.date_cell').mouseleave(function(){
                $(".date_popup_wrap").fadeOut();
            });
            $('.month_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $('.year_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $(document).click(function(){
                $('#event_list').slideUp('slow');
            });
        });
    </script>
    <?php
}

/*
 * Get months options list.
 */
function getAllMonths($selected = ''){
    $options = '';
    for($i=1;$i<=12;$i++)
    {
        $value = ($i < 01)?'0'.$i:$i;
        $selectedOpt = ($value == $selected)?'selected':'';
        $options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
    }
    return $options;
}

/*
 * Get years options list.
 */
function getYearList($selected = ''){
    $options = '';
    for($i=2015;$i<=2025;$i++)
    {
        $selectedOpt = ($i == $selected)?'selected':'';
        $options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
    }
    return $options;
}

/*
 * Get events by date
 */
function getEvents($date = ''){
    //Include db configuration file
    include 'dbConfig.php';
    $eventListHTML = '';
    $date = $date?$date:date("Y-m-d");
    //Get events based on the current date
    $result = $db->query("SELECT title FROM events WHERE date = '".$date."' AND status = 1");
    if($result->num_rows > 0){
        $eventListHTML = '<h2>Events on '.date("l, d M Y",strtotime($date)).'</h2>';
        $eventListHTML .= '<ul>';
        while($row = $result->fetch_assoc()){
            $eventListHTML .= '<li>'.$row['title'].'</li>';
        }
        $eventListHTML .= '</ul>';
    }
    echo $eventListHTML;
}

/*
 * Add event to date
 */
function addEvent($date,$title){
    //Include db configuration file
    include 'dbConfig.php';
    $currentDate = date("Y-m-d H:i:s");
    //Insert the event data into database
    $insert = $db->query("INSERT INTO events (title,date,created,modified) VALUES ('".$title."','".$date."','".$currentDate."','".$currentDate."')");
    if($insert){
        echo 'ok';
    }else{
        echo 'err';
    }
}
?>
</body>
