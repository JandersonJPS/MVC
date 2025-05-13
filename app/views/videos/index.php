<!DOCTYPE html>
<html>
<head>
	<title>Videos</title>
</head>
<body>
	<h1>Videos Cadastrados</h1>

    <?php
    // Verifica se há usuários para exibir
    if (!empty($videos)) {
        echo '<ul>';
        // Loop para listar cada video
        foreach ($videos as $video) {
            echo '<li>'
                . htmlspecialchars($video->titulo)  // Prevenção contra XSS
                . ' - '
                . htmlspecialchars($video->description)
                . '</li>'
                . ' - '
                . htmlspecialchars($video->url)
                . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>Nenhum video cadastrado.</p>';
    }
    ?>
    <a href="/mvc/public/videos/create">Novo Video</a>
 </body>
</html>