<?php
    $title = 'login';
    require_once('php/header.php');

?>

<body style="background-color:#27F5DA">
       
    
    
    <center><img src="logo_pao.png" width="450"></center>
    <form>
    
    <div class="login_ip">
    <center>
    <div class="login_title"><h1>ยืมคืนอุปกรณ์การแพทย์และอุปกรณ์เครื่องช่วยความพิการ</h1></div><br>
    </center>
    <input type="text" placeholder="USERNAME" name="username">
        <input type="password" placeholder="PASSWORD" name="password"> 
    </div>
    
    <div class="login_btn">
  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        LOG IN
        </button>
    </div>
    </form>

</body>