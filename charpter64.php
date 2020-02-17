<script src="charpter64.js"></script>
<form name="reg_check" method="post" action="charpter64.php" onSubmit="return chkreg(reg_check, 'all');">
<table width="550" height="270" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
        <td height="30"><div align="right">邮政编码：</div></td>
        <td height="30" colspan="2" align="left">&nbsp;
            <input type="text" name="postalcode" size="20" onBlur="chkreg(reg_check, 2)" />
            <div id="check_postalcode" style="color:#F1B000"></div>
        </td>
    </tr>
    <tr>
        <td height="30"><div align="right">邮箱：</div></td>
        <td height="30" colspan="2" align="left">&nbsp;
            <input type="text" name="email" size="20" onBlur="chkreg(reg_check, 4)" />
            <font color="#999999">请务必正确填写</font>
            <div id="check_email" style="color:#F1B000"></div>
        </td>
    </tr>
    <tr>
        <td height="30"><div align="right">固定电话：</div></td>
        <td height="30" colspan="2" align="left">&nbsp;
            <input type="text" name="gtel" size="20" onBlur="chkreg(reg_check, 6)" />
            <font color="#999999">
                <div id="check_gtel" style="color:#F1B000"></div>
            </font>
        </td>
    </tr>
    <tr>
        <td height="30"><div align="right">移动电话：</div></td>
        <td height="30" colspan="2" align="left">&nbsp;
            <input type="text" name="mtel" size="20" onBlur="chkreg(reg_check,5)" />
            <div id="check_mtel" style="color:#F1B000"></div>
        </td>
    </tr>
    <tr>
        <!-- 显示提交 -->
        <td width="100" height="30"><input type="image" src="" /></td>
        <!-- reg_check.reset() 表单重置 -->
        <td width="340"><img src="" width="56" height="30" onClick="reg_check.reset()" style="cursor:hand" /></td>
        <!-- cursor:hand IE完全支持，firefox不支持 -->
        <!-- cursor:pointer firefox支持，IE5.0之前不支持-->
    </tr>
</table>
</form>