<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
</head>
<body>
<div class="container" style="text-align: center;">
    <form action="server.php" method="post">
        <h1>Подать заявку</h1>
        <input class="form-control" type="text" placeholder="Введите ваше имя" name="name"><br>
        <p>Выберите вашу группу</p>
        <select size="1" name="group" class="form-select">
            <option disabled>Выберите вашу группу</option>
            <option value="t1">ПИ 11</option>
            <option value="t2">ПИ 21</option>
            <option value="t3">ПИ 31</option>
        </select><br>
        <p>Выберите ваш пол</p>
        <select size="1" name="pol" class="form-select">
            <option disabled>Выберите ваш пол</option>
            <option value="m">М</option>
            <option value="d">Ж</option>
        </select><br>
        <input type="text" class="form-control" placeholder="Чем хотите заняться?" name="zanatioe"><br><br>
        <input class="btn btn-danger" type="submit" value="Отправить заявку">
    </form><br>
    <form action="proverka.php" method="post">
        <h1>Проверка пользователя</h1>
        <input id="search" class="form-control" type="text" placeholder="Введите имя" name="name"><br><br>
        <div id="inputs">
            
        </div>
    </form>
</div>
</body>
</html>