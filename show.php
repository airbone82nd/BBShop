<?php
include 'dbConnect.php';
error_reporting(~E_ALL);
session_start();
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/test.css"/>
</head>
<center>
<table width=55%  border="1">
  <tr>
    <td width=5%>ลำดับที่</td>
    <td width=20%>ชื่อสินค้า</td>
    <td width=5%>ราคา</td>
    <td width=5%>จำนวน</td>
    <td width=10%>ราคารวม</td>
    <td width=6%>ยกเลิกรายการ</td>
  </tr>
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM product WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
		$objQuery = mysqli_query($dbcon,$strSQL) or dia(mysqli_errno($dbcon));
		$objResult  = mysqli_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?=$_SESSION["strProductID"][$i];?></td>
		<td><?=$objResult["ProductName"];?></td>
		<td><?=$objResult["Price"];?></td>
		<td><?=$_SESSION["strQty"][$i];?></td>
		<td><?=number_format($Total,2);?></td>
                <td><a href="delete.php?Line=<?=$i;?>"><img src=photo/delete.jpg width=40%></a></td>
                
	  </tr>
	  <?php
	  }
  }
  ?>
</table><br>
ราคารวมทั้งหมด <?php echo number_format($SumTotal,2);?>
<br><br><a href="Show_shop.php">กลับไปหน้าหลัก</a>
<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php">ยืนยันการซื้อ</a>
<?php
	}
?>
</center>
<?php
mysqli_close($dbcon);
?>
</body>
</html>

