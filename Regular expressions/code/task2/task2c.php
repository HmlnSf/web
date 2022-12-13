<?php
session_start();
if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['salary']) && !empty($_POST['position'])) {
    $_SESSION['userinfo'] = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'position' => $_POST['position']
    );
}
?>
<form action="task2c.php" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="age" placeholder="Возраст">
    <input type="text" name="salary" placeholder="Зарплата">
    <input type="text" name="position" placeholder="Должность">
    <input type="submit" value="Отправить">
</form>

<form action="task2c_show.php" method="post">
    <input type="submit" value="Показать информацию">
</form>