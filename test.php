<?php
echo '<p>';
echo '--------------字符串连接测试------------' .'<br />';
$m = '12ab';
$n = 'cd21';
$mn = $m.$n;
echo $mn;
echo '<br />';
$mn = $m + $n;
echo $mn;
echo '</p>';


echo '<p>';
echo '--------------字符串引号测试------------' .'<br />';
$m = 1;
echo '\$m = $m' .'</br>';
echo "\$m = $m" .'</br/>';
echo '</p>';
?>