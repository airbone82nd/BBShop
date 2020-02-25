<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
        <?php
        error_reporting(~E_ALL);
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        include 'dbConnect.php';
        $ad_user = "select * from admin where user='$user' and pass='$pass'";
        $result_user = mysqli_query($dbcon,$ad_user);
        mysqli_close($dbcon);
        $num =  mysqli_num_rows($result_user);
         if($num==1){ 
             @session_start();
             $_SESSION[sess_user] = $user;
             $_SESSION[sess_sessid] = session_id();
             echo "<meta http-equiv='refresh' content='0; url=show_product.php'>";
            } else { ?>
    <script language="javascript">
      alert( 'Usernaem หรือ password ไม่ถูกต้อง กรุณา Login ใหม่');
    </script>
   <?php echo "$ad_user";
   echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
            }
        ?>
    </body>
</html>
