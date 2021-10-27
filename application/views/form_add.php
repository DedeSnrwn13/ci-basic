<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Add</title>
</head>
<body>
	<h1>Tambah Artikel</h1>

	<form method="POST">
		<div>
			<label for="">Judul</label>
			<input type="text" name="title">
		</div>
		<br><br>
		<div>
			<label for="">Konten</label>
			<textarea name="content" id="" cols="30" rows="10"></textarea>
		</div>
		<br><br>
		<button type="submit">Simpan Artikel</button>
	</form>
</body>
</html>
