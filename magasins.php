<?php include("header.php"); ?>

    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>


<div class="container" id="map"></div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<script type="text/javascript">
    var locations = [
        ['Amap IDF', 48.8615144, 2.3518197, 5],
        ['Amap Lille', 50.292134, 2.792142, 5],
        ['Amap Châteauroux', 46.817514, 1.7030512, 5],
        ['Miramap Annecy', 45.9154129, 6.1328845, 5]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: new google.maps.LatLng(46.7, 2.5),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>

<?php include("footer.php"); ?>