<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
error_reporting(~E_ALL);
  $proID =$_POST['ProductID'];
  $proName =$_POST['ProductName'];
  $proPrice =$_POST['Price'];
  $proPhoto=$_FILES['Picture']['tmp_name'];
  $proPhotoName =$_FILES['Picture']['name'];
  
  
  include 'dbConnect.php';
  if (!$proPhotoName ==''){
    $edit_product = "update product set ProductName='$proName',Price='$proPrice',Picture='$proPhotoName' where Product='$proID'";  
  }  else 
      {$edit_product = "update product set ProductName='$proName',Price='$proPrice' where ProductID='$proID'";  
  }
  $result = mysqli_query($dbcon,$edit_product);
  mysqli_close($dbcon);
  
if($proPhotoName<>"")  {
if($result){
      copy($Picture,"Photo/".$proPhotoName); ?>
<script language="javascript">
        alert ("แก้ไขข้อมูลเรียบร้อยแล้ว");
    </script>
  <?php 
   echo "<meta http-equiv='refresh' content='0; url=show_product.php'>";
  }else{ ?>
    <script language="javascript">
      alert( "ไม่สามารถแก้ไขข้อมูล" );
    </script>
  <?php 
    echo "<meta http-equiv='refresh' content='0; url=show_product.php'>";
}
}  else {
   if($result){
       ?>
<script language="javascript">
        alert ("แก้ไขข้อมูลเรียบร้อยแล้ว");
    </script>
  <?php 
   echo "<meta http-equiv='refresh' content='0; url=show_product.php'>";
  }else{ ?>
    <script language="javascript">
      alert( "ไม่เห็นข้อมูล" );
    </script>
  <?php 
    echo "<meta http-equiv='refresh' content='0; url=show_product.php'>";
} 
}

?>
    </body>>
