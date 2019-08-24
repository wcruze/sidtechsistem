<?php
    class aspirante{
        private $id;
        private $nombre;
        private $apellido;
        private $correo;
        private $area;
        private $fecha;
        private $ruta;

        // CONSTRUCTORES DE LA CLASE ASPIRANTE
        public function constructorempty(){
            
            $this -> id = " ";
            $this -> nombre = " ";
            $this -> apellido = " ";
            $this -> correo = " ";
            $this -> area = " ";
            $this -> fecha = " ";
            $this -> ruta = " ";

        }

        public function constructor($_id,$nom, $ape, $email, $ar, $dat, $uri){            
            $this -> id = $_id;
            $this -> nombre = $nom;
            $this -> apellido = $ape;
            $this -> correo = $email;
            $this -> area = $ar;
            $this -> fecha = $dat;            
            $this -> ruta = $uri;
        }

        // METODOS SET PARA LOS ATRIBUTOS DE LA CLASE
        public function setID($_id){
            $this -> id = $_id;
        }

        public function setNombre($nom){
            $this -> nombre = $nom;
        }

        public function setApellido($ape){
            $this -> apellido = $ape;
        }


        public function setCorreo($email){
            $this -> correo = $email;
        }


        public function setArea($ar){
            $this -> area = $ar;
        }


        public function setFecha($dat){
            $this -> fecha = $dat;
        }

        public function setRuta($uri){
            $this -> ruta = $uri;
        }

        // METODOS GET PARA LOS ATRIBUTOS DE LA CLASE

        public function getID(){
            return $this -> id;
        }

        public function getNombre(){
            return $this -> nombre;
        }

        public function getApellido(){
            return $this -> apellido;
        }


        public function getCorreo(){
            return $this -> correo;
        }


        public function getArea(){
            return $this -> area;
        }


        public function getFecha(){
            return $this -> fecha;
        }

        
        public function getRuta(){
            return $this -> ruta;
        }

        


    }

?>