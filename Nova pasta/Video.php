<?php
class Video {
    private static $pdo;

    // Conexão Singleton
    private static function connect() {
        if (!self::$pdo) {
            $config = require __DIR__ . '/../config/database.php';
            self::$pdo = new PDO(
                "sqlite:" . $config['database'],
                null,
                null,
                $config['options']
            );
        }
        return self::$pdo;
    }

    // Criar video
    public static function create($data) {
        $stmt = self::connect()->prepare(
            "INSERT INTO videos (titulo, description, url)
             VALUES (:titulo, :description, :url)"
        );

        return $stmt->execute([
            ':titulo' => $data['titulo'],
            ':description' => $data['description'],
            ':url' => $data['url'],
        ]);
    }

    // Listar todos
    public static function all() {
        return self::connect()->query("SELECT * FROM videos")->fetchAll(PDO::FETCH_OBJ);
    }
}