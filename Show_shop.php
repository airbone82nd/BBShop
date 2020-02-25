 <?php
include 'dbConnect.php';
?>
<html>
<head>
<title>Pet BB Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/test.css"/>
</head>
<?php
$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($dbcon,$strSQL)or dia(mysqli_errno($dbcon));
mysqli_close($dbcon);

echo "<center><font size=10.5 font color=\"green\"><b> PetBBShop </font></b><br><br>
    <center><font size=8.5 font color=\"brown\"><b> -<กฎก่อนซื้อ>-</font>
    <center><font size=4.5 font color=\"red\"><b> 1.Keep You Rifle By Your side(เก็บปืนให้มิดชิดและอยู่กับตัวเองมากที่สุด)</font>
    <center><font size=4.5 font color=\"red\"><b> 2.อย่าเอานิ้วเข้าไกปืนเมื่อไม่ได้ทำการยิง</font>
    <center><font size=4.5 font color=\"red\"><b> 3.อย่านำปืนไปรังแกสัตว์ทุกประเภทหรือยิงใส่คนตอนที่ยังไม่ได้ลงสนาม</font>
    <center><font size=4.5 font color=\"red\"><b> 4.ห้ามพกปืนไปที่สนามหรือที่ทดสอบโดยไม่มีกระเป๋าใส่หรือมิดชิด</font>  
    <center><font size=4.5 font color=\"red\"><b> 5.เมื่อเล่นเสร็จหรือทำการยิงเสร็จแล้วปลดแม็กกาซีน ดึงคันล้างลูกเลื่อน                                               
                                                  แขวนคันล้างลูกเลื่อน แล้วทดสอบยิงขึ้นฟ้า ถ้าไม่มีปลอดถัย นำกลับใส่ถุงหรือเก็บ</font> 
    <center><font size=4.5 font color=\"red\"><b> 6.ปฎิบัติทุกข้ออย่างเคร่งครัด  </font> 
    <center><font size=4.5 font color=\"ligth green\"><b> 7.ถ้าสินค้ารับคืนภายใน15วัน ลองยิงแล้วก็รับคืน 
                                                            และจะเปลี่ยนของใหม่ที่ไม่มีปัญหาให้</font> 
    <center><font size=7.5 font color=\"green\"><b>****** นี่ไม่ใช่ปืนจริง แต่มันจำลองมาจากปืนจริง อุบัติเหตุเกิดขึ้นได้ทุกเมื่อ ******พึงระวังไว้****** </font> 
    <table width=75% border=1 >
    <tr>
   
   <th width=40%><font color=blue size=5.5><b> ภาพสินค้า   </b></font></th>
   <th width=10%><font color=blue size=5.5><b> รหัสสินค้า    </b></font></th>
   <th width=30%><font color=blue size=5.5><b> ชื่อสินค้า     </b></font></th>
   <th width=10%><font color=blue size=5.5><b> ราคา       </b></font></th>
   <th width=10%><font color=blue size=5.5><b> หมายเหตุ    </b></font></th></tr>";
while ($record = mysqli_fetch_array($objQuery )){
    echo "<tr>
    <th> <img src=photo/$record[Picture] width=30%></th>
    <th>$record[ProductID]</th>
    <th> $record[ProductName]</th>
    <th> $record[Price]</th><th> ";?> 
    <a href=order.php?ProductID=<?php echo"$record[ProductID]"; ?> onclick="return confirm('คุณต้องการเพิ่ม <?php echo"$record[Product]"; ?> ใส่ตะกร้าหรือไม่')" > 
        <img src=photo/Add.png width=30%> </a> 
                <?php }
            echo "</table></center>";
?>
<br><br><a href="show.php">ดูสินค้าในตะกร้า</a> | <a href="clear.php">ลบสินค้าในตะกร้าหมด</a>
</body>
</html>