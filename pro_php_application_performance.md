高性能PHP应用开发
=======

## PHP应用程序栈
    前端 (JS/CSS/Images)
    PHP
        编码最佳实践
        Opcode缓存
        变量/数据缓存
    数据库
    Web服务器
    OS


## PHP编码最佳实践
    使用require代替require_once，include相同
    提前计算一个for循环的长度
    比较for、foreach和while循环在访问数组元素时的性能
    使用file_get_contents访问文件
    使用逗号连接字符串
    使用双引号

## PHP Opcode缓存
    PHP的生命周期：
        Zend引擎读取文件
        扫描词典和表达式
        解析文件
        创建opcode（要执行的计算机代码）
        执行opcode

## PHP变量缓存
    APC缓存
    Memcached
    