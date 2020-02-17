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
echo '<br />';

$pattern = '/\d{3,4}-?\d{7,8}/';
$input = array('043212345678', '0431-7654321', '12345678');
$output = preg_grep($pattern, $input);
var_dump($output);

$str1 = '!、$、+、[、]、\\、/、b、<、>';
$str2 = 'b';
$match_one = preg_quote($str1, $str2);
echo $match_one;        // \!、\$、\+、\[、\]、\\、/、\b、\<、\>
echo '<br />';

$subject = '[b]粗体字[/b]';
$pattern = '/\[b\](.*)\[\/b\]/';
$replacement = '<b>$1</b>';
$b_rst = preg_replace($pattern, $replacement, $subject);
echo $b_rst;
echo '<br />';

function c_back($str){
    $str = "<font color=$str[1]>$str[2]</font>";
    return $str;
}
$subject = '[color=blue]蓝色字体[/color]';
$pattern = '/\[color=(.*)\](.*)\[\/color\]/U';
$string = preg_replace_callback($pattern, 'c_back', $subject);
echo $string;

?>