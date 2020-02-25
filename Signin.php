<html>
<head>
<meta charset='UTF-8'>
<title>Signin</title>
<link rel="stylesheet" href="css/test.css"/>
</head>
<body>
<?php
echo "<center>สมัครสมาชิก admin <form method=POST enctype=multipart/form-data action=Signin_code.php><br>
    <table border=1 cellspacing=0>
    <tr>
    <td>username</td>
    <td><input type=data name=user value=''/></td>
    </tr>
    <tr>
    <td>password</td>
    <td><input type=password name=pass value=''/></td>
</table> <br>   
    <input type=submit value=ตกลง />
    <input type=reset value=ยกเลิก />
</form>";
?>
</body>
</html>