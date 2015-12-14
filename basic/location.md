PHP - 国际化和本地化
==================

### 概念
* 国际化（internationalization 简称 I18N，i与n之间有18个字母）
* 本地化（localization 简称 L10N）
* 地区是一级描述某一特定区域文本格式和语言习惯的设置集合
  - LC_ALL
    - LC_COLLATE    文本顺序
    - LC_CTYPE      大小写转换
    - LC_MONETARY   货币格式 
    - LC_NUMERIC    数字格式
    - LC_TIME       日期和时间格式
    - LC_MESSAGES   文本消息
    - LC_NAME       姓名书写方式
    - LC_ADDRESS    地址书写方式
    - LC_TELEPHONE  电话号码书写方式
    - LC_MEASUREMENT 度量衡表达方式
    - LC_PAPER      默认纸张尺寸大小
    - LC_IDENTIFICATION 自身包含信息的概述
  - 定义文件在 /usr/share/i18n/locales目录下
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

[Linux中LANG,LC_ALL,local详解](http://blog.csdn.net/z4213489/article/details/7937894)