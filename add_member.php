<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>สมัครสมาชิกPetBBShop</title>
        <link rel="stylesheet" href="css/test.css"/>
    </head>
    <body>
<?php
echo "<center><font size=6.5><b> สมัครสมาชิก </font></b><br><br>
    <form action=add_member_code.php method=POST>
    <table border=1 cellspacing=0>
    <tr>
      <td> ชื่อ - นามสกุล </td>
      <td><input type=text name=mName value='' /></td>
      </tr>
      <tr>
       <td> Usename </td>
      <td><input type=text name=mUsename value='' /></td>
      </tr>
      <tr>
       <td> Password </td>
      <td><input type=text name=mPassword value='' /></td>
      </tr>
      <tr>
       <td> ที่อยู่ </td>
      <td><textarea name=mAddrerss rows=5 cols=30>
      </textarea>
      </td>
      </tr>
      <tr>
      <td> วัน/เดือน/ปี </td>
      <td><input type=date name=mDate value='' /></td>
      </tr>
      <tr>
       <td> Email </td>
      <td><input type=text name=mEmail value='' /></td>
      </tr>
       <tr>
       <td> เบอร์โทร </td>
      <td><input type=text name=mTel value='' /></td>
      </tr>
       <tr>
       <td> Sex </td>
        <td><input type=radio name=mSex value='ชาย' />ชาย
        <input type=radio name=mSex  value = 'หญิง' /> หญิง
        <input type=radio name=mSex  value = 'ยังสับสน' />ยังสับสน
        <input type=radio name=mSex  value = 'i'm Gay' />i'm Gay
        <input type=radio name=mSex  value = 'Be gone Thots'/>Be gone Thots
        <input type=radio name=mSex  value = 'ไม่ตอบ เขิน'/>ไม่ตอบ เขิน
        </td>
      </tr>
       </table> <br>
       <input type=submit value=สมัครสมาชิก />
       <input type=submit value=ยกเลิก />
  </form>
    </center>";


?>
</body>