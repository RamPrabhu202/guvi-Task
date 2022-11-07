<?php
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("guvi", $connection);
    $userid = $_POST['userid'];
    //$password = sha1($_POST['password1']); 
    $userpass = $_POST['userpass'];
    $result = mysql_query("SELECT * FROM users WHERE userid='$userid' AND userpass='$userpass'");
    $data = mysql_num_rows($result);
    if ($data == 1) {
        echo "Successfully Logged in...";
    } else {
        echo "Email or Password is wrong...!!!!";
    }
    mysql_close($connection);
?>