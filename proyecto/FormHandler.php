<?php

require_once 'Database.php';

class FormHandler {
    private $db; // Instancia de la clase Database


    public function __construct($db) {
        $this->db = $db; 
    }


    public function handleRequest() {
        // Verifica si la solicitud es de tipo POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtiene los datos del formulario
            $nombre_persona = $_POST['nombre_persona'];
            $menu = $_POST['menu'];
            $fecha_hora = $_POST['fecha_hora'];
            $tiempo_comida = $_POST['tiempo_comida'];
            $nombre_servidor = $_POST['nombre_servidor'];

        
            if ($this->validate($nombre_persona, $menu, $fecha_hora, $tiempo_comida, $nombre_servidor)) {
             
                $this->db->insertData($nombre_persona, $menu, $fecha_hora, $tiempo_comida, $nombre_servidor);
             
                echo "<div class='alert alert-success'>Información guardada correctamente.</div>";
            } else {
            
                echo "<div class='alert alert-danger'>Todos los campos son obligatorios.</div>";
            }
        }
    }

 
    private function validate($nombre_persona, $menu, $fecha_hora, $tiempo_comida, $nombre_servidor) {
 
        return !empty($nombre_persona) && !empty($menu) && !empty($fecha_hora) && !empty($tiempo_comida) && !empty($nombre_servidor);
    }
}

?>
