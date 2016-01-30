PHP - FAQ
==================

### PHP
* 安装mysql扩展时报错：ext/mysqlnd/mysqlnd.h: No such file or directory
  - 说明在此：https://bugs.php.net/bug.php?id=65377
  - 解决方法：重装了php，加上 --with-mysql=mysqlnd，正常
* PHP Warning: Module 'modulename' already loaded in Unknown on line 0
  - 解决方法：修改php.ini文件，注释掉extension=modulename.so

### PHP-FPM
* ERROR: unable to bind listening socket for address '127.0.0.1:9000': Address 
  - 解决方法：killall php-fpm; service php-fpm start
  