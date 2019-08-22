<!DOCTYPE html>
<html>
<head>
	<title>Categorie list</title>
</head>
<body>
	<h2>Liste catégorie</h2><br><br>

	<a href="{{ route('create') }}">Create</a><br><br>

	<table border="1" width="100%">
		<thead>
			<th>ID</th>
			<th>Title</th>
			<th>Desc</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($categories as $catgeorie)
			<tr>
				<td>{{ $catgeorie->id }}</td>
				<td>{{ $catgeorie->title }}</td>
				<td>{{ $catgeorie->descreption }}</td>
				<td><a href="{{ route('destroy', ['id' => $catgeorie->id]) }}">delete</a> <a href="{{ route('edit', ['id' => $catgeorie->id ])}}">Modifier</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
