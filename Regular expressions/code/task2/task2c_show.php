<?php session_start() ?>

<?php
if (array_key_exists('result', $_SESSION))
{
	echo "<ul>";
	foreach ($_SESSION['result'] as $param)
	{
		echo "<li>" . $param . "</li>";
	}
	echo "</ul>";
}
