<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Maps</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <?php include __DIR__ . '/../components/head.php' ?>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php' ?>
    <main>
        <?php include_once __DIR__ . '/../components/sideBar.php';
        include_once __DIR__ . '/../components/sideBarMobileButton.php'; ?>
        <h1>World Map of Vostera</h1>
        <div id="map" style="height: 60vh; width:80vw; max-width:100%"></div>
    </main>
    <script>
        // Initialize the map and set its view to a chosen geographical coordinates and a zoom level
        const map = L.map('map').setView([60, 0], 2);

        // Add a tile layer to the map using your custom tiles
        L.tileLayer('https://vostera.net/media/map/{z}/{x}/{y}.png', {
            minZoom: 2,
            maxZoom: 5, // Adjust based on your tile's zoom levels
            attribution: 'Igor Tasic'
        }).addTo(map);
    </script>
</div>
</body>

</html>