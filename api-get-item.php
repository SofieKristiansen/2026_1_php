<browser mix-update="aside">
<?php
require_once __DIR__ . "/properties.php";
$item_id = $_GET['item_pk'] ?? null;

foreach ($properties as $property) {
    if ($property['id'] == $item_id) {
        ?>
        <section class="property">
            <div>Type: <?= $property['name'] ?></div>
            <div>Price: <?= $property['price'] ?></div>
            <img src="<?= $property['image'] ?>" alt="<?= $property['type'] ?>" width="200px">
        </section>
        <?php
    }
}
?>
</browser>