<?php
echo '<pre>';
$pre = array();
$arr = array();
for ($i = 0; $i < 10; $i ++){
    $j = 0;
    echo '1 ';
    $arr[$j ++] = 1;
    while($j < $i){
        $arr[$j] = $pre[$j-1] + $pre[$j];
        echo $arr[$j].' ';
        $j ++;
    }
    if($j == $i){
        $arr[$j] = '1';
        echo '1 ';
    }
    echo '<br />';
    $pre = $arr;
}
echo '</pre>';

?>