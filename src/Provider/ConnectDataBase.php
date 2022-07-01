<?php

const SERVER = 'localhost';
const USERNAME = 'root';
const PASSWORD = 'root';
const DATABASE = 'tic-tac-toe';

if (!$connection) {
    $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    $connection->set_charset('utf8');
}

return $connection;
