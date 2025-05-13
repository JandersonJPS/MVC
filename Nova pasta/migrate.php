<?php
// Carrega as configurações do banco de dados
$config = require __DIR__.'/../app/config/database.php';

try {
    // Cria conexão com SQLite usando PDO
    $pdo = new PDO("sqlite:" . $config['database'], null, null, $config['options']);

    // Executa o SQL para criar a tabela
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS videos (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titulo TEXT NOT NULL,
            description TEXT NOT NULL,
            url TEXT NOT NULL UNIQUE
        )
    ");

    echo "Tabela criada com sucesso!";

} catch(PDOException $e) {
    die("Erro: " . $e->getMessage());
}