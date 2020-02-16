<form method="post" action="test52.php">
    <input type="number" name="credit" />
    <input type="submit" value="提交" />
</form>

<?php 

if (isset($_POST['credit']) && strlen($_POST['credit']) == 18){
    echo '身份证位数正确';
}else {
    echo '身份证位数不正确';
}

?>