<?php

class Singleton
{
    // 保存类唯一实例的静态成员变量
    private static $instance;

    // 构造函数和克隆函数必须为私有
    private function __construct()
    {

    }

    private function __clone()
    {

    }

    // 访问实例的公共静态方法
    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function display()
    {
        print 'hello, singleton';
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