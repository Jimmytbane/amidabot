<?php
$webresponse = $_POST['webresponse'];
$textop = mb_strimwidth("$webresponse", 0, 200, "...");
sleep(2);
$webResponseTxt = "stored.txt";
$fh = fopen($webResponseTxt, 'w') or die("Store file dont work amida u pleb");
fwrite($fh, $textop);
fclose($fh);
header('Location: https://bot.mew.li');
?>
