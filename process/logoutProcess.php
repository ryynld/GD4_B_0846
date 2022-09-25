<?php
    session_start();

    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        mysql_select_db("GD4_B_0846");
        $query = "SELECT name, username FROM users WHERE username='$username' AND password='$password'";
        $result = mysql_query($query);

        if(mysql_numrows($result) == 1){
            $_SESSION['name'] = mysql_result($result, 0, "name");
            $_SESSION['username'] = mysql_result($result, 0, "username");
            echo "You're logged in. Feel free to return at a later time.";
        }

        else{
            include "XHTML-login-form.html";
        }

    }else{
        echo
            '<script>
                window.location = "../index.php" 
            </script>';
    }
?>