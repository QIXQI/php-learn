<?php

echo '----------- 测试一 ----------';
echo "<p>hello</p>";
echo '----------------------------';
print("<p>hello</p>");
echo '----------------------------';
printf("<p>hello</p>");
echo '----------------------------';
print_r("<p>hello</p>");
echo '----------------------------';

echo '<br /><br /><br />'.'----------- 测试二 ----------'.'</br>';
echo 'hello';
echo '----------------------------';
print('hello');
echo '----------------------------';
printf('hello');
echo '----------------------------';
print_r('hello');
echo '----------------------------';

echo '<br /><br /><br />'.'----------- 测试三 ----------'.'</br>';
$test = 1;
echo '----------------------------';
echo "\$test = $test";
echo '----------------------------';
print("\$test = $test");
echo '----------------------------';
printf("\$test = $test");
echo '----------------------------';
print_r("\$test = $test");
echo '----------------------------';

echo '<br /><br /><br />'.'----------- 测试四 ----------'.'</br>';
echo 'My', ' name', ' is', ' Zheng', ' Xiang';
// print 'My', ' name', ' is', ' Zheng', 'Xiang';   // error

echo '<br /><br /><br />'.'----------- 测试五 ----------'.'</br>';
// echo('My', ' name', ' is', ' Zheng', 'Xiang');   // error
// print('My', ' name', ' is', ' Zheng', 'Xiang');  // error

echo '<br /><br /><br />'.'----------- 测试六 ----------'.'</br>';
$test = array(one => 'test1', two => 'test2');
print_r($test);

echo '<br /><br /><br />'.'----------- 测试七 ----------'.'</br>';
printf("My name is %s %s.<br />", "Zheng", "Xiang");      // My name is Zheng Xiang.
printf("My name is %1\$s %1\$s.<br />", "Zheng", "Xiang");    // My name is Zheng Zheng.
printf("My name is %2\$s %1\$s.<br />", "Zheng", "Xiang");    // My name is  Xiang Zheng.

echo '<br /><br /><br />'.'----------- 测试八 ----------'.'</br>';
$out = sprintf("My name is %s %s.", "Zheng", "Xiang");
echo $out;

echo '<br /><br /><br />'.'----------- 测试九 ----------'.'</br>';
$test = 100;
var_dump($test);    // int(100)
echo '<br />';
$test = 100.356;
var_dump($test);    // float(100.356)
$test = 'hello';
echo '<br />';
var_dump($test);    // string(5) "hello"










?>