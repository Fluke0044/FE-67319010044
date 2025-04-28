<?php
    require("./connect.php");

    $uid = $_GET['uid'];
    $sql = "DELETE FROM user WHERE uid = '".$uid."'";

    if($query = mysqli_query($connect,$sql)){
        header("location: ./dashboard.php");
    }else{
        echo "ลบไม่สำเสร็จ";
    }

?>