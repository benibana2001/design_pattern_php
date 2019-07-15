<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-16
 * Time: 07:46
 */
class ShowFile
{
    // 内容を表示するファイル名
    private $filename;

    // コンストラクタ
    public function __construct($filename)
    {
        if(!is_readable($filename)) {
            throw new Exception('file "' . $filename . '" is not readable !');
        }
        $this->filename = $filename;
    }

    // プレーンテキストとして表示する DisplaySource インターフェースクラスにより使用を禁止される
    public function showPlain()
    {
        echo '<pre>';
        echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES, mb_internal_encoding());
        echo '</pre>';
    }

    // キーワードをハイライトして表示する DisplaySourceImpl クラスによりdisplay()関数によりラップされる
    public function showHighLight()
    {
        highlight_file($this->filename);
    }
}
