<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>หน้าหลัก</title>
</head>

<body>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="200" colspan="2" align="center" valign="middle" bgcolor="#CCFF99">ส่วนหัว</td>
  </tr>
  <tr>
    <td width="200" height="500" align="left" valign="top" bgcolor="#FFCCFF"><p>เมนูหลัก</p>
    <p>- <a href="index.php?show=product">รายการสินค้า</a></p>
    <p>- <a href="index.php?show=member">สมัครสมาชิก</a></p>
    <p>- <a href="index.php?show=login">เข้าสู่ระบบ</a></p></td>
    <td width="600" align="center" valign="top"><?php 
		if($_GET['show']=='member'){
			include("frm_member.php");
		}else if($_GET['show']=='login'){
			include("admin/frm_login.php");
		}else if($_GET['show']=='product'){
			include("product.php");
		}
	?></td>
  </tr>
  <tr>
    <td height="100" colspan="2" align="center" valign="middle" bgcolor="#FFCC99">ส่วนท้าย</td>
  </tr>
</table>

</body>
</html>