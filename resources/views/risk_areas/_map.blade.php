<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />

<script>
    const lat = {{ $latitude ?? -27.2145 }};  
    const lng = {{ $longitude ?? -49.6435 }};
    const map = L.map('map').setView([lat, lng], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    const drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);

    const drawControl = new L.Control.Draw({
        edit: {
            featureGroup: drawnItems
        },
        draw: {
            polygon: true,
            polyline: false,
            rectangle: false,
            circle: false,
            marker: false,
            circlemarker: false
        }
    });
    map.addControl(drawControl);

    let existingPolygonLayer = false;
    @if (isset($polygon) && $polygon)
        existingPolygon = {!! ($polygon) !!};
        if (existingPolygon && existingPolygon.length > 0) {
            existingPolygonLayer = L.polygon(existingPolygon).addTo(map);
            drawnItems.addLayer(existingPolygonLayer);
        }
    @endif

    let drawnPolygon;
    map.on('draw:created', function (event) {
        if (drawnPolygon || existingPolygonLayer) {
            const removeLayer = drawnPolygon || existingPolygonLayer;
            map.removeLayer(removeLayer); // Remove previously drawn polygon
        }

        const layer = event.layer;
        drawnPolygon = layer;
        drawnItems.addLayer(layer);
        const polygon = layer.toGeoJSON().geometry.coordinates.map(function(coord) {
            return coord.map(function(point) {
                return [point[1], point[0]]; // Swap latitude and longitude
            });
        });

        document.getElementById('polygon').value = JSON.stringify(polygon);
    });

    @if (isset($show) && $show)
        const drawControls = document.querySelector('.leaflet-draw.leaflet-control');
        if (drawControls) {
            drawControls.remove()
        }
    @endif
</script>
