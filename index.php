<h1>Hello world</h1>
<?php
echo '10.1. Рассчитать значение x, определив и использовав необходимую функцию:'. '<br>';
echo 'a'. '<br>';
function y($x) {
	return (sqrt($x) + $x) / 2;
}
echo 'x = ';
echo y(6) + y(13) + y(21);
echo '<br>'; 
?>

<?php
echo 'б'. '<br>';
function func($x, $y) {
	return ($x + sqrt($x)) / (sqrt($y) + $y);
}
echo 'x = ';
echo func(5, 7) + func(12, 8) + func(31, 2);
echo '<br>'; 
?>

<?php
echo 'в'. '<br>';
function f($x, $y) {
	return ($x + sqrt($y)) / ($y + sqrt($x));
}
echo 'x = ';
echo f(15, 8) + f(6, 12) + f(7, 21);
echo '<br>'; 
?>

<?php
echo 'г'. '<br>';
function sum($x, $y) {
	return ($x + sqrt($y)) / ($y + sqrt($x));
}
echo ' x = ';
echo sum(13, 7) + sum(15, 12) + sum(21, 32);
echo '<br>'; 
?>

<?php
echo '10.2. Рассчитать значение у, определив и использовав необходимую функцию:'. '<br>';
echo 'a'. '<br>';
function funct($x) {
	return ($x + sin($x)) / 3;
}
echo 'y = ';
echo funct(1) + funct(5) + funct(3);
echo '<br>'; 
?>

<?php
echo 'б'. '<br>';
function divide($x, $y) {
	return ($x + sin($x)) / (sin($y) + $y);
}
echo 'y = ';
echo divide(2, 5) + divide(6, 3) + divide(1, 4);
echo '<br>'; 
?>

<?php
echo 'в'. '<br>';
function func1($x, $y) {
	return ($x + sin($y)) / ($y + sin($x));
}
echo 'y = ';
echo func1(1, 4) + func1(7, 5) + func1(3, 2);
echo '<br>'; 
?>

<?php
echo 'г'. '<br>';
function first($x, $y) {
	return ($x + sin($y)) / ($y + sin($x));
}
echo ' y = ';
echo first(2, 3) + first(1, 5) + first(7, 4);
echo '<br>';
?>

<?php
$a = 3;
$b = 4;
echo '10.3. Определить значение z = max(a, 2b) * max(2a-b, b), где max x, y — максимальное из чисел х, у. Задачу решить двумя способами:
1) не используя функцию max;
2) определив и использовав функцию max.';
echo '<br>';
echo '1)';
$a = 3;
$b = 4;
$z = max($a, 2 * $b) * max((2* $a) - $b, $b);
if ($a > $b) {
	$z = $a * ((2*$a) - $b);
	echo $z;
}
else {
	$z = (2*$b) * $b;
	echo $z;
}
echo '<br>';
echo '2)';
function maximum($x, $y) {
	if ($x < $y) {
		return $y;
	}
	else {
		return $x;
	}
}
echo maximum(15, 10). '<br>';
$a = 3;
$b = 4;
$z = maximum($a, 2 * $b) * maximum(2 * $a - $b, $b);
echo $z;
?>

<?php
echo 'Определить значение z = min(a, 3b) * min(2a - b, 2b), где min x, y — минимальное из чисел х, у. Задачу решить двумя способами:
1) не используя функцию min;
2) определив и использовав функцию min.'. '<br>';
echo '1)';
$a = 4;
$b = 5;
$z = min($a, 3 * $b) * max((2* $a) - $b, 2 * $b);
if ($a < $b) {
	$z = $a * ((2*$a) - $b);
	echo $z;
}
else {
	$z = (3*$b) * (2 * $b);
	echo $z;
}
echo '<br>';
echo '2)';
function minimum($x, $y) {
	if ($x < $y) {
		return $x;
	}
	else {
		return $y;
	}
}
echo minimum(15, 10). '<br>';
$a = 4;
$b = 5;
$z = minimum($a, 3 * $b) * minimum((2* $a) - $b, 2 * $b);
echo $z;
?>

<?php
echo '10.5. Определить значение z = sign x + sign y, где sign a = -1, при a<0, sign a = 0 при a=0, sign a = 1 при a>0. Значения x и y вводятся с клавиатуры. Задачу решить двумя способами:
1) не используя функцию sign;
2) определив и использовав функцию sign.'.'<br>';
echo '1)';
$a = 10;
$b = -5;
if ($a < 0){
	$signx = -1;
}
if ($a == 0){
	$signx = 0;
}
if ($a > 0){
	$signx = 1;
}

if ($b < 0){
	$signy =  -1;
}
if ($b == 0){
	$signy = 0;
}
if ($b > 0){
	$signy = 1;
}

$z = $signx + $signy;
echo $z;
echo '<br>';
echo '2)';
function sign($a) {
	if ($a < 0) {
		return $a = -1;
	}
	elseif ($a = 0) {
		return $a = 0;
	}
	else {
		return $a = 1;
	}
}
echo sign(12). '<br>';
$x = 10;
$y = -5;
$z = sign($x) + sign($y);
echo $z;
?>

<?php
echo '<br>';
echo '10.26. Найти наибольший общий делитель трех натуральных чисел, имея в виду, что НОД(a, b, c) = НОД(НОД a, b), c). (Определить функцию для расчета наибольшего общего делителя двух натуральных чисел, используя алгоритм Евклида.)'. '<br>';
function delitel ($a, $b) {
		$mod = $a % $b;
        if ($mod == 0) {
            return $b;
        }
        else {
            return delitel($b, $mod);
        }
    }
    
echo delitel(24, 8). '<br>';
$m = delitel(24, 8);
echo delitel($m, 64);
?>

<?php
echo '<br>';
echo '10.41. Написать рекурсивную функцию для вычисления факториала натурального
числа n.'. '<br>';
function factorial($n)
{
if ($n == 1) {
return 1; 
}
else {
$num = $n * factorial($n-1);
return $num;
}
}
echo factorial(4);
?>

<?php
echo '<br>';
echo '10.42. В некоторых языках программирования (например, в Паскале) не предусмотрена операция возведения в степень. Написать рекурсивную функцию для расчета степени n вещественного числа a (n — натуральное число).'. '<br>';
function power($a, $n) {
	if ($n == 0) {
		return 1;
	}
	if ($n == 1) {
		return $a;
	}
	if ($n > 1) {
		$num = $a * power($a, $n-1);
		return $num;
	}
}
echo power(2, 4);
?>
