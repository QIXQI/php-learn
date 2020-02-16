<form method="post" action="test53.php">
    <label for="key_word">请输入关键字：</label>
    <input type="text" name="key_word" id="key_word" />
    <input type="submit" value="提交" />
</form>

<?php 

$content = '欢迎来到小象study: www.qixqi.club, qixqi会是一个了不起的网站！';
if (isset($_POST['key_word'])){
    $search = $_POST['key_word'];
    $replace = "<font color='#FF0000'><strong>$search</strong></font>";
    echo '<p>';
    echo str_ireplace($search, $replace, $content, $count);
    // echo str_ireplace($search, $replace, $content);
    echo '<br />';
    echo '替换数：'.$count;
    echo '</p>';
}else {
    echo $content;
}

?>