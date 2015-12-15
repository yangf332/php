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
  - trigger_errorg
    - E_USER_ERROR
    - E_USER_WARNING
    - E_USER_NOTICE
  - set_error_handler
  - set_exception_handler

#### 读取配置变量
* ini_get(), ini_get_all(), ini_get_all('session');
* 如果想读取php.ini文件中的初始值，使用**get_cfg_var()**;

#### gdb
* 调试可执行文件
  - gcc -g debug.c -o debug // 必须加上-g选项
  - gdb debug
  - list 
* 命令
  - start
  - list, l {function_name}, l {line_number}
  - next, n
  - step, s
  - print, p
  - quit, q
  - backtrace, bt
  - info locals, i locals
  - set var
  - break // 打断点
    - info break
* PHP的代码包中提供了一个 .gdbinit 的gdb脚本文件，里面提供了20多个 gdb 的自定义命令
  - print_cvs 
  - printzv
  - zbacktrace
  - print_ft
  
#### xdebug
* Basic Features
* Variable Display Features
    - ;是否覆盖php里面的函数var_dump();默认是开启的，值为1；设为0，则关闭；
    - xdebug.overload_var_dump = 1
    - ;控制数组子元素显示的大小默认为256
    - xdebug.var_display_max_children = 256
    - ;控制变量打印的大小，默认为512
    - xdebug.var_display_max_data = 512
    - ;控制数组和对象元素显示的层级。默认为3
    - xdebug.var_display_max_depth = 3
    - ini_set('xdebug.var_display_max_children', 3 );
    - void var_dump( [mixed var [, ...]] )
    - void xdebug_debug_zval( [string varname [, ...]] )
    - void xdebug_debug_zval_stdout( [string varname [, ...]] )
    - ini_set('xdebug.var_display_max_children', -1 );
    - xdebug_call_class(), , xdebug_call_file(), xdebug_call_line()
* Stack Traces
  - xdebug_get_function_stack(), xdebug_start_trace('trace'), xdebug_stop_trace(),
* Function Traces
  - xdebug_call_function()
* Code Coverage Analysis
  - xdebug_start_code_coverage( [int options] )
    - XDEBUG_CC_UNUSED     // 未被调用过的
    - XDEBUG_CC_DEAD_CODE  // 僵尸代码
    - xdebug_stop_code_coverage();
    - array xdebug_get_code_coverage();
      - [filename][line] = numberofcalls
* Profiling PHP Scripts
  - xdebug_memory_usage()
  - xdebug_peak_memory_usage() //返回启动脚本后脚本所使用内存高峰值
  - xdebug_time_index() // 脚本执行总时间
* Remote Debugging



### 相关资料
[PHP调试技术手册](http://www.laruence.com/2010/06/21/1608.html)

[Linux学习--gdb调试](http://www.cnblogs.com/hankers/archive/2012/12/07/2806836.html)

[Debugging with GDB](http://www.delorie.com/gnu/docs/gdb/gdb_toc.html)

[xdebug.org](http://xdebug.org/docs/)