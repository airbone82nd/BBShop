<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
error_reporting(~E_ALL);
$pID = $_GET['ProductID'];
include 'dbConnect.php';
$show_edit = "select * from product where ProductID='$pID'";
$result_edit = mysqli_query($dbcon, $show_edit);

$rec = mysqli_fetch_array($result_edit);



echo "<center> แก้ไขข้อมูลสินค้า <br><br>
     <form method=POST enctype=multipart/form-data action=edit_product_code.php>
     <table border=1 cellspacing=0 width=30%>
     <tr>
     <td width=20%>รหัสสินค้า</td>
        <td ><input type=text name=ProductID value='$rec[ProductID]' /></td>
        </tr>
        <td>ชื่อสินค้า</td>
        <td><input type=text name=ProductName value='$rec[ProductName]' /></td>
        </tr>
         <tr>
        <tr>
        <td>ราคา</td>
        <td><input type=text name=Price value='$rec[Price]' /></td>
        </tr>
        <tr>
        <td>ภาพสินค้า</td>
        <td> <img src=photo/$rec[Picture] width =30%><br>
        <input type=file name=Picture value='' /></td>
        </tr>
        </table> <br>
        <input type=submit value=แก้ไขสินค้า />
        <input type =reset value=ยกเลิก /><br>
        
        
</form></center>";

?>
    </body>>
