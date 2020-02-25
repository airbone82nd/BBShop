<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
error_reporting(~E_ALL);
@session_start();
$user = $_SESSION[sess_user];
$pass = $_SESSION[sess_sessid];
if($user=="" or $pass<>  session_id()) { ?>
<script language="javascript">
     alert( 'กรุณา Login ก่อนเข้า')
 </script>
    <?php 
        echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
 exit();
}
?>
    </body>