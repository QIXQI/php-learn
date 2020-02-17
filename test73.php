<table width="400"  border="1" cellspacing="1" cellpadding="1" bordercolor="#ff9900">
<form name="multi_choice" method="post" action="test73.php">
    <tr style="text-align: center">
        <td width="80" height="120">选项</td>
        <td width="250" height="120">
            <textarea name="choices" cols="30" rows="5" id="choices"></textarea><br />
            <span><i><b>注意：</b>每个选项之前使用‘*’分隔</i></span>
        </td>
        <td width="50" height="120"><input type="submit" name="submit" value="提交" /></td>
    </tr>
</form>


<?php

if(isset($_POST['submit']) && !empty($_POST['submit'])){
    $choices_str = $_POST['choices'];
    $choices_arr = explode('*', $choices_str);
    echo '<tr style="text-align: center;">';
    echo '<td width="80" height="500">多选题</td>';
    echo '<td width="250" height="500">';
    while (list($key, $value) = each($choices_arr)){
        echo "<input type=\"checkbox\" name=\"choice\" value=\"$value\" />";
        echo "&nbsp;&nbsp;$value"."<br />";
    }
    echo '</td>';
    echo '</tr>';
}

?>

</table>