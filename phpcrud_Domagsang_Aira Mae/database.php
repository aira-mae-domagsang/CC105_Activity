<?php
$conn = new mysqli('localhost', 'root', '', 'phpcrud_Domagsang_Aira_Mae');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
