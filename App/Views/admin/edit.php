<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Редактирование новости</title>
</head>
<body>
<b><a href="index.php">Редактор</a></b><br>
<b>Редактирование новости номер:<?php echo $article->id?><b>
<form method="post">
    <label>Название:
    <input type="text" name="title" style="width: 600px" value="<?php echo $article->title?>">
    </label>
    <br>
    <label>Автор:
    <input type="text" name="author" style="width: 600px" value="<?php echo $article->author->name?>">
    </label>
    <br>
    <label>Содержание:<br>
    <textarea name="lead" style="width: 600px;height: 200px"><?php echo htmlspecialchars($article->lead);?></textarea></label><br>
    <input type="submit" name="save" value="Сохранить">
</form>
</body>
</html>

