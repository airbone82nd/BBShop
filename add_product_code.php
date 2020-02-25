
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Shop</title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
  error_reporting(~E_ALL);  
  $proName =$_POST['ProductName'];
  $proPrice =$_POST['Price'];
  $proPhoto=$_FILES['Picture']['tmp_name'];
  $proPhotoName =$_FILES['Picture']['name'];
  
  
  include 'dbConnect.php';
  $add_product = "insert into product values(null,'$proName','$proPrice','$proPhotoName')";
  $result = mysqli_query($dbcon,$add_product);
  mysqli_close($dbcon);
  
if($proPhotoName<>"")  {
if($result){
      copy($proPhoto,"Picture/".$proPhotoName); ?>
<script language="javascript">
        alert ("เพิ่มข้อมูลเรียบร้อยแล้ว");
    </script>
  <?php 
   echo "<meta http-equiv='refresh' content='0; url=add_product.php'>";
  }else{ ?>
    <script language="javascript">
      alert( "ไม่เห็นข้อมูล" );
    </script>
  <?php 
    echo "<meta http-equiv='refresh' content='0; url=add_product.php'>";
}
}  else {
   if($result){
       ?>
<script language="javascript">
        alert ("เห็นข้อมูลเรียบร้อยแล้ว");
    </script>
  <?php 
   echo "<meta http-equiv='refresh' content='0; url=add_product.php'>";
  }else{ ?>
    <script language="javascript">
      alert( "ไม่เห็นข้อมูล" );
    </script>
  <?php 
    echo "<meta http-equiv='refresh' content='0; url=add_product.php'>";
} 
}
?>
  </body>
