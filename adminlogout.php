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
        @session_start();
        session_destroy(); ?>
        <script language="javascript">
            alert('คุณออกจากระบบเรียบร้อยแล้ว')
        </script>
       <?php echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
        ?>
    </body>
</html>
