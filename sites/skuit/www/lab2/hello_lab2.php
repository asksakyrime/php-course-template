<?
$name = 'Бугаев Дмитрий Романович';
$age = 19;
?>
<title><?= $name?></title>
<?for ($age; $age > 0; $age-- ):?>
<p> <?= $age?> Статичный текст </р>
<?endfor; ?>
