<?php

// 1. Доступ по ссылке
function firstTask()
{
	$veryBadUnclearName = '15 chicken wings';
	$order = &$veryBadUnclearName;
	$order .= ' with double sauce';

	echo "\nYour order is: $veryBadUnclearName." . "\n";
}

// 2. Числа
function secondTask()
{
	$firstArg = 42;
	echo $firstArg. "\n";
	$secondArg = 33.932;
	echo $secondArg . "\n";
	echo (1+2+3+4+5+6-9) . "\n";

	$lastMonth = 1187.23;
	$thisMonth = 1089.98;
	echo "Difference: " . abs($lastMonth - $thisMonth). "\n";
}

// 3. Умножение и деление
function thirdTask()
{
	$learnedLanguages = ['Ruby', 'Python', 'JavaScript', 'C++'];
	$numLanguages = count($learnedLanguages);
	$months = 11;
	$days = $months * 16;

	$daysPerLanguage = $days / $numLanguages;
	echo $daysPerLanguage . "\n";
}

// 12. Степень
function fourthTask()
{
	echo 'Eight square equal : '. 8 ** 2 . "\n";
}

// 13. Операторы присвоения
function fifthTask()
{
	$myNum = 26;
	$answer = $myNum;
	$answer += 2;
	$answer *= 2;
	$answer -= 2;
	$answer /= 2;
	$answer -= $myNum;

	echo 'Result: ' . $answer . "\n";
}

// 14. Математические функции
function sixthTask()
{
	// Работа с %
	$a = 10;
	$b = 3;
	echo $a % $b . "\n";

	// Работа со степенью и корнем
	$a = 32;
	$b = 7;
	$module = $a % $b;
	if ($module)
	{
		echo 'Делится с остатком: ' . $module ;
	}
	else
	{
		echo 'Делится' . "\n";
	}

	$st = pow(2, 10);
	echo $st . "\n";

	echo sqrt(245) . "\n";

	$result = 0;
	$array = [4, 2, 5, 19, 13, 0, 10];
	foreach ($array as $item)
	{
		$result += $item**2;
	}

	echo sqrt($result) . "\n";

	// Работа с функциями округления

	$result = sqrt(379);
	echo round($result) . "\n";
	echo round($result, 1) . "\n";
	echo round($result, 2) . "\n";

	$result = sqrt(587);
	$array = [];
	$array['floor'] = floor($result);
	$array['ceil'] = ceil($result);
	print_r($array);

	// Работа с min и max

	$array = [4, -2, 5, 19, -130, 0, 10];

	echo 'max number: ' . max($array) .  "\n";
	echo 'min number: ' . min($array) .  "\n";

	// Работа с рандомом
	echo random_int(1, 100) . "\n";

	$result = [];
	$i = 0;
	while ($i < 10)
	{
		$result[] = random_int(100, 999);
		$i++;
	}
	print_r($result);

	// Работа с модулем
	$a = 387;
	$b = 549;
	echo abs($a - $b) . "\n";

	$result = [];
	$array = [1, 2, -1, -2, 3, -3];
	foreach ($array as $item)
	{
		$result[] = abs($item);
	}
	print_r($result);

	// Общее
	$number = 27;
	$array = [];
	for ($i = 1; $i < ($number / 2) + 1; $i++)
	{
		if ($number % $i === 0)
		{
			$array[] = $i;
		}
	}
	echo "\n";
	print_r($array);

	$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$sum = 0;
	$counter = 0;
	foreach ($array as $item)
	{
		$counter++;
		$sum += $item;
		if ($sum > 10)
		{
			break;
		}
	}

	echo $counter . "\n";
}

// 15. Функции

function printStringReturnNumber(int $number): int
{
	echo $number . "\n";

	return $number;
}

function seventhTask()
{
	$number = printStringReturnNumber(14);

	echo $number . "\n";
}

// 16. Функции

function increaseEnthusiasm(string $str): string
{
	return $str . '!';
}

function repeatThreeTimes(string $str): string
{
	return $str . $str . $str;
}

function cut(string $str, int $leaveChar = 10): string
{
	return mb_substr($str, 0, $leaveChar);
}

