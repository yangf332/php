<?php

abstract class Operation
{
    abstract public function getValue($num1, $num2);
}

class OperationAdd extends Operation
{
    public function getValue($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class OperationSub extends Operation
{
    public function getValue($num1, $num2)
    {
        return $num1 - $num2;
    }
}


class OperationMul extends Operation
{
    public function getValue($num1, $num2)
    {
        return $num1 * $num2;
    }
}

class OperationDiv extends Operation
{
    public function getValue($num1, $num2)
    {
        try {
            if ($num2 == 0) {
                throw new Exception('除数不能为0');
            } else {
                return $num1 / $num2;
            }
        } catch (Exception $e) {
            echo 'error: ' . $e->getMessage();
        }
    }
}

class Factory
{
    public static function create($operate)
    {
        switch ($operate) {
            case '+':
                return new OperationAdd();
                break;
            case '-':
                return new OperationSub();
                break;
            case '*':
                return new OperationMul();
                break;
            case '/':
                return new OperationDiv();
                break;
        }
    }
}

class Client
{
    public static function main()
    {
        $o = Factory::create('+');
        $result = $o->getValue(3, 100);
        echo $result;
    }

}

Client::main();

// Thinking
// 调用工厂类的方法生成不同的类的实例，通过多态实现类似的操作