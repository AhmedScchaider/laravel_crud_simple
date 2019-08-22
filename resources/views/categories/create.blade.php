<!DOCTYPE html>
<html>
<head>
	<title>Create categorie</title>
</head>
<body>
	<h2>Creation catégorie</h2><br><br>
	<form action="{{ route('store') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea name="description"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">Enregister</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
