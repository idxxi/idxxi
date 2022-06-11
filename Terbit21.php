<?php
$URL = 'https://185.53.88.162/1001-film/';

$headers = get_headers($URL);
foreach($headers as $value) {
    echo $value;
    echo "<br>";
}
?>
