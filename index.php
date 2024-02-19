<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="userName" placeholder="User Name"><br><br>
        <button name="button" value="set">Set</button><br><br>
        <button name="button" value="display">Display</button><br><br>
        <button name="button" value="delete">Delete</button><br>

    </form> 



    <?php
        echo "<br>";
        if (isset($_POST['button'])) {
            if ($_POST['button'] == 'set') {
                $val = $_POST['userName'];
                setcookie("user", $val);
                echo "Cookie set";
            } elseif ($_POST['button'] == 'display') {
                if (isset($_COOKIE['user'])) {
                    echo $_COOKIE['user'];
                }
                else {
                    echo "Empty Cookie";
                }
            } elseif ($_POST['button'] == 'delete') {
                if (isset($_COOKIE['user'])) {
                    setcookie("user",null, -1); 
                    echo "Cookie deleted";
                }
            }
        }
        
        
    ?>
</body>
</html>