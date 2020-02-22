## PHP与Web页面交互
### 创建表单
* <form> 元素
    * enctype 设置表单编码方式
        * 上传文件时，enctype=multipart/form-data
    * target  设置返回信息的显示方式
        * _blank 新窗口
        * _parent 父级窗口
        * _self  当前窗口
        * _top   顶级窗口
* <input> 元素
    * type="file"，可以用在提交按钮位置的图片，图片具有按钮功能
    * type="reset"，表单重置
    * type="button"，表单动作处理
    * type="hidden"，隐含方式提交变量值
* <select> 元素
    * size 列表的行数，超过则滚动条显示
    * multiple 菜单方式显示数据，否则列表方式
* <textarea> 元素
    * rows 行数（字符为单位）
    * cols 列数
    * warp 设定和显示换行方式
        * off 不自动换行
        * hard 自动硬回车换行，换行标记保存到服务器
        * soft 自动软回车换行，换行标记不保存到服务器
```php
<form name="form" method="post" action="index.php">
    <textarea name="a" cols="20" rows="3" wrap="soft">软回车！----</textarea>
    <textarea name="b" cols="20" rows="3" wrap="hard">硬回车！----</textarea>
    <input type="submit" name="Submit" value="提交" />
</form>
<?php
if (isset($_POST['Submit']) && !empty($_POST['Submit'])){
    echo nl2br($_POST['a']);            // 将 '\n' 替换成 '<br />'
    echo nl2br($_POST['b']);
}
?>
```
*换行符\n在网页中没有效果，需要转换为<br />标记，使用 nl2br()函数*
