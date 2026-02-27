<browser mix-update="aside">
<?php
require_once __DIR__ . "/db.php";

// Hent item_pk fra URL'en
$item_pk = $_GET['item_pk'] ?? null;
if (!$item_pk) exit; // Stop hvis ingen item_pk

// Hent item fra databasen
$stmt = $_db->prepare("SELECT * FROM properties WHERE property_pk = :id");
$stmt->execute(['id' => $item_pk]);
$property = $stmt->fetch();
if (!$property) exit; // Stop hvis item ikke findes

?>
<section class="property">
    <div>Type: <?= $property['property_name'] ?></div>
    <div>Price: <?= $property['property_price'] ?></div>
    <img src="<?= $property['property_image'] ?>" alt="<?= $property['property_type'] ?>" width="200px">
</section>
</browser>