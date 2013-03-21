$(document).ready(function(){
	 $('nav a').click(function(evt){
	 	var id = $(this).attr('id');
	 	var scroll = 0;
	 	switch(id){
	 		case 'ahome':scroll = 0;
	 			break;
	 		case 'anosotros':scroll = ($('#home').height());
	 			break;
	 		case 'aservicios':scroll = ($('#home').height() + $('#nosotros').height());
	 			break;
	 		case 'apoliticas':scroll = ($('#home').height() + $('#nosotros').height() + $('#politicas').height());
	 			break;
	 		case 'aredes_sociles':scroll = ($('#home').height() + $('#nosotros').height() + $('#politicas').height() + $('#redes_sociales').height());
	 			break;
	 		case 'acontacto':scroll = ($('#home').height() + $('#nosotros').height() + $('#politicas').height() + $('#servicios').outerHeight() + $('#redes_sociales').height());
	 			break;
	 		case '':
	 			break;
	 	}
	 	$('html,body').animate({scrollTop:scroll},1000, 'swing');
	 	evt.preventDefault();
	 });

	 $('.dominio').click(function(evt){
	 	$('#dominio').removeClass('hidden');
	 });

	Googlemaps();
});

function Googlemaps(){
	var latlng = new google.maps.LatLng(11.009085,-74.793901);
	var settings = {
		zoom: 16,
		center: latlng,
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("google-maps"), settings);
	var contentString = '<div id="content">'+
		'<h1>AltiviaOT</h1>'+
		'</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	var companyImage = new google.maps.MarkerImage('https://dl.dropbox.com/u/57960869/Altiviaot/web/contacto/ubicacion.png',
		new google.maps.Size(100,50),
		new google.maps.Point(0,0),
		new google.maps.Point(50,50)
	);
	var companyPos = new google.maps.LatLng(11.008785,-74.793141);
	var companyMarker = new google.maps.Marker({
		position: companyPos,
		map: map,
		icon: companyImage,
		title:"AltiviaOT",
		zIndex: 3});
	google.maps.event.addListener(companyMarker, 'click', function() {
		infowindow.open(map,companyMarker);
	});
}
