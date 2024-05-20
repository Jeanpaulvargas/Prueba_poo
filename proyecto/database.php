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

    public function insertData($nombre_persona, $menu, $fecha_hora, $tiempo_comida, $nombre_servidor) {
        $query = "INSERT INTO comida_servicio (nombre_persona, menu, fecha_hora, tiempo_comida, nombre_servidor) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = ifx_prepare($query, $this->connection);

        if (!$stmt) {
            die("Preparación de consulta fallida: " . ifx_errormsg());
        }

        if (!ifx_do($stmt, array($nombre_persona, $menu, $fecha_hora, $tiempo_comida, $nombre_servidor))) {
            die("Ejecución de consulta fallida: " . ifx_errormsg());
        }
    }
}

// Detalles de conexión
$database_name = "curso_honduras";
$host = "192.168.73.71";
$service = "1526";
$user = "honduras";
$password = "honduras";

// Crear instancia de la clase Database
$database = new Database($database_name, $host, $service, $user, $password);

?>
