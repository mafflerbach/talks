<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body>
<?php
session_start();

echo 'Willkommen auf Seite #1';

$_SESSION['farbe'] = 'grün';
$_SESSION['tier'] = 'Spinne';
$_SESSION['zeit'] = time();


// Funktioniert, falls das Session-Cookie akzeptiert wurde
echo '<br /><a href="seite2.php">Seite 2</a>';

// Oder die Session-ID mit übergeben, für den Fall, dass sie benötigt wird
echo '<br /><a href="seite2.php?' . SID . '">Seite 2</a>';

?>
</body>
</html>

