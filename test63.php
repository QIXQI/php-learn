<?php

echo '<pre>';
// 匹配标准成对标签
// 嵌套的似乎有些问题
// $subject = '<html><head><title>www.qixqi.club</title></head><body><h2>小象study</h2></body></html>';
$subject = '<html>www.qixqi.club</html>';
$pattern = '/\<(.+)\>(.*)\<\/\1\>/';
$count = preg_match_all($pattern, $subject, $matches);

print_r($matches);
echo '</pre>';

?>