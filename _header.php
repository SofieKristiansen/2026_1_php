<?php
require_once __DIR__."/_.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <script src="mixhtml.js" defer></script>
    <script src="app.js" defer></script>
    <title> <?php _($title ?? "Company") ?> </title>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/">Signup</a>
    <a href="/">Login</a>
    <!-- <button mix-get="api-get-item">Get item</button> -->
    <button mix-get="/apis/api-get-more-items">Get more items</button>
    <!-- <button onclick="test()">Tests</button> -->
</nav>
    
