<?php
$product1 = "Молоток";
$product2 = "Отвертка";
$product3 = "Гвозди";
$product4 = "Шурупы";
$product5 = "Дрель";
$product6 = "Пила";
$product7 = "Рубанок";
$product8 = "Стамеска";
$product9 = "Уровень";
$product10 = "Рулетка";
$product11 = "Лестница";
$product12 = "Краска";
$product13 = "Кисть";
$product14 = "Валик";
$product15 = "Шпатель";

$price1 = 450;
$price2 = 120;
$price3 = 85;
$price4 = 95;
$price5 = 2500;
$price6 = 1800;
$price7 = 650;
$price8 = 320;
$price9 = 780;
$price10 = 290;
$price11 = 3500;
$price12 = 560;
$price13 = 150;
$price14 = 230;
$price15 = 180;

$products = [$product1, $product2, $product3, $product4, $product5, 
             $product6, $product7, $product8, $product9, $product10,
             $product11, $product12, $product13, $product14, $product15];

$prices = [$price1, $price2, $price3, $price4, $price5,
           $price6, $price7, $price8, $price9, $price10,
           $price11, $price12, $price13, $price14, $price15];

echo "<h2>Товары и цены </h2>";
echo "<div class='product-list'>";
for ($i = 0; $i < count($products); $i++) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $products[$i] . "</div>";
    echo "<div class='product-price'>" . $prices[$i] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

$products2 = ["Перчатки", "Очки", "Каска", "Рабочая форма", "Болты", 
              "Гайки", "Шайбы", "Ключ гаечный", "Пассатижи", "Кусачки"];

$prices2 = [120, 350, 890, 1500, 45, 35, 25, 420, 380, 310];

$products2[] = $product11; 
$products2[] = $product12; 
$products2[] = $product13; 

$prices2[] = $price11; 
$prices2[] = $price12; 
$prices2[] = $price13; 

echo "<h2>Массивы products2 и prices2</h2>";
echo "<div class='product-list'>";
for ($i = 0; $i < count($products2); $i++) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $products2[$i] . "</div>";
    echo "<div class='product-price'>" . $prices2[$i] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

$items = [];
$items[] = ["Болгарка", 3200];
$items[] = ["Перфоратор", 4500];
$items[] = ["Шлифмашина", 2800];
$items[] = ["Фен строительный", 1900];
$items[] = ["Пылесос строительный", 3700];
$items[] = ["Компрессор", 5200];
$items[] = ["Бетономешалка", 8900];
$items[] = ["Леса строительные", 12500];
$items[] = ["Тачка", 2400];
$items[] = ["Миксер строительный", 1800];

echo "<h2>Двумерный массив items</h2>";
echo "<div class='product-list'>";
foreach ($items as $item) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $item[0] . "</div>";
    echo "<div class='product-price'>" . $item[1] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

$goods = [
    ["name" => "Шуруповерт", "price" => 3200],
    ["name" => "Лобзик", "price" => 2100],
    ["name" => "Фрезер", "price" => 5800],
    ["name" => "Реноватор", "price" => 3900],
    ["name" => "Торцовочная пила", "price" => 12500],
    ["name" => "Циркулярная пила", "price" => 6700],
    ["name" => "Степлер строительный", "price" => 850],
    ["name" => "Клеевой пистолет", "price" => 1200],
    ["name" => "Лазерный уровень", "price" => 4500],
    ["name" => "Нивелир", "price" => 8900],
    ["name" => "Штангенциркуль", "price" => 780],
    ["name" => "Угольник", "price" => 350],
    ["name" => "Молоток резиновый", "price" => 620],
    ["name" => "Клещи", "price" => 480],
    ["name" => "Напильник", "price" => 290]
];

echo "<h2>Ассоциативный массив goods</h2>";
echo "<div class='product-list'>";
foreach ($goods as $item) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $item["name"] . "</div>";
    echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

$goodsRandom = [];
$allProducts = array_merge($products, $products2);
$allPrices = array_merge($prices, $prices2);

for ($i = 0; $i < 45; $i++) {
    $randomIndex = array_rand($allProducts);
    $goodsRandom[] = [
        "name" => $allProducts[$randomIndex],
        "price" => $allPrices[$randomIndex] 
    ];
}

echo "<h2>Случайные товары </h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    echo "<div class='product-card'>";
    echo "<div class='product-name'>" . $item["name"] . "</div>";
    echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
    echo "</div>";
}
echo "</div>";

echo "<h2>Товары дороже 100 рублей</h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    if ($item["price"] > 100) {
        echo "<div class='product-card'>";
        echo "<div class='product-name'>" . $item["name"] . "</div>";
        echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
        echo "</div>";
    }
}
echo "</div>";

echo "<h2>Товары дороже 1000 рублей</h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    if ($item["price"] > 1000) {
        echo "<div class='product-card'>";
        echo "<div class='product-name'>" . $item["name"] . "</div>";
        echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
        echo "</div>";
    }
}
echo "</div>";

echo "<h2>Товары от 100 до 1000 рублей</h2>";
echo "<div class='product-list'>";
foreach ($goodsRandom as $item) {
    if ($item["price"] > 100 && $item["price"] < 1000) {
        echo "<div class='product-card'>";
        echo "<div class='product-name'>" . $item["name"] . "</div>";
        echo "<div class='product-price'>" . $item["price"] . " руб.</div>";
        echo "</div>";
    }
}
echo "</div>";
?>