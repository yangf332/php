<?php

// __construct()， __destruct()， 
// __call()， __callStatic()， 
// __get()， __set()， __isset()， __unset()， 
// __sleep()， __wakeup()， 
// __toString()， __invoke()， __set_state()， __clone() 和 __debugInfo() 
// 

class Obj
{
    private $attr1;

    public function __construct()
    {
        echo  __METHOD__  . "\n";
    }

    public function __get($name)
    {
        echo  __METHOD__  . "\n";
        return $this->$name;
    }

    public function __set($name, $value)
    {
        echo  __METHOD__  . "\n";
        $this->$name = $value;
    }

    // 在对象中调用一个不可访问方法时，__call() 会被调用
    public function __call($name, $arguments)
    {
        echo "Calling objcet method $name \n";
    }

    // 在静态方式中调用一个不可访问方法时，__callStatic()  会被调用
    public function __callStatic($name, $arguments)
    {
        echo "Calling static method $name \n";
    }

    public function __isset($name)
    {
        echo "当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用 \n";
    }

    public function __unset($name)
    {
        echo "当对不可访问属性调用 unset() 时，__unset() 会被调用 \n";
    }

    // 当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用。本特性只在 PHP 5.3.0 及以上版本有效
    public function __invoke($name)
    {
        var_dump($name);
    }

    public function __clone()
    {
        echo "Calling method clone \n";
    }

    public function __sleep()
    {
        return array('attr1');
    }

    public function __wakeup()
    {
        echo $this->attr1 . "\n";
    }

    public function __toString()
    {
        return  __METHOD__  . "\n";
    }

    public function __destruct()
    {
        echo __METHOD__ . "\n";
    }
}

class Client
{
    public static function main()
    {
        $o = new Obj();
        echo $o;
        $o->attr1 = 100;
        echo $o->attr1 . "\n";
        $o->can_not_call();
        $o::can_not_call();
        $o(array('a' => 1, 'b' => 2));

        $obj = clone $o;
    }
}


Client::main();