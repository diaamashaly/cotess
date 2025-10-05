<?php
if (!defined('FW'))
	die('Forbidden');

/**

 * @var $atts

 */
?>
<section id="maps">
    <div id="map"></div>
    <div class="waves">
        <div class="wave-1"></div>
        <div class="wave-2"></div>
        <div class="wave-3"></div>
        <div class="wave-4"></div>
    </div>
</section>


<script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDjNNH8UqB1PkU3XVrkkzwOuFA0t2owkpM"></script>
<script>
    var marker;
    var map;

    function initialize() {

        var mapProp = {
            center: new google.maps.LatLng(<?php echo $atts['accordion_heading']['coordinates']['lat']; ?>, <?php echo $atts['accordion_heading']['coordinates']['lng']; ?>),
            zoom: 14,
            styles: [
                {
                    "featureType": "landscape.man_made",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "landscape.man_made",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#a1e5e4"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#abfbc7"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "color": "#89dcb6"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fda4f2"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fda4f1"
                        }
                    ]
                }
            ],
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: true,
            streetViewControl: false,
            overviewMapControl: false,
            rotateControl: true,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"), mapProp);


        marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $atts['accordion_heading']['coordinates']['lat']; ?>, <?php echo $atts['accordion_heading']['coordinates']['lng']; ?>),
            animation: google.maps.Animation.DROP,
            icon: '<?php kr_path_img('market.png') ?>',
            draggable: false,
        });
        map.setCenter(marker.position);
        marker.setMap(map);

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>




