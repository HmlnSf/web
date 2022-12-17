<form action="" method="post">
	<label>
		<textarea rows="6" cols="36" name="secondA"></textarea>
	</label>
	<button type="submit" value="Отправить данные" style="width: 30px; height: 30px"></button>
</form>

<?php
if (array_key_exists('secondA', $_POST))
{
	$text = $_POST['secondA'];
	$matches = [];
	preg_match_all('/\w+/', $text, $matches);

	echo 'Количество слов: ' . count($matches[0]) . "<br>";
	echo 'Количество символов: ' . strlen($text);
}
?>
