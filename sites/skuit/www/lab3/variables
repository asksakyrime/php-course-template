<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаб 3 - Основы PHP</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; }
        .section { margin: 20px 0; padding: 15px; background: #f9f9f9; }
        .result { color: green; font-weight: bold; }
        .variable { color: blue; }
    </style>
</head>
<body>
<div class="container">
    <h1>Лабораторная работа 3</h1>
    <?php
    $name = "Max Petrov";
    $age = 19;
    $heightCm = 175;
    $isStudent = true;
    $grades = [4, 5, 3, 5, 4];

    $birthYear = 2024 - $age;
    $futureAge = $age + 5;
    $heightInches = $heightCm / 2.54;
    $heightMeters = $heightCm / 100;
    $averageGrade = array_sum($grades) / count($grades);

    $greeting = "Привет, " . $name . "!";
    $ageInfo = "Тебе $age лет";
    $upperName = strtoupper($name);
    $nameLength = strlen($name);

    $gradesCount = count($grades);
    $maxGrade = max($grades);
    $minGrade = min($grades);

    $randomInt = rand(1, 100);
    $randomFloat = round(rand(0, 100) / 100, 2);
    ?>
    <div class="section">
        <h2>1. Базовые переменные</h2>
        <p>Имя: <span class="variable"><?= $name ?></span></p>
        <p>Возраст: <span class="variable"><?= $age ?></span></p>
        <p>Год рождения (по формуле 2024 - возраст): <span class="variable"><?= $birthYear ?></span></p>
        <p>Рост: <span class="variable"><?= $heightCm ?></span> см</p>
        <p>Студент: <span class="variable"><?= $isStudent ? 'Да' : 'Нет' ?></span></p>
        <p>Оценки: <span class="variable"><?= implode(', ', $grades) ?></span></p>
    </div>
    <div class="section">
        <h2>2. Математические операции</h2>
        <p>Возраст через 5 лет: <span class="result"><?= $futureAge ?></span></p>
        <p>Рост в дюймах: <span class="result"><?= round($heightInches, 2) ?></span></p>
        <p>Рост в метрах: <span class="result"><?= round($heightMeters, 2) ?></span></p>
        <p>Средний балл: <span class="result"><?= round($averageGrade, 2) ?></span></p>
    </div>
    <div class="section">
        <h2>3. Операции со строками</h2>
        <p>Приветствие: <span class="result"><?= $greeting ?></span></p>
        <p>Информация: <span class="result"><?= $ageInfo ?></span></p>
        <p>Имя в верхнем регистре: <span class="result"><?= $upperName ?></span></p>
        <p>Длина имени: <span class="result"><?= $nameLength ?></span> символов</p>
    </div>
    <div class="section">
        <h2>4. Операции с массивом</h2>
        <p>Количество оценок: <span class="result"><?= $gradesCount ?></span></p>
        <p>Максимальная оценка: <span class="result"><?= $maxGrade ?></span></p>
        <p>Минимальная оценка: <span class="result"><?= $minGrade ?></span></p>
    </div>
    <div class="section">
        <h2>5. Случайные числа</h2>
        <p>Случайное целое: <span class="result"><?= $randomInt ?></span></p>
        <p>Случайное дробное: <span class="result"><?= $randomFloat ?></span></p>
    </div>

    <div class="section">
        <h2>Калькулятор преобразований</h2>
        <form method="POST">
            <label>Введите рост в см:</label>
            <input type="number" name="heightCm" value="<?= htmlspecialchars($_POST['heightCm'] ?? '') ?>" required>
            <label>Введите возраст:</label>
            <input type="number" name="age" value="<?= htmlspecialchars($_POST['age'] ?? '') ?>" required>
            <button type="submit" name="calculate">Рассчитать</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate'])) {
            $inputHeight = isset($_POST['heightCm']) ? (float)$_POST['heightCm'] : $heightCm;
            $inputAge = isset($_POST['age']) ? (int)$_POST['age'] : $age;
            $heightInches = $inputHeight / 2.54;
            $heightMeters = $inputHeight / 100;
            $birthYear = 2024 - $inputAge;
            $futureAge = $inputAge + 5;
            $randomNumber = rand(1, 100);
            echo "<div class='result'>";
            echo "<p>Рост в дюймах: " . round($heightInches, 2) . "</p>";
            echo "<p>Рост в метрах: " . round($heightMeters, 2) . "</p>";
            echo "<p>Год рождения: " . $birthYear . "</p>";
            echo "<p>Случайное число: " . $randomNumber . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>
</body>
</html>
