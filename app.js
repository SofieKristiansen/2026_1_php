function test(data_as_string) {
    const data = JSON.parse(data_as_string); // Konverter JSON til JS-objekt

    const iconHtml = `
        <button class="marker ${data.property_type}"
            mix-get="api-get-item?item_pk=${data.property_pk}">
        </button>
    `;

    // Tilføj markør til Leaflet-kortet
    L.marker([data.property_lat, data.property_lon], {
        icon: L.divIcon({
            className: '',
            html: iconHtml
        })
    }).addTo(window.map);

    // Mix-html opdaterer DOM for nye mix-get-knapper
    mix_convert();
}