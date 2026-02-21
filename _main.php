<main>

    <div id="map">Map</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Runs and render the map -->
<script>

    // Initialiser kortet
    const map = L.map('map').setView([55.68586933210611, 12.56909806026006], 12);

    // Tile layer (OpenStreetMap)
    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; OpenStreetMap &copy; CARTO',
        subdomains: 'abcd',
        maxZoom: 20
    }).addTo(map);

        // Add a marker
        let marker = L.marker([55.67960020013266, 12.56464935119663], {
            icon: L.divIcon({
                className: '', // removes default marker styles
                html: `
                    <button class="marker" mix-get="api-get-item?item_pk=1"></button>
                `,
                iconSize: [20, 20],      // size of button
                iconAnchor: [20, 20]      // center it properly
            }),            
            item_pk: "1"
        }).addTo(map);
        marker.on('click', function (e) {
        }); 
        
        
        marker = L.marker([55.6899549465982, 12.526712188294855], {
            icon: L.divIcon({
                className: '', // removes default marker styles
                html: `
                    <button class="marker" mix-get="api-get-item?item_pk=2"></button>
                `,
                iconSize: [20, 20],      // size of button
                iconAnchor: [20, 20]      // center it properly
            }),             
            item_pk: "2"
        }).addTo(map);
        marker.on('click', function (e) {
        });      


</script>

    <aside>Property</aside>

</main>