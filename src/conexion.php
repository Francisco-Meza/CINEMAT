<?php
    $conn = new mysqli("localhost", "root", "", "cinemat");
    if ($conn->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }
?>