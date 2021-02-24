<html>
	<form method="post">
	Enter String : <input type="text" name="count" required><br>

	<input type="checkbox" name="Words">Words<br>
	<input type="checkbox" name="vowels">vowels<br>
	<input type="checkbox" name="Spaces">spaces<br>
	<input type="submit" name="check"><br>

	</form>
</html>


<?php
error_reporting(0);
$count=$_POST['count'];
$words=$_POST['Words'];
$vowels=$_POST['vowels'];
$spaces=$_POST['Spaces'];

if (isset($_POST['check'])) {
	echo "<h1>";
	echo "String is :".$count;
	echo "<br>";
}
if (!empty($words)) {
	echo "Number Of Words : ",str_word_count($count);
	echo "<br>";
}
if (!empty($vowels)) {
	function count_Vowels($count)
	{
	    preg_match_all('/[aeiou]/i', $count, $matches);
	    return count($matches[0]);
	}

	echo "Number Of Vowels :";
	print_r(count_Vowels($count));
}

if (!empty($spaces)) {	
	echo "<br>";
	echo "Number Of Spaces : ",substr_count($count, ' ');
}
?>