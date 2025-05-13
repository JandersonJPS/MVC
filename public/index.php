<?php
// Carrega o controller necessário para manipular as requisições
require __DIR__.'/../app/controllers/VideoController.php';

// Obtém apenas o caminho da URL (ignorando query strings)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Sistema de roteamento básico
switch ($uri) {
    case '/mvc/public/videos':
    case '/mvc/public/videos/':
        // Instancia o controller e chama o método de listagem
        (new VideoController())->index();
        break;
    case '/mvc/public/videos/create':
        // Exibe o formulário de cadastro
        (new VideoController())->create();
        break;
    case '/mvc/public/videos/store':
        // Processa o envio do formulário
        (new VideoController())->store();
        break;
    default:
        // Retorna erro 404 para rotas não encontradas
        http_response_code(404);
        echo 'Página não encontrada';
}