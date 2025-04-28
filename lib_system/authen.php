<?php

    session_start();
    require("./connect.php");
    // $_GET['']; //ใช้ในกรณีที่รู้ว่าส่งค่าแบบไหน
    // $_POST[''];//ใช้ในกรณีที่รู้ว่าส่งค่าแบบไหน
    // $_REQUEST[''];//ใช้ในกรณีที่ไม่รู้ว่าส่งค่าแบบไหน
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // echo $user.$pass ;
    $sql = "SELECT * FROM user WHERE username = '".$user."' 
            AND password ='".$pass."' ";
    $query = mysqli_query($connect,$sql)or die("ERR Query!");

    if($data_user = mysqli_fetch_array($query)){
        $_SESSION ['uid'] = $data_user['uid']; //กรณีที่ถูกต้อง
        $_SESSION ['username'] = $data_user['username'];
        $_SESSION ['role'] = $data_user['role'];
        header("location: ./dashboard.php");
    }else{
        header("location: ./index.php");
    }
?>