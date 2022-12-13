<?php
function task1()
{
    $very_bad_unclear_name = "15 chicken wings";
// Write your code here:
    $order = &$very_bad_unclear_name;
    $order .= ' and 5 cups of tea';
// Don't change the line below
    echo "\nYour order is: $very_bad_unclear_name.";
}

function task2()
{
    $var1 = 1;
    echo $var1 . "</br>";
    $var2 = 2;
    echo "$var2" . "</br>";
    $doubleVar = 6.78;
    echo $doubleVar . "</br>";
    echo 6 + 6 . "</br>";
    $last_month = 1187.23;
    $this_month = 1089.98;
    echo $last_month - $this_month . "</br>";
}

function task11()
{
    $num_languages = 4;
    $months = 11;
    $days = $months * 16;
    $days_per_language = $days / $num_languages;
    echo $days_per_language;
}

function task12()
{
    echo 8 ** 2;
}

function task13()
{
    $my_num = 322;
    $answer = $my_num;
    $answer += 2;
    $answer *= 2;
    $answer -= 2;
    $answer /= 2;
    $answer -= $my_num;
    echo $answer;
}

function task14()
{
    $a = 10;
    $b = 3;
    echo "Остаток от деления $a на $b = " . ($a % $b) . "</br>";

    if ($a % $b == 0) {
        echo "Делится" . "</br>";
    } else {
        echo "Не делится" . "</br>";
    }
    $st = pow(2, 10);
    echo $st . "</br>";
    echo sqrt(245) . "</br>";
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $sum = 0;
    foreach ($arr as $item) {
        $sum += pow($item, 2);
    }
    echo sqrt($sum) . "</br>";
    echo round(sqrt(379)) . " " . round(sqrt(379), 1) . " " . round(sqrt(379), 2) . "</br>";
    $arr2 = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
    $arr = [4, -2, 5, 19, -130, 0, 10];
    echo min($arr) . "</br>";
    echo max($arr) . "</br>";
    echo rand(1, 100) . "</br>";
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[] = rand(1, 10);
    }
    print_r($arr);
    $a = -9;
    $b = 4;
    echo abs($a - $b) . "</br>";
    $arr = [1, 2, -1, -2, 3, -3];
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = abs($arr[$i]);
    }
    print_r($arr);
    $digit = 156;
    $arr = [];
    for ($i = 1; $i <= $digit / 2; $i++) {
        if ($digit % $i == 0)
            $arr[] = $i;
    }
    print_r($arr);
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $sum = 0;
    $i = 0;
    while ($sum < 10) {
        $sum += $arr[$i];
        $i++;
    }
    echo $i . "</br>";
}

function task15()
{
    function printStringReturnNumber(): int
    {
        echo "Строка" . "</br>";
        return 10;
    }

    $my_num = printStringReturnNumber();
    echo $my_num . "</br>";
}

function task16()
{
    function increaseEnthusiasm(string $str): string
    {
        return $str . '!';
    }

    echo increaseEnthusiasm('Test') . "</br>";

    function repeatThreeTimes(string $str): string
    {
        return $str . $str . $str;
    }

    echo repeatThreeTimes('Test') . "</br>";
    echo increaseEnthusiasm(repeatThreeTimes('Test')) . "</br>";

    function cut(string $str, int $num = 10): string
    {
        return substr($str, 0, $num);
    }

    function printArr(array $arr, int $i = 0)
    {
        if ($i < count($arr)) {
            echo "$arr[$i] ";
            printArr($arr, $i + 1);
        }
    }

    function sumOfDigits(int $num): int
    {
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = (int)($num / 10);
        }
        if ($sum > 9)
            return sumOfDigits($sum);
        return $sum;
    }

}

function task17()
{
    $arr = [];
    $count = 30;
    for ($i = 0; $i < $count; $i++) {
        $arr[$i] = '';
        for ($j = 0; $j <= $i; $j++) {
            $arr[$i] .= 'x';
        }
    }
    function arrayFill(string $str, int $num): array
    {
        $arr = [];
        for ($i = 0; $i < $num; $i++) {
            $arr[$i] = $str;
        }
        return $arr;
    }

    $arr = [[1, 2, 3], [4, 5], [6]];
    $sum = 0;
    foreach ($arr as $item) {
        $sum += array_sum($item);
    }
    echo $sum . "</br>";

    $arr = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $arr[$i][$j] = $i * 3 + $j + 1;
        }
    }
    print_r($arr);

    $arr = [2, 5, 3, 9];
    $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
    echo $result . "</br>";

    $user = ['name' => 'Валерий', 'surname' => 'Жмышенко', 'patronymic' => 'Альбертович'];
    echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "</br>";

    $date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
    echo $date['year'] . ' ' . $date['month'] . ' ' . $date['day'] . "</br>";

    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo count($arr) . "</br>";
    echo $arr[count($arr) - 1] . "</br>";
    echo $arr[count($arr) - 2] . "</br>";
}

function task18()
{
    function isSumHigherOf10(int $a, int $b): bool
    {
        return $a + $b > 10;
    }

    function isEqual(int $a, int $b): bool
    {
        return $a == $b;
    }

    $test = 1;
    echo $test == 0 ? 'верно' : 'неверно';

    $age = 57;
    if ($age < 10 || $age > 99)
        echo "Число меньше 10 или больше 99" . "</br>";
    else {
        $sum = $age % 10 + (int)($age / 10);
        if ($sum > 9)
            echo "Сумма чисел двузначна" . "</br>";
        else
            echo "Сумма чисел однозначна" . "</br>";
    }

    $arr = [5, 6, 7];
    if (count($arr) == 3)
        echo array_sum($arr) . "</br>";
}

function task19()
{
    for ($i = 0; $i < 20; $i++) {
        $str = "";
        for ($j = 0; $j < $i; $j++) {
            $str .= 'x';
        }
        echo $str . "</br>";
    }
}

function task20()
{
    $arr = [1, 5, 6, 7];
    echo array_sum($arr) / count($arr) . "</br>";

    function sum100(int $num): int
    {
        return $num == 1 ? 1 : $num + sum100($num - 1);
    }

    echo sum100(100) . "</br>";

    $sqrt = function ($i): int {
        return sqrt($i);
    };

    array_map($sqrt, $arr);
    print_r($arr);

    $arr = array_fill_keys(range('a', 'z'), 0);
    foreach ($arr as $key => $value) {
        $arr[$key] = ord($key) - 96;
    }
    print_r($arr);

    $str = "1234567890";
    $sum = array_sum(str_split($str, 2));
    echo $sum;
}

task20();
