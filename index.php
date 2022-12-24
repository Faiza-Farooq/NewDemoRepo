<?php 
echo "hhhh";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="Style1.css" rel="stylesheet" type="text/css" />
<link href="Style2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
<form action="submit.php" method="get">

<table width="200" border="10">
<div class=Style2>
  <tr>
    <th colspan="3" scope="col">LOGIN FORM</th>
    </tr>
  <tr>
    <td width="94">Username;</td>
    <td width="94">&nbsp;</td>
    <td width="94"><label for="uname"></label>
      <input type="text" name="uname" required id="uname" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>&nbsp;</td>
    <td><label for="pswd"></label>
      <input type="password" name="pswd" required id="pswd" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</form>
</div>
</body>
</html>