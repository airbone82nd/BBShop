<?php
error_reporting(~E_ALL);
$Suser = $_POST['user'];
$Spass = $_POST['pass'];

include 'dbConnect.php';
$check_username = "select * from admin where user ='$Suser'";
$result_check = mysqli_query($dbcon,$check_username);
$num = mysqli_num_rows($result_check);
if($num==0){
$add_member = "insert into admin values(null, '$Suser', '$Spass')";
$result = mysqli_query($dbcon,$add_member);
mysqli_close($dbcon);


if ($result){ ?>
<script Language="javascript">
    alert ('ท่านได้สมัครสมาชิกเรียบร้อยแล้ว');
</script> 
<?php echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
}else{ ?>
<script Language="javascript">
    alert ('ไม่สามารถสมัครสมาชิกได้');
</script>   
<?php echo "<meta http-equiv='refresh' content='0; url=Signin.php'>"; }
}else{?>
<script Language="javascript">
    alert ('usernameนี้ถูกใช้ไปแล้ว');
</script> 
<?php echo "<meta http-equiv='refresh' content='0; url=Signin.php'>";
}
?>