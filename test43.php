<?php
# http://localhost:1213/learn/test43.php?name=tm&password=111&date=20080424&id=1


// print_r($_GET);      // 数组
// unset($_GET);
if(!isset($_GET)){
    return;
}
$keys = array_keys($_GET);
$i = 0;
// print_r($keys);
while ($i < count($keys)){
    echo $keys[$i], ' = ', $_GET[$keys[$i]], '<br />';
    $i ++;
}
?>