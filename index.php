<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            width: 600px;
            margin: 0 auto;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 7px 13px;
        }
    </style>
    <form action="server.php" method="post">
        <input type="text" placeholder="Введите ваше имя" name="name"><br>
        <p>Выберите вашу группу</p>
        <select size="1" name="group">
            <option disabled>Выберите вашу группу</option>
            <option value="t1">ПИ 11</option>
            <option value="t2">ПИ 21</option>
            <option value="t3">ПИ 31</option>
        </select><br>
        <p>Выберите ваш пол</p>
        <select size="1" name="pol">
            <option disabled>Выберите ваш пол</option>
            <option value="m">М</option>
            <option value="d">Ж</option>
        </select><br>
        <input type="text" placeholder="Чем хотите заняться?" name="zanatioe"><br><br>
        <input type="submit" value="Проверить">
    </form><br>
    <form action="proverka.php">
        <h1>Проверка пользователя</h1>
        <input type="text" placeholder="Введите имя" name="name"><br><br>
        <input type="submit" value="Проверить">
    </form>
</body>
</html>