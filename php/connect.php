<?php 

    $pdo = null;
    
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=fundacaotc',
        'root',
        'MySQL@2022'
    );
        echo "Banco Conectado<br>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
    return $pdo;

?>