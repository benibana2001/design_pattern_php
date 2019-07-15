<?php
/**
 * Created by IntelliJ IDEA.
 * User: yusuke
 * Date: 2019-07-15
 * Time: 11:19
 */
class SingletonSample
{
    private $id;

    // 唯一のインスタンスを保持する変数
    private static $instance;

    // コンストラクタ IDとして、生成日時のハッシュ値を作成
    private function __construct()
    {
        $this->id = md5(date('r') . mt_rand());
    }

    // 唯一のインスタンスを返すメソッド
    public static function getInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new SingletonSample();
            echo 'a SingletonSample instance was created !';
        }

        return self::$instance;
    }

    // IDを返す
    public function getID(){
        return $this->id;
    }

    // このインスタンスの複製を許可しないようにする
    public final function __clone()
    {
        throw new RuntimeException('Clone is not allowed against' . get_class($this));
    }
}
