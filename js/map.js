function initialize(){
    var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 19
});
let map= L.map('map').setView([48.614713, 2.458822],11);
map.addLayer(CartoDB_DarkMatter);
L.marker([48.617490, 2.467776]).addTo(map).bindPopup("48.617490, 2.467776"); //Paris
L.marker([50.848790, 4.347339]).addTo(map).bindPopup("50.848790, 4.347339"); // Bruxelles
L.marker([46.209387, 6.138995]).addTo(map).bindPopup("46.209387, 6.138995"); // Genève
L.marker([40.739179, -73.985687]).addTo(map).bindPopup("40.739179, -73.985687"); // New York
L.marker([43.653288, -79.380495]).addTo(map).bindPopup("43.653288, -79.380495"); // Toronto
L.marker([51.479048, 0.000413]).addTo(map).bindPopup("51.479048, 0.000413"); //Londres
}