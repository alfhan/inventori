<!DOCTYPE html>
<html>
<head>
	<title>Uji Coba</title>
</head>
<body>
<table width="50%" rules="all" border="1">
	<thead>
		<tr bgcolor="#ccceee">
			<th width="35">No</th>
			<th>Category Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $i=1; ?>
	@foreach($list as $r)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$r->nama}}</td>
			<td>
				Edit | Hapus
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
</body>
</html>