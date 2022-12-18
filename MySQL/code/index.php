<?php

require_once 'dbconf.php';
require_once 'main.php';

$database = connectToDb(DB_DATA);

if (checkParams($_POST))
{
	createAd($database, $_POST);
	header('Location: index.php');
}

renderForm();
$ads = getAdList($database);
renderAdsContent($ads);