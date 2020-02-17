<form method="post" action="test62.php">
    <input type="text" name="check_email" />
    <input type="submit" value="提交" />
</form>

<?php

if (isset($_POST['check_email'])){
    $email = $_POST['check_email'];
    $pattern = "/^\w+[+-.']*\w+@\w+[+.]*\w+\.\w+[+.]*\w+$/";
    $count = preg_match($pattern, $email);
    if ($count == 1){
        echo 'yes';
    } else{
        echo 'no';
    }
}else{
    echo '尚未提交email';
}

?>