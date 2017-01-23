<?php
    $myarray[] = 500;
    $myarray[] = "hello world";
    $myjson = json_encode($myarray);
?>
<form name="input" action="post.php">
    <input type="hidden" name="json" value="<?php echo $myarray ?>" />
    <input type="submit" value="Submit">
</form>