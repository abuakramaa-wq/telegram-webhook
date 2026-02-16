
<?php
$input = file_get_contents("php://input");
file_put_contents("log.txt", $input . PHP_EOL, FILE_APPEND);
echo "OK";
