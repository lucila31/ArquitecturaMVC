<?php
require_once 'config/database.php';
class modelobase
    {
        public $db;
        public function __construct()
        {
            $this->db = database::conectar();
        }

        public function MostrarTodos($tabla)
            {
                $query=$this->db->query("SELECT * FROM $tabla");
                return $query;
            }

            public function modificarlistar($variable)
            {
                $query=$this->db->query("UPDATE usuarios SET Nombre='mayito' WHERE id=$variable");
                return $query;
            }

            public function Listareliminar($tabla)
            {
                $query=$this->db->query("SELECT * FROM $tabla");
                return $query;
            }

            
            public function listarmodificar($tabla)
            {
                $query=$this->db->query("SELECT * FROM $tabla");
                return $query;
            }

            public function eliminar($variable)
            {
              
                $query=$this->db->query("DELETE FROM usuarios where id=$variable");
                
                return $query; 
            }


            public function modificar($variable)
            {
              
                //$query=$this->db->query("UPDATE usuarios SET Nombre=$nombrep, Apellido=$appellidop, Email=$emailp WHERE id=$variable");
                return $query; 
            }

        
            
    }



    ?>