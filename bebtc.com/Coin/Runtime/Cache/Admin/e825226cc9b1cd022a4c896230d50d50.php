<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-Type" />
<title>Document</title>
<link rel="stylesheet" href="/Public/Admin/css/common.css" />
</head>
<body>
	<form action="<?php echo U('System/edit');?>" method='post'>
		<table class="table">
			<tr>
				<th colspan='2'>交易参数修改</th>
			</tr>
			<tr>
				<td width='45%' align='right'>买时实时价格比</td>
				<td>
					<input type="text" name='buypice' value='<?php echo (C("BUYPICE")); ?>' class='wh60'/><span class="error">%</span>
				</td>
			</tr>
			<tr>
				<td align='right'>卖时实时价格比</td>
				<td>
					<input type="text" name='salepice' value='<?php echo C("SALEPICE");?>' class='wh60'/><span class="error">%</span>
				</td>
			</tr>
			<tr>
			<tr>
				<td colspan='2' align='center' height='60'>
					<input type="submit" value='保存修改' class='submit'/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>