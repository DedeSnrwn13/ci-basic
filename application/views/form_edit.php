<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit</title>
</head>
<body>
	<h1>Edit Artikel</h1>

	<form method="POST">
		<div>
			<label for="">Judul</label>
			<input type="text" name="title" value="<?php echo $blog['title']; ?>">
		</div>
		<br>
		<div>
			<label for="">URL</label>
			<input type="text" name="url" value="<?php echo $blog['url']; ?>">
		</div>
		<br>
		<div>
			<label for="">Konten</label>
			&lt;<textarea name="content" id="" cols="30" rows="10">&gt;&lt;<?php echo $blog['content']; ?>&gt;&lt;</textarea>&gt;
		</div>
		<br><br>
		<button type="submit">Update Artikel</button>
	</form>
</body>
</html>
