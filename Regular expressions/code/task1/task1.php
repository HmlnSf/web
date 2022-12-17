<?php

// 1. Регулярные выражения
// a) Напишите регулярку, которая найдет строки 'abba', 'adca',
// 'abea' по шаблону: буква 'a', два любых символа, буква 'b'.
// Пример строки: $str = 'ahb acb aeb aeeb adcb axeb';

$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
preg_match_all('/(a..b)/', $str, $matches);

print_r($matches[0]);
echo "\n";

// b) Дана строка с целыми числами 'a1b2c3'. С помощью
// регулярки преобразуйте строку так, чтобы вместо этих
// чисел стояли их кубы.

$str = 'a1b2c3';
$result = preg_replace_callback('/\d/', static function($matches) {
	return $matches[0] ** 3;
}, $str);
echo $result. "\n";
