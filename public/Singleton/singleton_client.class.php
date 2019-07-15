<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-15
 * Time: 11:33
 */
require_once 'SingletonSample.class.php';

// インスタンスを２つ作成する
$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo '<hr>';

// 2つのインスタンスが同一IDかどうかを確認する
echo 'instance ID : ' . $instance1->getID() . '<br>';

echo '$instance1->getID() === $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');

echo '<hr>';

// 複製できないことを確認する
$instance1_clone = clone $instance1;

// new演算子でインスタンスを作成できないことを確認する
// $instance3 = new SingletonSample();  // <- Error
