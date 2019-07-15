<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-16
 * Time: 08:01
 */
require_once 'DisplaySourceFile.class.php';// <- Interface Class
require_once 'ShowFile.class.php';

// DisplaySourceFile を実装したクラス
class DisplaySourceFileImpl implements DisplaySourceFile
{
    // ShowFileクラスのインスタンスを保持する
    private $show_file;

    // コンストラクタ
    public function __construct($filename)
    {
        $this->show_file = new ShowFile($filename);
    }

    // 指定されたソースファイルをハイライト表示する
    public function display()
    {
        $this->show_file->showHighLight();
    }
}
