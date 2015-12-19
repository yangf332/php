PHP - 未分类
==================

### 未分类
* PHP_SAPI , php_sapi_name()
  - PHP_SAPI === 'cli'   // 命令行
  - [PHP_SAPI](http://php.net/manual/zh/function.php-sapi-name.php)

* register_shutdown_function
  - Registers a callback to be executed after script execution finishes or exit() is called.
  - [register_shutdown_function](http://php.net/manual/zh/function.register-shutdown-function.php)

* 切割运算表达式
  - $match = '3 + 21 / 7 - 9';
  - $stack = preg_split('/ *([+\-\/*]) */', $match, -1, PREG_SPLIT_DELIM_CAPTURE);

* 处理极大数或极小数
  - $sum = bcadd('12345678', '87654321');
  - 使用GMP库
    - gmp_strval( gmp_add('1234567812345678', '8765432187654321') );
    - [GMP](http://php.net/manual/zh/book.gmp.php)
    
* base_convert('a1', 16, 10); // 进制转换

* 进程间共享变量
  - shmop
    - Shmop is an easy to use set of functions that allows PHP to read, write, create and delete Unix shared memory segments.
    - (shmop)[http://php.net/manual/zh/book.shmop.php]
  - System V
  

