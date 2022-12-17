// c) На одной странице с помощью формы спросите у
// пользователя имя, возраст, зарплату и еще что-нибудь.
// Запишите эти данные в одну переменную сессии в виде
// массива. При заходе на другую страницу переберите
// сохраненные данные циклом и выведите каждый элемент
// массива в своем теге li тега ul.

<?php session_start() ?>

<form action="" method="post">
	<p>Введите ваше имя<p>
		<label>
			<input type="text" name="name"/>
		</label>
	<p>Введите ваш возраст<p>
		<label>
			<input type="text" name="age"/>
		</label>
	<p>Введите вашу зарплату<p>
		<label>
			<input type="text" name="salary"/>
		</label>
	<p>Кем вы хотели стать в детстве?<p>
		<label>
			<input type="text" name="question"/>
		</label>
		<input type="submit" value="Отправить">
</form>

<a href="task2c_show.php">Перейти к просмотру результатов</a>

<?php
if (
	array_key_exists('name', $_POST)
	&& array_key_exists('age', $_POST)
	&& array_key_exists('salary', $_POST)
	&& array_key_exists('question', $_POST)
)
{
	$_SESSION['result'] = [
		'name' => $_POST['name'],
		'age' => $_POST['age'],
		'salary' => $_POST['salary'],
		'question' => $_POST['question']
	];
}
