
<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
    <body>
        <h1>Welcome as an Admin</h1>
        <a href="profile.php">Profile</a><br>
        Setting
            <ul>
                <li><a href="change_password.php">Change password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            

    </body>
</html>

<?php
    }else{
        echo "invalid request, please login first...";
    }

?>

