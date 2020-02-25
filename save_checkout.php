<?php
include 'dbConnect.php';
session_start();
  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orders (OrderDate,Name,Address,Tel,Email)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','".$_POST["txtAddress"]."' ,'".$_POST["txtTel"]."','".$_POST["txtEmail"]."') 
  ";
  $objQuery = mysqli_query($dbcon,$strSQL) or dia(mysqli_errno($dbcon));
  if(!$objQuery)
  {
	echo $dbcon->error;
	exit();
  }

  $strOrderID = mysqli_insert_id($dbcon);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (OrderID,ProductID,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."') 
			  ";
			  mysqli_query($dbcon,$strSQL);
	  }
  }


session_destroy();

header("location:finish_order.php?OrderID=".$strOrderID);
?>

