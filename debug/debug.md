PHP - Debug
==================

### 常用命令

#### 打印信息
* echo
* printf("%.20f", $float); // 浮点数
* print_r, var_dump(var_export), debug_zval_dump
  - var_export必须返回合法的PHP代码，所以对资源型变量输出NULL
  - debug_zval_dump显示了refcount，引用次数
* debug_backtrace() && debug_print_backtrace()


#### 错误控制和日志记录
* error_reporting, display_errors, log_errors, error_log
  - error_reporting = E_ALL & ~E_NOTICE
* 错误抛出和处理
  - trigger_error
    - E_USER_ERROR
    - E_USER_WARNING
    - E_USER_NOTICE
  - set_error_handler
  - set_exception_handler

#### 读取配置变量
* ini_get(), ini_get_all(), ini_get_all('session');
* 如果想读取php.ini文件中的初始值，使用**get_cfg_var()**;

#### TODO gdb

### 相关资料
[PHP调试技术手册](http://www.laruence.com/2010/06/21/1608.html)