<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body><center>
        <form method ="POST" action ="adminlogin.php">
            <table border="1" cellspacing="0"
                   <tr>
                    <td>Username :</td>
                    <td><input type="text" name="user" value="" /></td>
                        </tr>
                        <tr>
                       <td>Password :</td>
                       <td><input type="password" name="pass" value="" /></td>
                       </tr>
                        </table></br>  
                          <td><input type="submit" value="Login" />
                          <input type="reset" value="Cancel" />
                          <a href='signin.php'>สมัครสมาชิก</a>
                 </form></center>
        <?php
        // put your code here
        ?>
    </body>
</html>
