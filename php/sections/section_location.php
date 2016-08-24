<!--Map -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Section: location -->
<section id="location" class="home-section text-center bg-white">
    
    <div class="heading-about">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow bounceInDown" data-wow-delay="0.4s">
                <div class="section-heading">
                <h2>Find Us</h2>
                <i class="fa fa-2x fa-angle-down"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div id="map" class="wow fadeInUp"></div> 
</section>

<script>
    function initialize() {
        var isDraggable = $(document).width() > 480 ? true : false;
        var myLatlng = new google.maps.LatLng(16.859682, -99.868684);
        var mapOptions = {
            zoom: 15,
            center: myLatlng,
            draggable: isDraggable,
            scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var infowindow = new google.maps.InfoWindow({
            content: "<h4>Condo L'Escargot</h4><img src='img/condo/map.jpeg' style='width:200px'>"
        });

        var image = {
            url: 'img/icons/logo.png',
            size: new google.maps.Size(50, 50),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(25, 42)
          };

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: image,
            draggable: false,
            animation: google.maps.Animation.DROP,
            title: 'Pin'
        });
        marker.addListener('click', toggleBounce);
        function toggleBounce() {
            infowindow.open(map, marker);
            if (marker.getAnimation() == null) {
                marker.setAnimation(google.maps.Animation.BOUNCE);
                setTimeout(function(){marker.setAnimation(null);}, 2000);
            }
        }
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize());
</script>