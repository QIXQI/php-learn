<?php

    $books = array('深入浅出Nodejs' => '朴灵', '菜鸟教程' => '大牛');
    while (list($book_name, $book_author) = each($books)){
        echo $book_name.'   '.$book_author.'<br />';
    }

?>