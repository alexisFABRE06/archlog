<?php

// Charge les variables d'environnement depuis le fichier .env 
// QUI NE DOIT PAS ETRE COMMIT
$env = parse_ini_file(__DIR__ . '/.env');

// Configuration de la base de données
define('DB_HOST', 'mysql-alexs.alwaysdata.net');
define('DB_USER', 'alexs_annonces');
define('DB_PASS', 'AlexisTest123');
define('DB_NAME', 'alexs_annonces_db');

?>
