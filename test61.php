<!DOCTYPE html>
<html>
    <head>
        <title>UBB 使用帮助</title>
    </head>
    <body>
        <h2 style="text-align: center;">UBB 使用帮助</h2>
    </body>
</html>


<?php 
echo '<pre>';
echo '<p>';
echo '<h4>01.文字加粗效果</h4>';
$subject = '[b]文字加粗[/b]';
$pattern = '/\[b\](.*)\[\/b\]/i';
$replacement = '<b>$1</b>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '<p>';
echo '<h4>02.文字下划线效果</h4>';
$subject = '[u]文字下划线[/u]';
$pattern = '/\[u\](.*)\[\/u\]/i';
$replacement = '<u>$1</u>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '<p>';
echo '<h4>03.文字斜体效果</h4>';
$subject = '[i]文字斜体[/i]';
$pattern = '/\[i\](.*)\[\/i\]/i';
$replacement = '<i>$1</i>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '<p>';
echo '<h4>04.文字下划线效果</h4>';
$subject = '[s]文字下划线[/s]';
$pattern = '/\[s\](.*)\[\/s\]/i';
$replacement = '<s>$1</s>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '<p>';
echo '<h4>05.文字前景颜色</h4>';
$subject = '[color=#ff33ff]文字前景颜色[/color]';
$pattern = '/\[color=(.*)\](.*)\[\/color\]/i';
$replacement = '<font color=$1>$2</font>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '<p>';
echo '<h4>06.文字背景颜色</h4>';
$subject = '[bgcolor=#ff33ff]文字背景颜色[/bgcolor]';
$pattern = '/\[bgcolor=(.*)\](.*)\[\/bgcolor\]/i';
$replacement = '<font style="background-color: $1">$2</font>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '<p>';
echo '<h4>07.文字大小效果</h4>';
$subject = '[size=20]文本[/size]';
$pattern = '/\[size=(.*)\](.*)\[\/size\]/i';
$replacement = '<font size="$1">$2</font>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '<p>';
echo '<h4>09.插入超链接</h4>';
$subject = '[url=http://www.qixqi.club]小象study[/url]';
$pattern = '/\[url=(.*)\](.*)\[\/url\]/';
$replacement = '<a href="$1">$2</a>';
echo $subject.' '.preg_replace($pattern, $replacement, $subject);
echo '</p>';

echo '</pre>';

echo '更多详情参考: <a href="http://www.lyrtv.com.cn/ubbhelp.asp">UBB 使用帮助</a>';
?>