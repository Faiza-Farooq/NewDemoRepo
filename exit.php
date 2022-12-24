<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
// FILE CALLED FROM Submit.php IN CASE OF FAILURE
echo "Login Failure for user: ";
echo $_SESSION['usern'];

echo "<br>";
echo "Click here to Re attemp Login: ";
//session_destroy();
?>

<body>
</body>
</html>