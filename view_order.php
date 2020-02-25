<?php
include 'dbConnect.php';
error_reporting(~E_ALL);
session_start();
?>
<html>
<head>
<title>ตะกร้า</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/test.css"/>
</head>

<?php
$strSQL = "SELECT * FROM orders WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysqli_query($dbcon,$strSQL) or dia(mysqli_errno($dbcon));
$objResult = mysqli_fetch_array($objQuery);
?>
    <center>
    <table width=50% border=1>
      <tr>
    <tr>
      <td width=10%>ลำดับที่</td>
      <td width=40%><?php echo $objResult["OrderID"];?></td>
    </tr>
    <tr>
      <td width=10%>ชื่อ-นามสกุล</td>
      <td width=40%>
	 <?php echo $objResult["Name"];?></td>
    </tr>
    <tr>
      <td width=10%>ที่อยู่</td>
      <td width=40%><?php echo $objResult["Address"];?></td>
    </tr>
    <tr>
      <td width=10%>เบอร์โทรศัพท์</td>
      <td width=40%><?php echo $objResult["Tel"];?></td>
    </tr>
    <tr>
      <td width=10%>อีเมล์</td>
      <td width=40%><?php echo $objResult["Email"];?></td>
    </tr>
  </table></center>

  <br>
<center>
<table width=50%  border=1%>
  <tr>
    <td width=5%>ลำดับที่</td>
    <td width=20%>ชื่อสินค้า</td>
    <td width=10%>ราคา</td>
    <td width=5%>จำนวน</td>
    <td width=10%>ราคารวม</td>
  </tr>

<?php

$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM orders_detail WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery2 = mysqli_query($dbcon,$strSQL2)or dia(mysqli_errno($dbcon));

while($objResult2 = mysqli_fetch_array($objQuery2))
{
		$strSQL3 = "SELECT * FROM product WHERE ProductID = '".$objResult2["ProductID"]."' ";
		$objQuery3 = mysqli_query($dbcon,$strSQL3) or dia(mysqli_errno($dbcon));
		$objResult3 = mysqli_fetch_array($objQuery3);
		$Total = $objResult2["Qty"] * $objResult3["Price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?php echo $objResult2["ProductID"];?></td>
		<td><?php echo $objResult3["ProductName"];?></td>
		<td><?php echo $objResult3["Price"];?></td>
		<td><?php echo $objResult2["Qty"];?></td>
		<td><?php echo number_format($Total,2);?></td>
	  </tr>
	  <?php
 }
  ?>
</table><br>
<?php echo "ราคารวมทั้งหมด :  "?><?php echo number_format($SumTotal,2);?>
</center>
</body>
</html>

