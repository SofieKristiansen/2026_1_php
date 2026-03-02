<?php
session_start(); // Start sessionen, så vi kan gemme hvor langt vi er nået
require_once __DIR__ . "/../db.php";

// Tæl hvor mange items der allerede har vist
if (!isset ($_SESSION['offset'])) {
    $_SESSION['offset'] = 4;
}

$limit = 2; // Hvor mange nye items skal der sendes ved hvert klik
$offset = $_SESSION['offset'];

// Hent 2 nye items fra databasen med LIMIT og OFFSET
$stmt = $_db->prepare("SELECT * FROM properties ORDER BY property_pk LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$properties = $stmt->fetchAll();

// Send hver property til browseren som et "mix-html"-response
foreach ($properties as $property) {
    ?>
    <browser mix-function="test">
        <?= json_encode($property) ?>
    </browser>
    <?php
}

// Opdater offset i sessionen, så næste klik henter de næste 2
$_SESSION['offset'] += $limit;