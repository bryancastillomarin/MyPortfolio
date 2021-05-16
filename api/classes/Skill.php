<?php

    class Skill {

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
        public function getAll() {
            //TODO
        }
    }
?>