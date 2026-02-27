function test(data_as_string) {

    const data = JSON.parse(data_as_string);

    const iconHtml = `
        <button class="marker ${data.type}"
            mix-get="api-get-item?item_pk=${data.id}">
        </button>
    `;

    L.marker([data.lat, data.lng], {
        icon: L.divIcon({
            className: '',
            html: iconHtml
        })
    }).addTo(window.map);

    mix_convert();
}