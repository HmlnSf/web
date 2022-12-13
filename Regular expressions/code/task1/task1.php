<?php
echo "Задание 1а" . "</br>";
$str = "abbb ahhhf ahhb hhhb";
$reg = '/a..b/';
preg_match_all($reg, $str, $matches);
foreach ($matches[0] as $match) {
    echo $match . "</br>";
}

echo "Задание 1b" . "</br>";
$str = "a1b2c3";
$reg = '/(\d+)/';
$str = preg_replace_callback($reg, function ($matches) {
    return $matches[0] ** 3;
}, $str);
echo $str . "</br>";

