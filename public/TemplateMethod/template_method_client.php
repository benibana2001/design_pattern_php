<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-15
 * Time: 08:23
 */
require_once 'ListDisplay.class.php';
require_once 'TableDisplay.class.php';

$data = array(
    'マンチカン',
    'キジトラ',
    'サバトラ',
    'ハチワレ',
    'スコティッシュフォールド',
    'チャトラ',
    'ロシアンブルー'
);

$display1 = new ListDisplay($data);
$display2 = new TableDisplay($data);

$display1->display();

echo '<hr>';

$display2->display();
