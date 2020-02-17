## PHP 数组
### 声明数组
1. array()
    * 索引可以是字符串或数字，省略时从0开始
    * 索引是整数时，下一个索引是目前最大的整数加1
    * 两个索引相同时，后面的会覆盖前面的
2. $array[0] = 1

### 数组类型
* 数字索引数组：索引是数字
* 关联数组：索引包含字符串

### 数组输出
* print_r(array)

### 数组遍历
1. foreach 结构
    * foreach 操作数组的备份
```php
$url = array('qixqi.club', 'qixqi.cn', 'ourvultr.club');
foreach ($url as $link){
    echo $link.'<br />';
}
```
2. list() 
    * 把数组中的值赋给一些变量
    * 仅能用于索引从0开始的数字索引的数组
```php
<form name="form1" action="index.php" method="post"> 
    用户名：<input name="user" type="text" class="inputcss" id="user" size="24" /><br />
    密&nbsp;&nbsp;码：<input name="pwd" type="passwod" class="inputcss" id="pwd" size="24" /><br />
    <input name="submit" type="submit" value="提交" />
</form>
/* <?php*/
# 输出用户登录信息
while (list($name, $value) = each($_POST)){     // each() 提取$_POST数组
    if ($name != 'submit'){
        echo $name.'='.$value.'<br />';
    }
}
/* ?> */
```
*each函数返回当前指针位置的数组值，并将指针移向下一个位置，返回的数组包含四个键，0和key包含键名，1和value包含数据，each函数指针位于末尾时，返回false*

### 数组与字符串的转换
* explode()
* implode()

### 统计数组元素个数
* count(array, int mode)
* mode 可选参数，默认为0，当mode=COUNT_RECURSIVE或1时，递归的对数组计数，可用于多维数组计数
```php
$books = array(
    'php' => array('PHP函数参考大全', 'PHP程序开发范例宝典', 'PHP自学之路'),
    'asp' => array('ASP经验技巧宝典')
);
echo count($books, COUNT_RECURSIVE);        // 递归统计：6
```

### 查询数组中指定元素
* array_search(value, array, bool strict)
* 在数组 array 中搜索value，找到后返回键值，否则返回false
* strict 可选参数，为true时，在数组中检查给定值的类型
```php
<?php
    $name = "机器人@相机@手机@手表";
    $price = "14998@2588@2666@66698";
    $count = "1@2@3@4";
    $arrayid = explode('@', $name);
    $arraynum = explode('@', $price);
    $arraycount = explode('@', $count);
    if (isset($_POST['submit']) && $_POST['submit'] == true){
        $id = $_POST['name'];
        $num = $_POST['count'];
        $key = array_search($id, $arrayid);
        $arraycount[$key] = $num;
        $count = implode('@', $arraycount);
    }
?>

<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
    <tr>
        <td width="145" align="center" bgcolor="#FFFFFF" class="style1">商品名称</td>
        <td width="145" align="center" bgcolor="#FFFFFF" class="style1">价格</td>
        <td width="145" align="center" bgcolor="#FFFFFF" class="style1">数量</td>
        <td width="145" align="center" bgcolor="#FFFFFF" class="style1">金额</td>
    </tr>

    <?php for ($i=0; $i<count($arrayid); $i++){ ?>     <!-- 循环读取数据 -->

        <form name="form1_<?php echo $i;?>" method="post" action="charpter7.php">
            <tr>
                <td height="25" align="center" bgcolor="#FFFFFF" class="style2"><?php echo $arrayid[$i];?></td>
                <td align="center" bgcolor="#FFFFFF" class="style2"><?php echo $arraynum[$i];?></td>
                <td align="center" bgcolor="#FFFFFF" class="style2">
                    <input name="count" type="text" id="counts" value="<?php echo $arraycount[$i];?>" size="8" />
                    <input name="name" type="hidden" id="name" value="<?php echo $arrayid[$i];?>" />
                    <input type="submit" name="submit" value="更改" />
                </td>
                <td align="center" class="style2"><?php echo $arraycount[$i]*$arraynum[$i]; ?></td>
            </tr>
        </form>

    <?php } ?>
</table>
```

### 获取数组末尾元素
* array_pop(array)
* 返回数组最后一个元素，并将数组长度减一
* 数组空时（不是数组）返回null

### 数组添加元素
* array_push(array, var, var, ...)
* 返回新的数组长度
* 向array 中添加元素，可以是多个

### 删除数组重复元素
* array_unique(array)
* 将值作为字符串排序，只保留第一个键（键不变）
* 返回新数组

### 数组排序
* sort(array, sortingtype)
    * 升序排序
    * 原有键名被删除，赋予新的键名
    * 成功返回true, 否则false
    * sortingtype 可选参数
        * 0 = SORT_REGULAR  默认，常规顺序，不改变类型
        * 1 = SORT_NUMERIC  每一项作为数字处理
        * 2 = SORT_STRING   每一项作为字符串处理
        * 3 = SORT_LOCALE_STRING    每一项作为字符串处理，基于当前区域设置（setlocale() 进行更改）
        * 4 = SORT_NATURAL  每一项作为字符串处理，使用类似natsort()自然排序
        * 5 = SORT_FLAG_CASE        结合SORT_STRING 或 SORT_NATURAL 对字符串排序，不区分大小写
* rsort(array, sortingtype)
    * 降序排序