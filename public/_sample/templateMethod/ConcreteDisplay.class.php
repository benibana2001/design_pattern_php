<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-18
 * Time: 06:16
 */
require_once 'TemplateDisplay.class.php';

class ConcreteDisplay extends TemplateDisplay
{
    function format()
    {
        $column = 0;
        $tmp = "";
        while ($data = fgetcsv($this->handle, 1000, ",")) {
            $num = count($data);
            for ($c = 0; $c < $num; $c++) {
                if ($c == 0) {
                    if ($column != 0 && $data[$c] != $tmp) {
                        echo "</ul>";
                    }
                    if ($data[$c] != $tmp) {
                        echo "<b>" . $data[$c] . "</b>";
                        echo "<ul>";
                        $tmp = $data[$c];
                    }
                } else {
                    echo "<li>";
                    echo $data[$c];
                    echo "</li>";
                }
            }
            $column++;
        }
        echo "</ul>";
    }
}
