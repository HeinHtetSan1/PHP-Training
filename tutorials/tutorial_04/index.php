<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="login">
        <h1>You need to login</h1>
        <form action="login.php" method="post">
            <label for="id">User ID</label>
            <input type="text" name="id" id="id">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>