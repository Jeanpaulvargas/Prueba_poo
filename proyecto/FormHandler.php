<?php

require_once 'Database.php';


class FormHandler {
    private $db; // Instancia de la clase Database

  
    public function __construct($db) {
        $this->db = $db; // Asigna la instancia de Database
    }