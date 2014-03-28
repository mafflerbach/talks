<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<body>
<?php
session_start();

echo 'Willkommen auf Seite #2<br />';

echo "<pre>"; 

print_r($_SESSION);
echo "</pre>";
// Sie können auch hier, genauso wie bei seite1.php, SID verwenden
echo '<br /><a href="seite1.php">Seite 1</a>';

?>
</body>

</html>
