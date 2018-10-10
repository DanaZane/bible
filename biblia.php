<?php

$random = rand(1,150);
$str = "https://bible-api.com/psalms+".$random;
$d = file_get_contents($str);
$d = json_decode($d);
$random2 = rand(1,count($d->verses));
echo "Psalms $random:$random2 ".$d->verses[$random2-1]->text;

?>
