<?php

class Singleton
{
    private static $instance;

    /**
     * 构造函数必须私有化
     */
    private function __construct()
    {}

    /**
     * clone函数必须私有化
     */
    private function __clone()
    {}

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function display()
    {
        print "hello, singleton";
    }
}

class Client
{
    public static function main()
    {
        $s = Singleton::getInstance();
        $s->display();
    }
}

Client::main();

// 单例模式应用
// 1， 避免大量new操作
// 2， 全局配置信息
// thinking
// 1. 类在实例化时调用构造函数，为防止实例化，需要私有化构造函数
// 2. 为防止通过clone复制对象，也需要私有化__clone函数
// 3. 通过静态方法返回实例化并保存在静态属性中的的实例
// 4. 调用公共方法