
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
error_reporting(~E_ALL);
  $memName =$_POST['mName'];
  $mUsename =$_POST['mUsename'];
  $mPassword =md5($_POST['mPassword']);
  $mAddrerss=$_POST['mAddrerss'];
  $mEmail=$_POST['mEmail'];
  $mTel =$_POST['mTel'];
  $mSex =$_POST['mSex'];
 
  
  include 'dbConnect.php';
  $check_usename = "select * from member where mUsename='$mUsename'";
  $result_check = mysqli_query($dbcon, $check_usename);
  $num = mysqli_num_rows($result_check);
  if($num==0) {
  $add_member = "insert into member values(null,'$memName','$mUsename','$mPassword','$mAddrerss','$mEmail','$mTel','$mSex',now())";
  $result = mysqli_query($dbcon,$add_member);
  mysqli_close($dbcon);
  
if($result)  { ?>
<script language="javascript">
        alert ("สมัครสมาชิกสำเร็จ");
    </script>
    <?php 
        echo "<meta http-equiv='refresh' content='0; url=add_member.php'>";
}else{ ?>
    <script language="javascript">
      alert( "สมัครสมาชิกไม่สำเร็จ" );
    </script>
   <?php
        echo "<meta http-equiv='refresh' content='0; url=add_member.php'>";}
  }else{?>
<script language="javascript">
        alert ("Usename นี้มีคนใช้แล้ว กรุณาใช่ชื่ออื่น");
    </script>
        
 <?php  echo "<meta http-equiv='refresh' content='0; url=add_member.php'>";} 
?>
</body>
