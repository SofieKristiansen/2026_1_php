<?php
require_once __DIR__ . "/db.php";

// Hent de første 5 properties
$stmt = $_db->query("SELECT * FROM properties ORDER BY property_pk LIMIT 4");
$properties = $stmt->fetchAll();
?>

<main>
    <div id="map">Map</div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="app.js" defer></script>

    <!-- Runs and render the map -->
    <script>

        // Initialiser kortet
        // const map = L.map('map').setView([55.68586933210611, 12.56909806026006], 12);
        window.map = L.map('map').setView([55.6858, 12.5690], 12);

        // Tile layer (OpenStreetMap)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; OpenStreetMap &copy; CARTO',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        // Hent properties fra PHP
        const properties = <?php echo json_encode($properties); ?>;

        properties.forEach(property => {
            const iconHtml = `<button class="marker ${property.property_type}" mix-get="api-get-item?item_pk=${property.property_pk}"></button>`;
            
            L.marker([property.property_lat, property.property_lon], {
                icon: L.divIcon({
                    className: '', 
                    html: iconHtml
                })
            }).addTo(map);
        });
</script>

</script>

    <aside>Property</aside>

</main>