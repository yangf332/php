php
=======

## 安全模式safe_mode
    php.ini          safe_mode=on
    用户组安全：       safe_mode_gid
    执行程序主目录：    safe_mode_exec_dir=
    包含文件：         safe_mode_include_dir=
    脚本访问目录：      open_basedir=
    关闭危险函数：     disable_functions=system,exec,shell_exec,popen,phpinfo
    关闭版本信息：     expose_php=off
    关闭注册全局变量： register_globals=off

### 反射
   在PHP运行状态中，扩展分析PHP程序，导出或提取出关于类、方法、属性、参数等的详细信息，包括注释。这种动态获取的信息以及动态调用对象的方法的功能称为反射API。
   $class = new ReflectionClass('Cloud');
   $properties = $class->getProperties();
   $private_properties = $class->getProperties(ReflectionProperty::IS_PRIVATE)

### 作用域关键字
    public、private和protected是在PHP5中引入的。在PHP4下无法正常运行。
    在PHP4中，所有属性都用var声明，考虑到向后兼容，PHP5保留了var，并自动转换为public。

### 其它
    * 一个类可以同时继承一个父类和实现任意个接口。extends子句应该在implements子句之前。
        class Ebook extends Book implements Readable, Writeable {}

## 网上资料

### php session
    原理：服务器通过名为PHPSESSID的cookie查找session.save_path目录里对应的session文件，读取其反序列化内容
    对性能的影响：
        同一目录下超过10000个文件时，文件定位非常耗时。可以通过修改php.ini中session.save_path = “2;/path/to/session/dir”，将session存储在两级子目录中（需要自己创建）。
    session同步：
        存储在memcache或者mysql中
        检查种下的加密cookie，如果有效则重建session
        

[manual](http://www.php.net/manual/zh/ "manual")

[ini.safe-mode](http://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode "ini.safe-mode")

[php session](http://blog.csdn.net/luobo525/article/details/3946119)