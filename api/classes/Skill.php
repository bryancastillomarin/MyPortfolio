<?php

namespace skill;

require_once '../db/Connection.php';
use connection\Connection;

    class Skill extends Connection{

        //properties
        private $name;
        private $percent;

        //constructor
        public function __construct($name, $percent) {
            $this->name = $name;
            $this->percent = $percent;
        }

        //setters and getters
        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function getPercent() {
            return $this->percent;
        }

        public function setPercent($percent) {
            $this->percent = $percent;
            return $this;
        }

        //toString
        public function toString() {
            return
                "name: ". $this->name ."\n".
                "percent: ". $this->percent ."\n"
                ;
        }

        //CRUD

        //get all skills
        public static function getAll() {
            $sql = 'SELECT * FROM skillsVIEW';
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
    }
?>