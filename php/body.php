<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <?php
        require 'php/navbar.php';
        require 'php/sections/section_intro.php';
        require 'php/sections/section_price.php';
        require 'php/sections/section_comforts.php';
        require 'php/sections/section_gallery.php';
        require 'php/sections/section_area.php';
        //require 'php/sections/section_location.php';
        require 'php/sections/section_contact.php';
        require 'php/footer.php'; 
    ?>

    <!-- FUENTES -->
    <script type="text/javascript">
          WebFontConfig = {
            google: { families: [ 'Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic:latin', 'Montserrat:400,700:latin', 'Merriweather:400,300,300italic,400italic,700,700italic,900,900italic:latin' ] }
          };
          (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
          })();
    </script>

    <!-- TRADUCTOR -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>

    <!-- DatePicker -->
    <link href="css/datepicker/daterangepicker.css" rel="stylesheet">
    <script src="js/datepicker/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.min.js"></script>

    <!-- SLIDER -->
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>

    <!-- Form -->
    <script src="js/forms.js"></script>
    <!--Map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <script>

        $(function() {
            $('input[name="reservationDate"]').daterangepicker({
                locale: {
                    format: 'DD-MM-YYYY'
                }
            });
            $('input[name="reservationDate"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
            });
        });

        function initialize() {
            var isDraggable = $(document).width() > 480 ? true : false;
            var myLatlng = new google.maps.LatLng(16.859682, -99.868684);
            var mapOptions = {
                zoom: 12,
                center: myLatlng,
                draggable: isDraggable,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var infowindow = new google.maps.InfoWindow({
                content: "<h4>Condo L'Escargot</h4><img src='img/condo/map.jpeg' style='width:150px'>"
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
            infowindow.open(map, marker);
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

    <script>
        (function($){
            //Plugin activation
            $(window).enllax();            
    //            $('#some-id').enllax();            
    //            $('selector').enllax({
    //                type: 'background', // 'foreground'
    //                ratio: 0.5,
    //                direction: 'vertical' // 'horizontal'
    //            });            
        })(jQuery);
    </script>

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" />

    <!-- Squad theme CSS -->
    <link href="css/form.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/slider.min.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">

</body>