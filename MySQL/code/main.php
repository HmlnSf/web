<?php

function connectToDb(array $config): mysqli
{
	return new mysqli(
		$config['hostname'],
		$config['username'],
		$config['password'],
		$config['database']
	);
}

function checkParams(array $params): bool
{
	return array_key_exists('email', $params)
		&& array_key_exists('category', $params)
		&& array_key_exists('title', $params)
		&& array_key_exists('description', $params)
	;
}

function createAd(mysqli $mysqli, array $params)
{
	$queryStr = "INSERT INTO ad (EMAIL, TITLE, DESCRIPTION, CATEGORY)
		VALUES ('{$params['email']}', '{$params['title']}', '{$params['description']}', '{$params['category']}')
	";

	$mysqli->query($queryStr);
}

function getAdList(mysqli $mysqli)
{
	$result = [];
	$queryStr = "SELECT * FROM ad ORDER BY DESCRIPTION DESC";

	$queryResult = $mysqli->query($queryStr);
	if ($queryResult)
	{
		while ($row = $queryResult->fetch_assoc())
		{
			$result[] = $row;
		}

		$queryResult->close();
	}

	return $result;
}

function renderForm()
{
	echo '<form action="" method="post">
		<p>Введите электронную почту<p>
			<label>
				<input type="email" name="email"/>
			</label>
		<p>Выберите категорию<p>
			<label>
				<select name="category">'
					. getCategoryOptions() .
				'</select>
			</label>
		<p>Введите заголовок объявления<p>
			<label>
				<input type="text" name="title"/>
			</label>
		<p>Введите текст объявления<p>
			<label>
				<textarea rows="6" cols="36" name="description"></textarea>
			</label>
		<input type="submit" value="Отправить">
	</form>';
}

function getCategoryOptions(): string
{
	$result = '';
	$categories = array_diff(scandir('../lab3/files'), ['.', '..']);

	foreach ($categories as $category)
	{
		$result .= "<option>$category</option>";
	}

	return $result;
}

function renderAdsContent(array $selectedAds)
{
	$adsContent = '';
	foreach ($selectedAds as $ad)
	{
		$fields = '';
		foreach ($ad as $field)
		{
			$fields .= "<td>" . htmlspecialchars($field) . "</td>";
		}

		$adsContent .= "<tr>" . $fields . "</tr>";
	}

	echo '<table>
	<tr>
		<th>ID</th>
		<th>Электронная почта</th>
		<th>Заголовок</th>
		<th>Текст объявления</th>
		<th>Категория</th>
		<th>Дата создания</th>
	</tr>
	' . $adsContent . '
	</table>';
}