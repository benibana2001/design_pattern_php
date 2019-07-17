<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-15
 * Time: 11:50
 */
require_once 'TemplateMethod/TableDisplay.class.php';

$data_master = array(
    '<a href="TemplateMethod/template_method_client.php">Template Method Pattern</a>',
    '<a href="Singleton/singleton_client.class.php">Singleton Pattern</a>',
    '<a href="Adapter/adapter_sample_client.php">Adapter Pattern</a>',
    '<a href="FactoryMethod/factory_client.php">FactoryMethod Pattern</a>',
);

$data_sample = array(
    '<a href="_sample/templateMethod/client.php">Sample/Template Method Pattern</a>'
);

$d1 = new TableDisplay($data_master);
$d2 = new TableDisplay($data_sample);

//

$d1->display();

echo '<hr>';

$d2->display();
