<?php
/**
 * Configura a conexão com o banco de dados.
 */
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'teste-backend';

    $connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>