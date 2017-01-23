<?php
    $myarray = Array(
		[0] => 500
		[1] => hello world
	);
    $myjson = json_encode($myarray);
?>
<form name="input" action="post.php">
    <input type="hidden" name="json" value="<?php echo $myjson ?>" />
    <input type="submit" value="Submit">
</form>