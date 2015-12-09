<!DOCTYPE html>
<html>
<head>
	<title>Form CRUD</title>
</head>
<body>
<form action="{{URL::to('crud')}}" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="hidden" name="id" value="<?=isset($data) ? $data->id : 0 ?>">
	<table rules="all" border="1" cellspacing="2" cellpadding="2">
		<tr>
			<td>Category Name</td>
			<td>
				<input name="nama" placeholder="Place Your Name" value="<?=isset($data) ? $data->nama : "" ?>" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Submit" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>