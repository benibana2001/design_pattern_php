<html lang="ja">
<head>
<title>作曲家と作品たち</title>
</head>
<body>
<?php
    require_once 'ConcreteDisplay.class.php';

    $display = new ConcreteDisplay('Music.csv');

    $display->display();
?>
</body>
</html>
