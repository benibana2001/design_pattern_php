<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-15
 * Time: 08:02
 */
require_once 'AbstractDisplay.class.php';

class ListDisplay extends AbstractDisplay
{
    // ヘッダを表示する
    protected function displayHeader()
    {
        echo '<dl>';
    }

    // ボディ（クライアントから渡された内容）を表示する
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    // フッタを表示する
    protected function displayFooter()
    {
        echo '</dl>';
    }
}
