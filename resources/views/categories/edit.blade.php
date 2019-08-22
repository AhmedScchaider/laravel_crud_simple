<!DOCTYPE html>
<html>
<head>
	<title>Edit categorie</title>
</head>
<body>
	<h2>modification catégorie</h2><br><br>
	<form action="{{ route('update') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="{{ $categorie->title }}"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea name="description">{{ $categorie->descreption }}</textarea></td>
			</tr>
			<input type="hidden" name="id" value="{{ $categorie->id }}">
			<tr>
				<td colspan="2"><button type="submit">Modifier</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
