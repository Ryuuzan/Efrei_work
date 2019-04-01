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
	$word=fgets($file);
	if(isset($_GET["nameFilter"])){
		if(strstr($word,$_GET["nameFilter"]))
			{echo "<li>".$word."</li>";}
	}
	else{
		echo "<li>".$word."</li>";}
	}
	fclose($file);
	?>

	<form action="index.php" method="get">
		Filter: <input type="text" name="nameFilter">
		<input type="submit">
	</form>