<?php

echo "<h1>Лабораторная работа №7</h1>";
echo "<hr>";

// Задание 1 - проверка четности
echo "<h2>Задание 1. Четное или нечетное?</h2>";

$chislo = rand(1, 100);
echo "Сгенерировали число: " . $chislo . "<br>";

if ($chislo % 2 == 0) {
    echo "Это число ЧЕТНОЕ!<br>";
} else {
    echo "Это число НЕЧЕТНОЕ!<br>";
}
echo "<hr>";

// Задание 2 - сравнение двух чисел
echo "<h2>Задание 2. Кто больше?</h2>";

$a = rand(1, 100);
$b = rand(1, 100);
echo "Первое число: " . $a . "<br>";
echo "Второе число: " . $b . "<br>";

if ($a > $b) {
    echo "Результат: " . $a . " больше чем " . $b . "<br>";
} elseif ($a < $b) {
    echo "Результат: " . $b . " больше чем " . $a . "<br>";
} else {
    echo "Числа равны: " . $a . " = " . $b . "<br>";
}
echo "<hr>";

// Задание 3 - сумма от 1 до N
echo "<h2>Задание 3. Сумма чисел от 1 до N</h2>";

$N = rand(10, 100);
echo "N = " . $N . "<br>";

$summa = 0;
for ($i = 1; $i <= $N; $i++) {
    $summa = $summa + $i;
}
echo "Сумма от 1 до " . $N . " = " . $summa . "<br>";
echo "<hr>";

// Задание 4 - подсчет положительных, отрицательных и нулей
echo "<h2>Задание 4. Подсчет чисел в массиве</h2>";

$massiv = array();
$polozh = 0;
$otric = 0;
$nuli = 0;

for ($i = 0; $i < 10; $i++) {
    $massiv[] = rand(-10, 10);
}

echo "Массив чисел: ";
foreach ($massiv as $znachenie) {
    echo $znachenie . " ";
}
echo "<br>";

foreach ($massiv as $value) {
    if ($value > 0) {
        $polozh++;
    } elseif ($value < 0) {
        $otric++;
    } else {
        $nuli++;
    }
}

echo "Положительных чисел: " . $polozh . "<br>";
echo "Отрицательных чисел: " . $otric . "<br>";
echo "Нулей: " . $nuli . "<br>";
echo "<hr>";

// Задание 5 - поиск минимального числа
echo "<h2>Задание 5. Минимальное число в массиве</h2>";

$massiv2 = array();
for ($i = 0; $i < 10; $i++) {
    $massiv2[] = rand(-50, 50);
}

echo "Массив: ";
foreach ($massiv2 as $x) {
    echo $x . " ";
}
echo "<br>";

$min = $massiv2[0];
for ($i = 1; $i < count($massiv2); $i++) {
    if ($massiv2[$i] < $min) {
        $min = $massiv2[$i];
    }
}

echo "Минимальное число: " . $min . "<br>";
echo "<hr>";

// Проверка пароля
echo "<h2>Проверка пароля</h2>";

function proverka_parolya($parol) {
    echo "Пароль: '" . $parol . "'<br>";
    
    $dlina = strlen($parol);
    $cifri = preg_match('/[0-9]/', $parol);
    $bukvi = preg_match('/[a-zA-Z]/', $parol);
    $specsimv = preg_match('/[^a-zA-Z0-9]/', $parol);
    
    if ($dlina < 8) {
        echo "Пароль СЛАБЫЙ<br>";
    } elseif (!$cifri || !$bukvi) {
        echo "Пароль СЛАБЫЙ<br>";
    } elseif (!$specsimv) {
        echo "Пароль СРЕДНИЙ<br>";
    } else {
        echo "Пароль НАДЕЖНЫЙ<br>";
    }
    echo "<br>";
}

proverka_parolya("qwerty");
proverka_parolya("qwerty123");
proverka_parolya("qwerty123!");

// Планирование дня
echo "<h2>Планирование дня</h2>";

$den_nedeli = date('w');
$dni = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
echo "Сегодня: " . $dni[$den_nedeli] . "<br>";

if ($den_nedeli >= 1 && $den_nedeli <= 5) {
    $rabota = rand(0, 1);
    echo "Работа/учеба: " . ($rabota ? "Есть" : "Нет") . "<br>";
    
    if ($rabota) {
        echo "Идти на работу<br>";
    } else {
        echo "Домашние дела<br>";
    }
} else {
    $vstrecha = rand(0, 1);
    echo "Встречи: " . ($vstrecha ? "Запланированы" : "Нет") . "<br>";
    
    if ($vstrecha) {
        echo "Пойти на встречу<br>";
    } else {
        echo "Отдыхать дома<br>";
    }
}
echo "<hr>";

// План поездки
echo "<h2>План поездки</h2>";

$svobodnie_vihodnie = rand(0, 1);
echo "Свободные выходные: " . ($svobodnie_vihodnie ? "Да" : "Нет") . "<br>";

if (!$svobodnie_vihodnie) {
    echo "Нет свободных выходных<br>";
} else {
    $budget = rand(5000, 50000);
    $nuzhno_deneg = rand(10000, 30000);
    echo "Бюджет: " . $budget . " руб.<br>";
    echo "Необходимо: " . $nuzhno_deneg . " руб.<br>";
    
    if ($budget < $nuzhno_deneg) {
        echo "Недостаточно средств<br>";
    } else {
        echo "Достаточно средств<br>";
        
        $cena_poezd = rand(3000, 10000);
        $cena_samolet = rand(5000, 20000);
        $vremya_poezd = rand(8, 24);
        $vremya_samolet = rand(2, 5);
        
        echo "Поезд: " . $cena_poezd . " руб., " . $vremya_poezd . " ч.<br>";
        echo "Самолет: " . $cena_samolet . " руб., " . $vremya_samolet . " ч.<br>";
        
        if ($cena_poezd < $cena_samolet) {
            echo "Выбран поезд<br>";
        } elseif ($vremya_samolet < $vremya_poezd && ($cena_samolet - $cena_poezd) / $cena_poezd < 0.3) {
            echo "Выбран самолет<br>";
        } else {
            echo "Выбран поезд<br>";
        }
        
        echo "Бронирование жилья<br>";
        echo "Сбор вещей<br>";
    }
}
echo "<hr>";

// Маршрут на работу
echo "<h2>Маршрут на работу</h2>";

$dozhd = rand(0, 1);
$zont = rand(0, 1);

echo "Дождь: " . ($dozhd ? "Идет" : "Нет") . "<br>";
echo "Зонт: " . ($zont ? "Есть" : "Нет") . "<br>";

if (!$dozhd || ($dozhd && $zont)) {
    echo "Пешком<br>";
} else {
    echo "На автобусе<br>";
}
echo "<hr>";
?>