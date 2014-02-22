php
=======



## 安全模式safe_mode
    php.ini            safe_mode=on
    用户组安全：       safe_mode_gid
    执行程序主目录：   safe_mode_exec_dir=
    包含文件：         safe_mode_include_dir=
    脚本访问目录：     open_basedir=
    关闭危险函数：     disable_functions=system,exec,shell_exec,popen,phpinfo
    关闭版本信息：     expose_php=off
    关闭注册全局变量： register_globals=off

### 反射
   在PHP运行状态中，扩展分析PHP程序，导出或提取出关于类、方法、属性、参数等的详细信息，包括注释。这种动态获取的信息以及动态调用对象的方法的功能称为反射API。
   $class = new ReflectionClass('Cloud');
   $properties = $class->getProperties();
   $private_properties = $class->getProperties(ReflectionProperty::IS_PRIVATE)

## 网上资料

[manual](http://www.php.net/manual/zh/ "manual")

[ini.safe-mode](http://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode "ini.safe-mode")
