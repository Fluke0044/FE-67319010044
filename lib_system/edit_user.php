<?php
    session_start();
    require("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM user WHERE uid = '".$_GET['uid']."'";
        $query = mysqli_query($connect,$sql);
        $user_arr = mysqli_fetch_array($query);
    ?>
    <form action="./edit_user.php" method="get">
        <input type="text" name="uid" id="" value = "<?php echo $user_arr['uid']?>" hidden>
        <input type="text" name="username" value = "<?php echo $user_arr['username']?>">
        <input type="password" name="password" value = "<?php echo $user_arr['password']?>" >
        <select name="role" id="">
            <option value="admin" <?php echo ($user_arr['role']=="admin")?"selected":""; ?> >admin</option>
            <option value="employee" <?php echo ($user_arr['role']=="employee")?"selected":""; ?>>employee</option>
            <option value="user" <?php echo ($user_arr['role']=="user")?"selected":""; ?>>user</option>
        </select>
        <input type="submit" value="EDIT">
    </form>
    <?php
    if(isset($_GET['username'])&&isset($_GET['password'])&&isset($_GET['role'])&&isset($_GET['uid'])){
        $uid = $_GET['uid'];
        $usr = $_GET['username'];
        $pas = $_GET['password'];
        $rol = $_GET['role'];

        $sql = "UPDATE user SET username = '".$usr."', password = '".$pas."', role = '".$rol."' WHERE uid = '".$uid."'";
        if(mysqli_query($connect,$sql)){
            header("location: ./dashboard.php");
        }else{
            header("location: ./add_user.php");
        }
    }
        
        
    ?>
</body>
</html>