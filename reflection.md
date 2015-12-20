PHP - 反射
==================

### 反射
* 常用于自动加载插件、自动文档编写，甚至扩展PHP语言
* 查看整个清单
  - Reflection::export(new ReflectionExtension('reflection'))
  - 用户自定义类
* 反射API部分类
  - Reflection
  - ReflectionClass
  - ReflectionMethod
  - ReflectionParameter
  - ReflectionProperty
  - ReflectionFunction
  - ReflectionExtension
  - ReflectionException  
  
```
foreach (get_declared_classes() as $class)
{
    $reflectionClass = new ReflectionClass($class);
    if ($reflectionClass->isUserDefined()) {
        printf("ClassName: %s <br />", $class);

        printf("  -- Methods: <br />");
        var_dump($methods = $reflectionClass->getMethods());

        printf("  -- Properties: <br />");
        var_dump($reflectionClass->getProperties());

        printf("  -- DocComment: <br />");
        var_dump($reflectionClass->getDocComment());

        printf("  -- Method checklist: <br />");
        foreach ($methods as $method) {
            $reflectionMethod = new ReflectionMethod($class, $method->name);
            printf("%s() isAbstract -- %s:<br />", $method->name,
                $reflectionMethod->isAbstract() ? 'true' : 'false');

            printf("%s() isPublic -- %s:<br />", $method->name,
                $reflectionMethod->isPublic() ? 'true' : 'false');

            printf("%s() isProtected -- %s:<br />", $method->name,
                $reflectionMethod->isProtected() ? 'true' : 'false');

            printf("%s() isPublic -- %s:<br />", $method->name,
                $reflectionMethod->isPublic() ? 'true' : 'false');

            printf("%s() isFinal -- %s:<br />", $method->name,
                $reflectionMethod->isFinal() ? 'true' : 'false');
        }

    }
}
```


### 相关资料
[reflection](http://www.php.net/language.oop5.reflectionisUserDefined)