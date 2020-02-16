<?php 

$str = "\r\r(:@_@ www.qixqi.club @_@:)";
echo $str;
echo '<br />';
echo trim($str);
echo '<br />';
echo trim($str, "\r\r(::)");
echo '<br />';

echo "I'm a boy.";
echo '<br />';

$str = "select * from tb_book where bookname = 'PHP自学之路' ";
echo $str.'<br />';
$a = addcslashes($str, '\'自学之路');
echo $a.'<br />';
$b = stripcslashes($a);
echo $b.'<br />';

if('abcdef' == 'abcdef'){
    echo 'yes';
}else{
    echo 'no';
}
echo '<br />';

$test = 'hello world hello world';
echo str_ireplace('hello', 'world', $test);
echo '<br />';

$str = '用今日的辛勤工作，换明日的双倍回报！';
$replace = '百倍';
echo substr_replace($str, $replace, 26, 4);
echo '<br />';

$str = '@PHP @NET @ASP @JSP';
$str_arr = explode("@", $str);
print_r($str_arr);


$str_arr = array('PHP', 'NET', 'ASP', 'JSP');
$glue = ' @';
$str = implode($glue, $str_arr);
echo $str;

?>