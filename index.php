<?php 
$filename = 'friends.txt';
if(isset($_POST["name"]))
{
	$file = fopen( $filename, "a" );
	fwrite( $file, PHP_EOL.$_POST["name"] );
	fclose($file);
}
?>


<form action="index.php" method="post">
	Name: <input type="text" name="name">
	<input type="submit">
</form>
<?php
$file = fopen( $filename, "r" );
while (!feof($file)) {
    echo "<li>".fgets($file)."</li>";
}
fclose($file);
?>