PHP safe_mod
====================

### 开启方法
    php.ini文件中 safe_mode = on

### 影响
  - 用户组安全
  - 执行程序主目录
    - safe_mode_exec_dir = /usr/bin 
    - 推荐指向一个目录，把需要的程序copy过去
  - 包含文件
    - safe_mode_include_dir = /var/www/website/include/ 
  - 脚本能访问的目录
    - open_basedir = /usr/www
  - 关闭危险函数
    - disable_functions = system,passthru,exec,shell_exec,popen,phpinfo 
  - 关闭php版本信息
    - expose_php = Off 
  - 关闭注册全局变量 
    register_globals = Off 
