function initialize(){
    var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 19
});
let map= L.map('map').setView([48.614713, 2.458822],11);
map.addLayer(CartoDB_DarkMatter);
L.marker([48.617150, 2.466418]).addTo(map).bindPopup("48.617150, 2.466418"); //Paris
L.marker([40.738808, -73.985159]).addTo(map).bindPopup("40.738808, -73.985159"); // New York
L.marker([48.855877, 2.352206]).addTo(map);
L.marker([48.855877, 2.352206]).addTo(map);
L.marker([48.855877, 2.352206]).addTo(map);
L.marker([48.855877, 2.352206]).addTo(map);
L.marker([48.855877, 2.352206]).addTo(map);
}