<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
error_reporting(~E_ALL);
$pID = $_GET[ProductID];
include 'dbConnect.php';
$delete_product = "delete from product where ProductID='$pID'";
$record_delete=mysqli_query($dbcon,$delete_product);
mysqli_close($dbcon);

if($record_delete){?>
<script language="javascript">
        alert ("ลบข้อมูลเรียบร้อย");
    </script>
    <?php
    echo "<meta http-equiv='refresh' content='0; url=show_product.php'>";
}else{?>
    <script language="javascript">
        alert ("ลบข้อมูลไม่สำเร็จ");
    </script>
    <?php 
    echo "<meta http-equiv='refresh' content='0; url=show_product.php'>";
}
  ?>
</body>>