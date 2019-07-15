<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-16
 * Time: 07:51
 */
require_once 'DisplaySourceFileImpl.class.php';

// ShowFile をインスタンス化する
try {
    $show_file = new DisplaySourceFileImpl('./ShowFile.class.php');
}

catch (Exception $e) {
    die($e->getMessage());
}

$show_file->display();
