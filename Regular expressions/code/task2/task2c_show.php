<?php
session_start();
if (!empty($_SESSION['userinfo'])) {
    foreach ($_SESSION['userinfo'] as $key => $value) {
        echo "<li>" . $key . ": " . $value;
    }
} else {
    echo nl2br("\n" . "Данные не сохранены" . "\n");
}
