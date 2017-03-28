<?php include_once('header.php');
    include_once('menu.php')?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<body background="assets/heart.jpg">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6" style="background-color:lavender;">
            Your FirstName :<input type="text" id="firstname1" value="<?php $_SESSION['name'];  ?>">
        </div>
        <div class="col-sm-6" style="background-color:lavenderblush;">
            Your LastName :<input type="text" id="lastname1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" style="background-color:lavender;">
            Partners FirstName<input type="text" id="firstname2">
        </div>
        <div class="col-sm-6" style="background-color:lavenderblush;">
            Partners LastName : <input type="text" id="lastname2">
        </div>
    </div>

</div>
<input type="submit" onclick="submitData();" class="btn btn-success" style="text-align: center;margin-left:30%;margin-right: 30%; width:40%"></input>
<div class="row">
    <div id="result" style="text-align: center"> </div>
</div>


<script type="text/javascript">
   function submitData(){
       var data = {
           firstname1 : $("#firstname1").val().trim(),
           lastname1 : $("#lastname1").val().trim(),
           firstname2 : $("#firstname2").val().trim(),
           lastname2 : $("#lastname2").val().trim()
       };

       $.ajax({
           data: data,
           type: 'post',
           success: function(result) {
               alert("woah ! Your Love percentage is ready"); //this alert is fired
               result = (sumchars(data.firstname1)+ sumchars(data.lastname1) +  sumchars(data.firstname2)-sumchars(data.lastname2)*100)/100
               if(result < 0)
                result = 0
               $('div#result').text(result + '%' );
           }
       });
   }

   function c2n (s, i) {
       return parseInt(s.charAt(i), 36) - 9;
   }

   function sumchars (s) {
       var i = s.length, r = 0;
       while (--i >= 0) r += c2n(s, i);
       return r;
   }
    </script>
</body>
</html>
