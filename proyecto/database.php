<?php

class Database {
    private $connection;

    // Constructor de la clase
    public function __construct($database, $host, $service, $user, $password) {
        // Establece la conexión con la base de datos Informix
        $this->connection = ifx_connect("$database@$host:$service", $user, $password);
                // Verifica si la conexión falló
                if (!$this->connection) {
                  
                    die("Conexión fallida: " . ifx_errormsg());
                }
            }