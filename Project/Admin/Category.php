<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST["btn_submit"]))
{
	$category=$_POST["category_ans"];
	$insQry="insert into tbl_admin(admin_name,admin_email,admin_password) values('".$category."')";
	echo $insQry;
	if($con->query($insQry))
	{
		echo "inserted";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Category</td>
      <td><label for="category_ans"></label>
      <input type="text" name="category_ans" id="category_ans" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>