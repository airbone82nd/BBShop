<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/> 
    </head>
    <body>
<?php
error_reporting(~E_ALL);
include 'dbConnect.php';
include 'session.php';
$show_product = "select * from product";
$result = mysqli_query($dbcon,$show_product);
mysqli_close($dbcon);
echo "<center><font size=6.5><b> ข้อมูลสินค้า </font></b><br><br>
    <a href=add_product.php> เพิ่มข้อมูลสินค้า </a>  |
    <a href=adminlogout.php> ออกจากระบบ </a> <br><br>
    <table width=100% border=1>
    <tr>
    
   <th width=10%><font color=blue size=5.5><b> รหัสสินค้า    </b></font></th>
   <th width=10%><font color=blue size=5.5><b> ชื่อสินค้า     </b></font></th>
   <th width=10%><font color=blue size=5.5><b> ราคา       </b></font></th>
   <th width=60%><font color=blue size=5.5><b> ภาพสินค้า   </b></font></th>
   <th width=10%><font color=blue size=5.5><b> หมายเหตุ    </b></font></th></tr>";
while ($record = mysqli_fetch_array($result )){
    echo "<tr><th>$record[ProductID]</th>
    <th> $record[ProductName]</th>
    <th> $record[Price]</th>
    <th> <img src=photo/$record[Picture] width=20%></th><th> ";?> 
        <a href=delete_product.php?ProductID=<?php echo"$record[ProductID]"; ?> onclick="return confirm('คุณต้องการลบ <?php echo"$record[ProductName]"; ?> หรือไม่')" ><img src=photo/delete.jpg width=30%></a> | <a href=edit_product.php?ProductID=<?php echo"$record[ProductID]"; ?> onclick="return confirm('คุณต้องการแก้ไข <?php echo"$record[ProductName]"; ?> หรือไม่')" ><img src=photo/edit.png width=30%></a>
                <?php }
            echo "</table></center>";
            ?>
</body>
</html>