<?php 

$test = 1;
if (!is_numeric($test)){
    echo "<p>全数字不满足</p>";
}else if (strlen($test) > 25){
    echo "<p>长度超过25位</p>";
}else if (is_null($test) || $test == ""){
    echo "<p>输入为空</p>";
}else {
    echo "<p>输入合法！</p>";
}

?>