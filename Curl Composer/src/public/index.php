<?php
error_reporting(E_ERROR | E_PARSE);
require_once ('../../vendor/autoload.php');

$googleAccountKeyFilePath = __DIR__ . '/watchful-idea-333811-a652e1d9b95c.json';
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope('https://www.googleapis.com/auth/spreadsheets');

$service = new Google_Service_Sheets($client);

$spreadSheetId = '1-IMyj00s11fh1y3HKLP7FnmjWXcR5_BwF42wcbThngM';

$categories =  array_diff(scandir('../lab3/files'), ['.', '..']);

?>

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

<?php
if (
	array_key_exists('email', $_POST)
	&& array_key_exists('category', $_POST)
	&& array_key_exists('header', $_POST)
	&& array_key_exists('content', $_POST)
)
{
	$values = [[
				   $_POST['email'],
				   $_POST['category'],
				   $_POST['header'],
				   $_POST['content']]
	];
	$body = new Google_Service_Sheets_ValueRange();
	$body->setValues($values);
	$options = ['valueInputOption' => 'RAW'];
	$service->spreadsheets_values->append($spreadSheetId, 'newList', $body, $options);

	header('Location: index.php');
}
