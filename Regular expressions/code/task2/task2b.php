<?php
session_start();
if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['age'] = $_POST['age'];
}
?>
<form action="task2b.php" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="age" placeholder="Возраст">
    <input type="submit" value="Отправить">
</form>

<form action="task2b_show.php" method="post">
    <input type="submit" value="Показать информацию">
</form>
