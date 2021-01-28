
<?php
  $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

  $error = '';
  if(strlen($login) <= 3)
    $error = 'Введите логин';
  else if(strlen($pass) <= 3)
    $error = 'Введите пароль';

  if($error != '') {
    echo $error;
    exit();
  }

  $hash = "sdfjsdkhgs234jh324SDk";
  $pass = md5($pass . $hash);

  // $mysql = new mysqli('localhost', 'root', 'root', 'test');
  // $mysql->query("INSERT INTO `love` (`name`, `email`, `login`, `pass`) VALUES('$name', '$email', '$login', '$pass')");
  // $mysql->close();

  // header('Location: ../');
  // exit();

  require_once '../mysql_con.php';

  $sql = 'SELECT `id` FROM `love` WHERE `login` = :login && `pass` = :pass';
  // $sql = 'INSERT INTO love(name, email, login, pass) VALUES(?, ?, ?, ?)';
  $query = $pdo->prepare($sql);
  $query->execute(['login' => $login, 'pass' => $pass]);

  $user = $query->fetch(PDO::FETCH_OBJ);

  if($user->id == 0)
    echo "Такого пользователя не существует";
  else {
      setcookie('log', $login, time() + 3600 * 24 * 30, "glavcayt/index.php");
     echo "Готово";
  }

 ?>

 