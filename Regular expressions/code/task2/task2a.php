<form action="task2a.php" method="post">
    <p>Введите текст русскими буквами</p>
    <label>
        <textarea name="task2a"></textarea>
    </label>
    <input type="submit" value="Отправить">
</form>

<?php
if (!empty($_POST['task2a'])) {
    $text = $_POST['task2a'];
    $words = str_word_count($text, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    $symbols = strlen($text);
    echo nl2br("\n" . "Количество слов: " . $words . "\n");
    echo nl2br("\n" . "Количество символов: " . $symbols . "\n");
}
?>