<h1>
    Admin
</h1>
<a href="./logout.php">
    <button>Logout</button>
</a>
<br>
<hr>
    <a href="./add_user.php">
        <button>Add user</button>
    </a>
<table border= "1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($connect,$sql)or die("Err query!");
        while($user_arr = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $user_arr['uid'];?></td>
                <td><?php echo $user_arr['username'];?></td>
                <td><?php echo $user_arr['role'];?></td>
                <td><a href="./edit_user.php?uid=<?php echo $user_arr['uid'];?>">
                    <button>Edit</button>
                    </a>
                </td>
                <td><a href="./delete_user.php?uid=<?php echo $user_arr['uid'];?>">
                    <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php
        }
    ?>
</table>