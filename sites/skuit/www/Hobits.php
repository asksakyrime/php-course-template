 <?php
 
$allHobbits = ["Торин", "Кили", "Фили", "Дори", "Нори", "Ори", "Балин", "Двалин", "Бомбур", "Глоин", "Ойн", "Бифур", "Бофур", "Дис", "Гримболд"];
$partySize = rand(2, 5);
shuffle($allHobbits);
$party = array_slice($allHobbits, 0, $partySize);
$names = implode(", ", $party);
$countParty = count($party);
?>

<div class='block'>
В поход отправятся <?= $countParty ?> хоббитов <?= $names ?><br>
</div>

<?php
$transports = ["гномья телега", "коза", "лодка", "драконья повозка", "плот", "метла", "нет транспорта", "вепрь"];
$transport = $transports[rand(0, count($transports) - 1)];
?>

<div class='block'>
<?php if ($transport == "нет транспорта") { ?>
К сожалению, транспорта нет. Хоббитам придётся идти пешком!
<?php } else { ?>
Хоббиты нашли транспорт: <?= $transport ?>
<?php } ?>
</div>

<?php
$allSupplies = ["сушёные ягоды", "орехи", "солонина", "мёд в сотах", "кукурузные лепёшки", "вяленая рыба", "тыквенные семечки", "грибной суп", "печёные каштаны"];
shuffle($allSupplies);
$supplies = array_slice($allSupplies, 0, rand(2, 6));
?>

<div class='block'>
Собраны припасы:<br>
<?php foreach ($supplies as $supply) {
    echo "- $supply <br>";
} ?>
</div>

<?php
$partyEvents = [
    "{hobbit} наступил в болото, и все потеряли время, вытаскивая его.",
    "{hobbit} нашёл тайный колодец с водой — все задержались, чтобы набрать.",
    "{hobbit} упал с камня и сильно шумел, пришлось ждать.",
    "{hobbit} случайно поджёг траву, и все помогали тушить.",
    "{hobbit} привёл друзей по короткой тропе, ускорив путь!"
];

$delayDays = count($supplies);
$events = array_slice($partyEvents, 0, rand(1, 3));
?>

<div class='block'>
Случились события:<br>
<?php
foreach ($events as $event) {
    $randomHobbit = $party[array_rand($party)];
    $eventText = str_replace("{hobbit}", $randomHobbit, $event);
    echo "- $eventText <br>";
    $delayDays++;
}
?>
</div>

<?php
$nazgulDays = 5;
?>

<div class='block'>
Сколько дней собирались хоббиты: <?= $delayDays ?><br>
<?php
if ($delayDays < $nazgulDays) {
    echo " Хоббиты успели выйти в путь раньше назгулов!";
} elseif ($delayDays == $nazgulDays) {
    echo " Хоббиты успели от назгулов в самый последний момент!";
} else {
    $late = $delayDays - $nazgulDays;
    echo " Назгулы настигли хоббитов! Опоздали на $late дней!";
}
?>
</div>