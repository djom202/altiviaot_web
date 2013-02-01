$(document).ready(function(){
	 $('nav a').click(function(evt){
	 	var id = $(this).attr('id');
	 	var scroll = 0;
	 	switch(id){
	 		case 'ahome':scroll = 0;
	 			break;
	 		case 'anosotros':scroll = ($('#home').height());
	 			Logos();
	 			break; 
	 		case 'aservicios':scroll = ($('#home').height() + $('#nosotros').height());
	 			break; 
	 		case 'apoliticas':scroll = ($('#home').height() + $('#nosotros').height() + $('#politicas').height());
	 			break; 
	 		case 'acontacto':scroll = ($('#home').height() + $('#nosotros').height() + $('#politicas').height() + $('#servicios').outerHeight());
	 			break;
	 		case 'facebook':
	 			break;
	 		case 'twitter':
	 			break;
	 		case 'youtube':
	 			break;
	 	}
	 	$('html,body').animate({scrollTop:scroll},1000, 'swing');
	 	evt.preventDefault();
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
	var companyImage = new google.maps.MarkerImage('themes/img/contacto/ubicacion.png',
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

function Logos(){
   var c = $('#logos').attr('class');
   $('#logos').attr('class','show');
   if(c=='show') return
   $('#logos1').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
        $('#logos2').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
            $('#logos3').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
                $('#logos4').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
                    $('#logos5').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
                        $('#logos6').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
                            $('#logos7').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
                                $('#logos8').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0},function(){
                                    $('#logos9').css({opacity: 0.0, visibility: "visible"}).stop().animate({opacity: 1.0});
                                });
                            });
                        });
                    });
                });
            });
        });
    });
}