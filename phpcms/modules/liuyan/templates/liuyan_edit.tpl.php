<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/index.php?m=liuyan&c=liuyan&a=update&id=<?=$info['id']?>&pc_hash=qpOW3U" method="post">
		<input type="text" name="username" value="<?=$info['username']?>">
		<input type="text" name="content" value="<?=$info['content']?>">
		<button>提交</button>
	</form>
</body>
</html>