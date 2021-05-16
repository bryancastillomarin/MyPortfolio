<?php

namespace connection;

    class Connection {

        private const host = 'localhost';
        private const user = 'root';
        private const password = '';
        private const database = 'portfolio';

        protected function connect() {
            $mysqli = new \mysqli(self::host, self::user, self::password, self::database);
            $mysqli->set_charset('utf8');
            return $mysqli;
        }
    }
?>