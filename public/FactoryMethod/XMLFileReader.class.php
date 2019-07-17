<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-18
 * Time: 07:49
 */
require_once 'Reader.class.php';

class XMLFileReaer implements Reader
{
    private $filename;

    private $handler;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function read()
    {
        // TODO: Implement read() method.
        $this->handler = fopen($this->filename, "r");
    }

    private function convert($str)
    {
        return mb_convert_encoding($str, mb_internal_encoding(), "auto");
    }

    public function display()
    {
        // TODO: Implement display() method.
        foreach ($this->handler->artist as $artist) {
            echo "<b>" . $this->convert($artist['name']) . "</b>";
            echo "<ul>";
            foreach ($artist->music as $music) {
                echo "<li>";
                echo $this->convert($music['name']);
                echo "</li>";
            }
            echo "</ul>";
        }
    }
}
