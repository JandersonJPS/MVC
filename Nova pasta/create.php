<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar</title>
        <link rel="stylesheet" href="style.css">
	</head>

	<body>
		<h1>Cadastro de videos</h1>
        <form method="POST" action="/mvc/public/videos/store">
            <input type="text" name="titulo" placeholder="Titulo" required>
            <input type="text" name="description" placeholder="Description" required>
            <input type="text" name="url" placeholder="Url" required>
            <button type="submit">Salvar</button>
        </form>
   </body>
</html>