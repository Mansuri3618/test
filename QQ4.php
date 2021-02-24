<form method="post">

	<input type="submit"  name="generate" value="generate" onsubmit="random()">
	<input type="text" readonly="readonly" name="number" value="<?php 

if (isset($_POST['generate'])) {
	function random()
	{
		$number=rand(130,10000);
		return $number;		
	}
	echo random();
}

 ?>">
</form>