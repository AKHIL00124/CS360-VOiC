<?php
// fetch_mentions.php

// Replace with your database connection code
$connection = new PDO("mysql:host=localhost;dbname=VOiC", "root", "");

// Get user input
$query = $_GET['query'];

// Fetch mention suggestions from the database
$mentionSuggestions = array();
if (!empty($query)) {
    $stmt = $connection->prepare("SELECT title, title FROM documents WHERE title LIKE :query");
    $stmt->bindValue(':query', '%' . $query . '%');
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $mentionSuggestions[] = $row;
    }
}

// Return the mention suggestions as JSON
echo json_encode($mentionSuggestions);
