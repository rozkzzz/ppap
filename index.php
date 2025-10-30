<?php
    $title = 'login';
    require_once('php/header.php');

?>

<body style="background-color:#27F5DA">
       
    <div><h1>ยืมคืนอุปกรณ์การแพทย์และอุปกรณ์เครื่องช่วยความพิการ</h1></div>
    
    <center><img src="logo_pao.png" width="450"></center>
    <form>
    <div class="login_ip">
        <input type="text" placeholder="USERNAME" name="username">
        <input type="password" placeholder="PASSWORD" name="password"> 
    </div>
    
    <div class="login_btn">
        <button type="submit" name="login">LOG IN</button>
    </div>
    </form>

</body>