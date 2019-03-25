<form action="index.php" method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>
<ul>
<?php $filename = 'friends.txt';
$file = fopen( $filename, "r" );
while (!feof($file)&&filesize('friends.txt') != 0) {
    echo "<li>".fgets($file)."</li>";
}
?>
</ul>