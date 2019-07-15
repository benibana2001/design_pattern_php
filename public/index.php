<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-15
 * Time: 11:50
 */
require_once 'TemplateMethod/TableDisplay.class.php';

$data = array(
    '<a href="TemplateMethod/template_method_client.php">Template Method Pattern</a>',
    '<a href="Singleton/singleton_client.class.php">Singleton Pattern</a>',
);

$display = new TableDisplay($data);

$display->display();
