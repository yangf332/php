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