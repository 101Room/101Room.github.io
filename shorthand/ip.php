<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Вывод IP-адреса и браузера пользователя</title>
  <meta charset='utf-8'>
</head>
<body>
  Пробиваю тебя по айпишнику, <?= $_REQUEST['name'] ?><br />
  Твой IP-адрес: <?= $_SERVER['REMOTE_ADDR'] ?><br />
  Браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?><br />
  Всё, за тобой выехал отряд хомячков-дисантников!
</body>
</html>
