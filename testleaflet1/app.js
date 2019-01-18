
var bourges = [47.081012, 2.398781999999983];
//création de la map : ('nom de l'ID map') ([latidude, longitude, niveau de zoom])
var map = L.map('map').setView(bourges, 6);

//création du calque images
L.tileLayer('http://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
	maxZoom: 20
}).addTo(map);


// //ajout d'un markeur
var marker = L.marker(bourges).addTo(map);

//ajout d'un popup
marker.bindPopup('<h3> Bourges, France.</h3>');