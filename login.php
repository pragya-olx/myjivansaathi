<?php include('header.php');
include('menu.php');
?>


<div class="boxclass">
    <form action="login_session.php" method="post">

        <div style="margin: 10px;">
            <label>Email/Phone :<span>*</span></label>
            <input name="email"  placeholder="Ex-anderson@gmail.com/9999090909" required><br/>
        </div>

        <div style="margin: 10px;">
            <label>Password :<span>*</span></label>
            <input name="password" type="Password" placeholder="*****" /><br/>
        </div>

        <div style="margin: 10px;">
            <input type="submit" value="Next" />
        </div>
    </form>
</div>
