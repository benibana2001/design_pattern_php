<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-15
 * Time: 08:01
 */
abstract class AbstractDisplay
{
    // 表示するデータ
    private $data;

    // コンストラクタ
    public function __construct($data)
    {
        if(!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    // template method
    public function display()
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    // データを取得する
    public function getData()
    {
        return $this->data;
    }

    // ヘッダを表示する
    protected abstract function displayHeader();

    // ボディを表示する
    protected abstract function displayBody();

    // フッタを表示する
    protected abstract function displayFooter();
}
