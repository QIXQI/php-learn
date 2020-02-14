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
echo '\$m = $m' .'</br>';       // \$m = $m
echo "\$m = $m" .'</br/>';      // $m = 1
echo '</p>';

echo '<p>';
echo '--------------continue测试------------' .'<br />';
$arr = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
for ($i=0; $i<10; $i++){
    echo '<br />';
    if ($i % 2 == 0){
        continue;
    }
    for (;;){
        for ($j=0; $j<count($arr); $j++){
            if ($j == $i){
                continue 3;     // 跳到最外层循环
            }else {
                echo "\$arr[".$j."]=".$arr[$j]." ";
            }
        }
    }
    echo '这句话不输出';
}
echo '</p>';

?>