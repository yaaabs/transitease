<?php
class DbConnect {
    private $con;

    function connect() {
        // Use the Hostinger MySQL server hostname
        $this->con = new mysqli('153.92.15.23', 'u577225434_theo', 'Theososa30', 'u577225434_ggwpp');

        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }

        return $this->con;
    }
}

?>
