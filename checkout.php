<?php
include 'dbConnect.php';
error_reporting(~E_ALL);
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" href="css/test.css"/>

</head>
<center>
    กรุณาป้อนข้อมูลจริงของคุณ <br><br>
<table width=60%  border=1%>
  <tr>
    <td width=10%>ลำดับที่</td>
    <td width=20%>ชื่อสินค้า</td>
    <td width=10%>ราคา</td>
    <td width=10%>จำนวน</td>
    <td width=10%>ราคารวม</td>
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
		$objResult = mysqli_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?php echo $_SESSION["strProductID"][$i];?></td>
		<td><?php echo $objResult["ProductName"];?></td>
		<td><?php echo $objResult["Price"];?></td>
		<td><?php echo $_SESSION["strQty"][$i];?></td>
		<td><?php echo number_format($Total,2);?></td>
	  </tr>
	  <?php
	  }
  }
  ?>    
</table><br>
<?php echo "ราคารวมทั้งหมด  :  "?><?php echo number_format($SumTotal,2);?>
<br><br>
<form name="form1" method="post" action="save_checkout.php">
  <table width=25% border=1%>
    <tr>
      <td width=20%>ชื่อ-นามสกุล</td>
      <td width=5%><input  type="text" name="txtName"></td>
    </tr>
    <tr>
      <td width=20%>ที่อยู่</td>
      <td><textarea name="txtAddress"></textarea></td>
    </tr>
    <tr>
      <td width=20%>เบอร์โทรศัพท์</td>
      <td width=5%><input type="text" name="txtTel"></td>
    </tr>
    <tr>
      <td width=20%>อีเมล์</td>
      <td width=5%><input type="text" name="txtEmail"></td>
    </tr>
    </table>
    <input type="submit" name="Submit" value="Submit">
  </form>
</center>
</body>
</html>

