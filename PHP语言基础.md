## PHP语言基础

### 注释
* 单行注释中不能出现 ?>，编译器认为脚本结束

### 数据类型
* boolean、string、integer、float、array、object
* 字符串尽量使用单引号
```php
// 单引号 & 双引号
$m = 1;
echo '\$m = $m' .'</br>';       // \$m = $m
echo "\$m = $m" .'</br/>';      // $m = 1
```
* 字符串双引号和定界符<<<效果一样
    * 结束标识符必须单独另起一行，并且不允许有空格，在标识符前后有其他字符，也会发生错误
```php
$string = <<< str
要输出的字符串
str
```
* 整数溢出时自动返回浮点型数据

#### 数组
```php
// PHP的数组下标可以是数字或者字符串
// 方式一
$array = array('value1', 'vaule2');
// 方式二
$arrary[key] = 'value';
// 方式三
$array = array(key1 => value1, key2 => value2);
```

#### 资源
* 特殊变量，又称句柄，保存了外部资源的一个引用

#### null
* is_null() 函数判断变量是否为null
* unset() 函数用来销毁指定的变量，变量变为null

#### 类型转换
* 方式一
    * 变量前加数据类型：(boolean)、(float)
* 方式二
    * settype(变量, 类型)

#### 检测数据类型
* is_bool、is_string、is_int、is_null ...
* is_numeric 检测变量是否是数字或数字组成的字符串


### 常量
```php
// 定义常量
define(常量名, 值, 大小写是否敏感)
// 获取常量: 常量名或者constant()函数
constant(常量名)
// 常量是否定义
defined(常量名)
```
#### 预定义常量
* __FILE__ PHP程序文件名
* __LINE__ PHP程序行数
* E_ERROR
* E_WARNING
* E_NOTICE      不寻常处，但不一定是错误
* E_PARSE       解析语法有潜在问题处

### 变量
#### 引用赋值
```php
$i = 'abc';
$j = & $i;
```
#### 静态变量
```php
static $i = 0;
```
#### 全局变量
```php
global $i;
```
#### 可变变量
```php
$a = 'b';
$b = 'qixqi';
echo $$a;       // qixqi
```
#### 预定义变量
* $_SERVER['SERVER_ADDR']   服务器的IP地址
* $_SERVER['REMOTE_ADDR']   用户的IP地址
* $_SERVER['REMOTE_HOST']   用户的主机名
* $_SERVER['REMOTE_PORT']   用户连接的端口
* $_SERVER['SCRIPT_FILENAME']   执行脚本的绝对路径
* $_SERVER['DOCUMENT_ROOT'] 运行脚本的文档根目录
* $_COOKIE
* $_SESSION
* $_GET 通过GET方法传递的参数
* $_POST
* $_GLOBALS 全局变量组成的数组


### 运算符
#### 算术运算符
* % 求余，如果被除数是负数，余数也是负数
#### 字符串运算符
* 英文句号 '.', 连接字符串
```php
// . 和 + 连接字符串的区别
// . 连接两个字符串
$m = '1ab';
$n = 'cd1';
$mn = $m.$n;    // 1abcd1
$mn = $m + $n;  // 1

/**
    + 两边的字符串会自动转为整型，如果是字母，输出0；如果数字开头的字符串，截取头部的数字进行操作
 */
```
#### 位运算符
从低位到高位对齐
* & 与
* | 或
* ~ 按位取反
* ^ 异或
* << 左移
* >> 右移
#### 逻辑运算符
* &&、and
* ||、or
* !
* xor  一真一假
```php
// &&与and、||与or优先级不同
$i = true;
$j = true;
$k = false;
if($i or $j and $k){        // true
    echo 'true';
}else{
    echo 'false';
}
echo '<br />';
if($i || $j and $k){        // false
    echo 'true';
}else{
    echo 'false';
}
```


### 函数
#### 参数传递方式
* 值传递
```php
function example($m){
    $m = $m * 5 + 10;
    echo $m;        // 15
}
$m = 1;
example($m);
echo "<p>$m</p>";   // 1
```
* 引用传递
```php
function example(& $m){
    $m = $m * 5 + 10;
    echo $m;        // 15
}
$m = 1;
example($m);
echo "<p>$m</p>";   // 15
```
* 默认参数（可选参数）
    * 默认参数在参数列表末尾
```php
function example($price, $tax = 0){
    $price = $price + $(price * $tax);
    echo $price;
}
example(100, 0.25);     // 125
example(100);           // 100
```

#### 变量函数
```php
function come(){
    echo "<p>come()</p>";
}
function go($name = "jack"){
    echo "<p>$name go</p>";
}
function back($string){
    echo "<p>back, $string</p>";
}

$func = "come";
$func();
$func = "go";
$func("qixqi");
$func = "back";
$func("qixqi");
```


### 编码规范
* 关键字if、while与括号之间有空格，函数名与括号之间无空格
```php
// 关键字
if ($expr){

}
// 函数
round($num);
```
* 运算符与两边的变量有一个空格(.除外)
#### 命名规范
* 类名：Name、SuperMan、BigClassObject
* 类属性名：mValue、mLongString
* 方法名：Is、Get、Set
* 方法参数名：firstWord、secondWord
* 变量名：msg_error、chk_pwd
* 引用变量：rExam
* 全局变量：gTest
* 常量/全局常量：DEFAULT_NUM_AVG、DEFAULT_NUM_SUM
* 静态变量：sStatus
* 函数名：this_good_idea
* 组合：msValue


### echo、print、print_r、printf、sprintf、var_dump
1. echo 是PHP语句，无需括号，使用括号时只能又一个参数，但没有括号时可以用逗号输出多个值
```php
echo('test1', 'test2');     // error
echo 'test1', 'test2';      // success
```

2. print 实际上也不是函数，没有echo快，用法与echo一样

3. print_r 是函数，输出易于理解的信息
    * string、integer、float 直接输出
    * array 输出键值对格式的数组
    * object 两个参数，第一个是变量，第二个可以为true，返回string，否则返回 TRUE

4. printf 是函数，返回格式化的字符串，printf(format, arg1, arg2...)
    * format 
    * %% 百分比符号
    * %b 二进制数
    * %c ASCII值的字符
    * %d 带符号十进制数
    * %e 可续计数法（科学计数法）
    * %u 无符号十进制数
    * %f 浮点数(local settings aware)
    * %F 浮点数(not local settings aware)
    * %o 八进制数
    * %s 字符串
    * %x 十六进制数（小写字母）
    * %X 十六进制数（大写字母）
    * 在%号和b、c、d...之间添加 1\$ 2\$ 分别对应表示arg1、arg2
```php
printf("My name is %s %s.", "Zheng", "Xiang");      // My name is Zheng Xiang.

printf("My name is %1\$s %1\$s.", "Zheng", "Xiang");    // My name is Zheng Zheng.

printf("My name is %2\$s %1\$s.", "Zheng", "Xiang");    // My name is  Xiang Zheng.
```

5. sprintf 是函数，用法同printf函数，但是不输出，返回格式化后的字符串
```php
$out = sprintf("My name is %s %s.", "Zheng", "Xiang");
echo $out;
```

6. var_dump 是函数，输出变量的内容、类型或字符串的内容、类型、长度，常用于调试
```php
$test = 100;
var_dump($test);    // int(100)
$test = 100.356;
var_dump($test);    // float(100.356)
```