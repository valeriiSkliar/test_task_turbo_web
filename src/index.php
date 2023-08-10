<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додаток про собак</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="dog_type">Виберіть породу собаки:</label>
        <select id="dog_type" name="dog_type">
            <option value="shiba-inu">Сіба-Іну</option>
            <option value="mops">Мопс</option>
            <option value="taxa">Такса</option>
            <option value="plush_labrador">Плюшевий лабрадор</option>
            <option value="rubber_taxa">Гумова такса з пищалкою</option>
        </select>

        <label for="action">Виберіть дію:</label>
        <select id="action" name="action">
            <option value="sound">Звук</option>
            <option value="hunt">Полювання</option>
        </select>

        <input type="submit" value="Виконати">
    </form>

    <?php
        if(isset($_GET['result'])) {
            echo '<div>Результат: ' . htmlspecialchars($_GET['result']) . '</div>';
        }
    ?>
</body>
</html>
