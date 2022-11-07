<?php
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("guvi", $connection);
    $userid = $_POST['userid'];
    //$userpass = sha1($_POST['userpass']);
    $userpass = $_POST['userpass'];
    $result = mysql_query("SELECT * FROM users WHERE userid='$userid'");
    $data = mysql_num_rows($result);
    if (($data) == 0) {
        $query = mysql_query("insert into users(userid, userpass) values ('$userid', '$userpass')");
        if ($query) {
            echo "You have Successfully Registered.....";
        } else {
            echo "Error....!!";
        }
    } else {
        echo "This email is already registered, Please try another email...";
    }
    mysql_close($connection);
?>