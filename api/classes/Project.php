<?php

namespace project;

require_once '../db/Connection.php';
use connection\Connection;

    class Project extends Connection {

        //properties
        private $url;
        private $src_image;
        private $description;
        private $descripcion;

        //constructor
        public function __construct($url, $src_image, $description, $descripcion) {
            $this->url = $url;
            $this->src_image = $src_image;
            $this->description = $description;
            $this->descripcion = $descripcion;
        }

        //setters and getters
        public function getUrl() {
            return $this->url;
        }

        public function setUrl($url) {
            $this->url = $url;
            return $this;
        }

        public function getSrc_image() {
            return $this->src_image;
        }

        public function setSrc_image($src_image) {
            $this->src_image = $src_image;
            return $this;
        }

        public function getDescription() {
            return $this->description;
        }

        public function setDescription($description) {
            $this->description = $description;
            return $this;
        }

        public function getDescripcion() {
            return $this->descripcion;
        }

        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
            return $this;
        }

        //toString
        public function toString() {
            return
                "URL: ". $this->url ."\n".
                "image: ". $this->src_image ."\n".
                "description: ". $this->description ."\n".
                "descripcion: ". $this->descripcion ."\n"
                ;
        }
        
        //CRUD

        //get all projects
        public static function getAll($lang) {
            $sql = self::selectLANG($lang);
            $result = self::connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                $data = array();
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                echo json_encode($data);
            }
        }

        //get all descriptions
        public static function getDescriptions($lang) {
            $sql = self::selectDescriptions($lang);
            $result = self::connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                $data = array();
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                echo json_encode($data);
            }
        }

        //returns view (sql views) depending on language (English by default)
        private function selectLANG($lang) {
            if($lang ==='es')
                return 'SELECT * FROM projectsES';
            return 'SELECT * FROM projectsEN';
        }

        private function selectDescriptions($lang) {
            if($lang === 'es')
                return 'SELECT id_project, descripcion as description FROM projects';
            return 'SELECT id_project, description FROM projects';
        }
    }
?>