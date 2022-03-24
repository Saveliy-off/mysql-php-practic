<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
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
        <input type="text" placeholder="Чем хотите заняться?" name="zanatioe">
        <button>Отправить</button>
    </form>
</body>
</html>