<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-18
 * Time: 08:02
 */
require_once 'ReaderFactory.class.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>作曲家と作品たち</title>
</head>
<body>
<?php

$filename = 'Music.csv';

$factory = new ReaderFactory();

$data = $factory->create($filename);

$data->read();

$data->display();

?>
</body>
</html>
