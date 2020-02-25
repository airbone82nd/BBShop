<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PetBBshopAdmin AddProduct</title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
include 'session.php';
 echo "
     <center><font size=6.5><b> ข้อมูลสินค้า </font></b><br><br>
     <form method=POST enctype=multipart/form-data action=add_product_code.php>
     <table>
     <tr>
        <td>ชื่อสินค้า</td>
        <td><input type=text name=ProductName value='' /></td>
        </tr>
        <tr>
        <td>ราคา</td>
        <td><input type=text name=Price value='' /></td>
        </tr>
        <tr>
        <td>ภาพสินค้า</td>
        <td><input type=file name=Picture value='' /></td>
        </tr>
        </table>
        <input type=submit value=เพิ่มสินค้า />
        <input type =reset value=ยกเลิก />
        <br>
        </br>
        <a href=show_product.php> แสดงข้อมูลสินค้า </a>
</form></center>";
?>
</body>
</html>