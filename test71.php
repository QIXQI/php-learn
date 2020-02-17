<?php

echo '<pre>';
$array1 = array('apple' => '苹果', 'orange' => '橘子', 'banana' => '香蕉');
print_r($array1);
echo '--------------------------------0--------------------------------'.'<br />';
$array2 = array(
    'fruit' => $array1,
    'tool' => array('pen' => '钢笔', 'pencil' => '铅笔'),
    'dog' => '狗'
);
print_r($array2);
echo '</pre>';


?>