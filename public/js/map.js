var map = L.map("map").setView([50.8926693, 34.8400579], 16);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

L.marker([50.8923352, 34.8419994])
    .addTo(map)
    .bindPopup("Вам сюди)")
    .openPopup();

L.marker([50.892993, 34.8374151]).addTo(map).bindPopup("Зупинка").openPopup();

L.Routing.control({
    waypoints: [
        L.latLng(50.8923352, 34.8419994),
        L.latLng(50.892993, 34.8374151),
    ],
    // draggableWaypoints: false,
    show: false,
}).addTo(map);
