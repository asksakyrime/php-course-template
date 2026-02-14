<?php

$city = "rotterdam";
echo strtoupper($city); 
echo "<br>";

$temperature = -5;
if ($temperature < 0) {
    echo "Мороз<br>";
}

$temperatures = [5, -2, 3];
$sum = 0;
foreach ($temperatures as $temp) {
    $sum += $temp;
}
$average = $sum / count($temperatures);
echo "Средняя температура: " . $average . "<br>";

$isRainning = true;
if ($isRainning) {
    echo "Возьмите зонт<br>";
}

function isCold(int $temperature): bool {
    return $temperature < 0;
}

$temperature2 = -3;
if (isCold($temperature2)) {
    echo "На улице холодно<br>";
} else {
    echo "На улице тепло<br>";
}

echo "Результат функции isCold для температуры -3: " . (isCold(-3) ? 'true' : 'false') . "<br>";

?>