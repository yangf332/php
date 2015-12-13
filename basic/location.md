PHP - 国际化和本地化
==================

### 概念
* 国际化（internationalization 简称 I18N，i与n之间有18个字母）
* 本地化（localization 简称 L10N）
* 地区是一级描述某一特定区域文本格式和语言习惯的设置集合，分6个类别
  - LC_ALL
    - LC_COLLATE    文本顺序
    - LC_CTYPE      大小写转换
    - LC_MONETARY   货币格式 
    - LC_NUMERIC    数字格式
    - LC_TIME       日期和时间格式
    - LC_MESSAGES   文本消息
* 地区名通常由三个部分构成
  - 语言缩写：en, pt
  - 不同国家：en_US, en_UK, pt_BR
  - 可选字符集：zh_TW.Big5
  - 在linux系统中使用locale命令可查看
* 设置命令
  - setlocale(LC_ALL, 'en_US');
  - print setlocale(LC_ALL, 0); 
  - 使用别名 setlocale(LC_ALL, 'russian');
    - 别名文件放在/usr/share/locale/locale.alias这样的文件中
  - **money_format()**;
  - **strftime()**;
  - number_format();
  - mb_xxx();
  

### 相关资料
[PHP经典实例](http://book.douban.com/subject/4099306/ '第19章')