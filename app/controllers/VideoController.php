<?php
require_once __DIR__ . '/../models/Video.php';

class VideoController {
    // Exibir lista de usuários
    public function index() {
        $videos = Video::all();
        require __DIR__ . '/../views/videos/index.php';
    }

    // Exibir formulário de cadastro
    public function create() {
        require __DIR__ . '/../views/videos/create.php';
    }

    // Processar formulário
    public function store() {
        Video::create($_POST);
        header('Location: /mvc/public/videos');
    }
}