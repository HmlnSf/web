// Написать доску объявлений. Пользователь указывает свой
// email, текст объявления, заголовок объявления (форма),
// категория. Для хранения объявлений использовать файлы.
// a) Создать несколько папок категорий.

<?php

const FILES_PATH = 'files/';

function getFiles(array $directories): array
{
	$result = [];
	foreach ($directories as $directory)
	{
		$files = array_diff(scandir(FILES_PATH  . $directory), ['.', '..']);
		foreach ($files as $file)
		{
			$filePath =  FILES_PATH . $directory . '/' . $file;
			$fileContent = file_get_contents($filePath);
			$fileHeader = preg_replace('/.txt$/', '', $file);
			$result[] = [
				'header' => $fileHeader,
				'content' => $fileContent,
				'category' => $directory
			];
		}
	}

	return $result;
}

$categories = array_diff(scandir('./files'), ['.', '..']);
$adverts = getFiles($categories);

?>

// б) Необходимо чтобы на странице была форма с полями
// (email, выбор категории(название выше созданных
// папок), заголовок объявления и текст объявления,
// кнопка Добавить).

<form action="" method="post">
	<p>Введите электронную почту<p>
		<label>
			<input type="email" name="email"/>
		</label>
	<p>Выберите категорию<p>
		<label>
			<select name="category">
				<?php foreach ($categories as $category):?>
					<option><?php echo $category?></option>
				<?php endforeach;?>
			</select>
		</label>
	<p>Введите заголовок объявления<p>
		<label>
			<input type="text" name="header"/>
		</label>
	<p>Введите текст объявления<p>
		<label>
			<textarea rows="6" cols="36" name="content"></textarea>
		</label>
		<input type="submit" value="Отправить">
</form>

// c) После формы список уже загруженных объявлений в
// виде таблички.

<table>
	<tr>
		<th>Категория</th>
		<th>Заголовок</th>
		<th>Текст объявления</th>
	</tr>
	<?php foreach ($adverts as $advert): ?>
		<tr>
			<th><?php echo $advert['category']?></th>
			<th><?php echo $advert['header']?></th>
			<th><?php echo $advert['content']?></th>
		</tr>
	<?php endforeach;?>
</table>

// d) После того, как пользователь нажал кнопку “добавить”,
//необходимо создать новый текстовый файл
//категория/заголовок_объявления.txt, содержимое
//файла - Текст объявления.

<?php
if (
	array_key_exists('email', $_POST)
	&& array_key_exists('category', $_POST)
	&& array_key_exists('header', $_POST)
	&& array_key_exists('content', $_POST)
)
{
	$filePath = FILES_PATH . $_POST['category'] . '/' . $_POST['header'] . '.txt';
	$file = fopen($filePath, 'wb');
	fwrite($file, $_POST['content']);
}
?>
