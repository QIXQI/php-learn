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