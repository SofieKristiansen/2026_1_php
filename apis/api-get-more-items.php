<?php
require_once __DIR__ . "/../properties.php";

$count = 0;
$max_to_send = 1; // hvor mange nye properties du vil sende pr. klik

foreach ($properties as $property) {
    if ($property['visible'] === false && $count < $max_to_send) {
        // Send det til JS
        ?>
        <browser mix-function="test">
            <?php echo json_encode($property); ?>
        </browser>
        <?php
        $count++;
    }
}