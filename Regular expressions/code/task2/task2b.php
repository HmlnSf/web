<?php session_start() ?>

<form action="" method="post">
	<p>Введите вашу фамилию<p>
		<label>
			<input type="text" name="surname"/>
		</label>
	<p>Введите ваше имя<p>
		<label>
			<input type="text" name="name"/>
		</label>
	<p>Введите ваш возраст<p>
		<label>
			<input type="text" name="age"/>
		</label>
		<input type="submit" value="Отправить">
</form>

<a href="task2b_show.php">Перейти к просмотру результатов</a>

<?php
if (
	array_key_exists('surname', $_POST)
	&& array_key_exists('name', $_POST)
	&& array_key_exists('age', $_POST)
)
{
	$_SESSION['surname'] = $_POST['surname'];
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['age'] = $_POST['age'];
}
