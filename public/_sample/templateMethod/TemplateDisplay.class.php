<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-18
 * Time: 05:40
 */
abstract class TemplateDisplay
{
    private $data;

    protected $handle;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function display()
    {
        $this->openFile();
        $this->format();
        $this->closeFile();
    }

    public function getData()
    {
        return $this->data;
    }

    // ファイルの内容を書き出す
    protected abstract function format();

    // ファイルを開く
    final function openFile()
    {
        $this->handle = fopen($this->data, "r");
    }

    // ファイルを閉じる
    final function closeFile()
    {
        fclose($this->handle);
    }
}
