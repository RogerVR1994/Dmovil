var map;

var latlng = new google.maps.LatLng(19.594647, -99.228448);

var stylez = [{
    featureType: "all",
    elementType: "all",
    stylers: [{
        saturation: -30
            }]
        }];
var mapOptions = {
    zoom: 15,
    center: latlng,
    scrollwheel: false,
    scaleControl: false,
    disableDefaultUI: true,
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
    }
};
map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);


var geocoder_map = new google.maps.Geocoder();

var address = 'Tecnológico de Monterrey Campus Estado de Mexico';

geocoder_map.geocode({
    'address': address
}, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            icon: 'assets_pretty/img/core-img/map.png',
            position: map.getCenter()
        });
    } else {
        alert("Geocode was not successful for the following reason: " + status);
    }
});


var mapType = new google.maps.StyledMapType(stylez, {
    name: "Grayscale"
});

map.mapTypes.set('gMap', mapType);

map.setMapTypeId('gMap');
