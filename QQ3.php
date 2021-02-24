<html>

Enter first string : <input type="text" name="fstring"><br><br>
Enter second string : <input type="text" name="scstring"><br><br>
<input type="submit" name="submit">


</html>
<?php
error_reporting(0);

$first=$_REQUEST['fstring'];
$second=$_REQUEST['scstring'];
$submit=$_REQUEST['submit'];
echo "hello";
	echo substr_count($first,$second);
?>