function eighthTask()
{
	echo increaseEnthusiasm('Wow that great') . "\n";
	echo repeatThreeTimes('Many times ') . "\n";
	echo increaseEnthusiasm(repeatThreeTimes('Some kind of magic')) . "\n";
	echo cut('So much long string wow', 5) . "\n";

	$array = [1, 6, 34, 13, 355, 112];
	array_map(static function($item) {
		echo $item . "\n";
	}, $array);

	$number = 2732;
	while ($number > 9)
	{
		$result = 0;
		$tmp = $number;
		while ($tmp)
		{
			$result += $tmp % 10;
			$tmp /= 10;
		}

		$number = $result;
	}

	echo $number . "\n";
}

// 17. Массивы
function arrayFill(string $str, int $times): array
{
	$result = [];
	for ($i = 0; $i < $times; $i++)
	{
		$result[$i] = $str;
	}

	return $result;
}

function ninthTask()
{
	$array = [];
	for ($i = 0; $i < 7; $i++)
	{
		$array[] = str_repeat('x', $i + 1);
	}
	print_r($array);

	print_r(arrayFill('someString', 4));

	$result = 0;
	$array = [[24], [2, 4, 2], [4, 78, 29], [8]];
	foreach ($array as $item)
	{
		foreach ($item as $subItem)
		{
			$result += $subItem;
		}
	}
	echo $result . "\n";

	$array = [];
	for ($i = 0; $i < 3; $i++)
	{
		for ($j = 1; $j < 4; $j++)
		{
			$array[$i][] = $i * 3 + $j;
		}
	}
	print_r($array);

	$array = [2, 5, 3, 9];
	$result = $array[0] * $array[1] + $array[2] * $array[3];
	echo $result . "\n";

	$user = [
		'name' => 'John',
		'surname' => 'Doe',
		'patronymic' => 'American'
	];
	echo $user['name'] . ' ' . $user['surname'] . ' ' . $user['patronymic'] . "\n";

	$date = [
		'year' => 2022,
		'month' => 10,
		'day' => 16,
	];
	echo $date['year'] .  '-' . $date['month'] . '-' . $date['day'] . "\n";

	$array = ['a', 'b', 'c', 'd', 'e'];
	echo count($array) . "\n";

	// array совпадает
	echo $array[count($array) - 1] . ' ' . $array[count($array) - 2] . "\n";
}

// 18. Конструкция if else

function checkTwoDigitSum(int $a, int $b): bool
{
	return $a + $b > 10;
}

function checkNumberEqual(int $a, int $b): bool
{
	return $a === $b;
}

function tenthTask()
{
	echo checkTwoDigitSum(5, 15) . "\n";
	echo checkNumberEqual(3, 3) . "\n";
	$test = 56;
	echo ($test === 0 ? 'верно':'');

	$age = 53;
	if ($age < 10 || $age > 99)
	{
		echo 'число меньше 10 или больше 99' . "\n";
	}
	else
	{
		$sum = 0;
		while ($age > 0)
		{
			$sum += $age % 10;
			$age /= 10;
		}

		if ($sum <= 9)
		{
			echo 'сумма цифр однозначна' . "\n";
		}
		else
		{
			echo 'сумма цифр двузначна' . "\n";
		}
	}

	$array = [45, 23, 14];
	if (count($array) === 3)
	{
		$sum = 0;

		foreach ($array as $item)
		{
			$sum += $item;
		}

		echo $sum;
	}
}

// 19. Циклы
function eleventhTask()
{
	$length = 20;
	for ($i = 0; $i < $length; $i++)
	{
		echo str_repeat('x', $i + 1) . "\n";
	}
}

// 20. Комбинация функций
function twelfthTask()
{
	$array = [4, 6, 18, 34];
	echo (array_sum($array) / count($array)) . "\n";

	echo array_sum(range(1, 100)) . "\n";

	$array = [49, 4, 25];
	print_r(array_map(static function($item) {
		return sqrt($item);
	}, $array));
	echo "\n";

	$keys = range('a', 'z');
	$items = range(1, 26);
	print_r(array_combine($keys, $items));

	$str = "1234567890";
	$array = str_split($str, 2);
	echo array_sum($array) . "\n";
}


// firstTask();
// secondTask();
// thirdTask();
// fourthTask();
// fifthTask();
// sixthTask();
// seventhTask();
// eighthTask();
// ninthTask();
// tenthTask();
// eleventhTask();
twelfthTask();
