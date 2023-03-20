<?php $i=5;?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="css/swiper.css">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="demos/construction/construction.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<!-- Document Title
	============================================= -->
	<title>iac Project Management</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">
		<?php include_once 'header.php' ;?>
		<!-- Top Bar
		============================================= -->
		
<!-- 		<section class="page-title page-title-parallax parallax dark">
<img src="demos/construction/images/slider/1.jpg" class="parallax-bg">
<div class="container">
<div class="page-title-row">
<div class="page-title-content">
<h1>About Us</h1>
<span>iac Project Management</span>
</div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">About Us</li>
</ol>
</nav>
</div>
</div>
</section> -->

		<!-- Content
		============================================= -->
		<section id="content">
			
			<div id="mapDiv" style="width: 100%; height:400px; border-top: 4px solid #f18052; border-bottom: 4px solid #000;"></div>
		<div><div class="container">			

							

						</div>
					

				</div>

		</section><!-- #content end -->

		<?php include_once 'footer.php' ; ?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/functions.js"></script>
	<script>
                function initMap() {
  // The location of Uluru
  const uluru = { lat: 24.34973834047565, lng: 54.51458538330305 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("mapDiv"), {
    zoom: 18,
    center: uluru,
    // styles: [{
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#f5f5f5"
    //                         }]
    //                     }, {
    //                         "elementType": "labels.icon",
    //                         "stylers": [{
    //                             "visibility": "off"
    //                         }]
    //                     }, {
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#616161"
    //                         }]
    //                     }, {
    //                         "elementType": "labels.text.stroke",
    //                         "stylers": [{
    //                             "color": "#f5f5f5"
    //                         }]
    //                     }, {
    //                         "featureType": "administrative.land_parcel",
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#bdbdbd"
    //                         }]
    //                     }, {
    //                         "featureType": "poi",
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#eeeeee"
    //                         }]
    //                     }, {
    //                         "featureType": "poi",
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#757575"
    //                         }]
    //                     }, {
    //                         "featureType": "poi.park",
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#e5e5e5"
    //                         }]
    //                     }, {
    //                         "featureType": "poi.park",
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#9e9e9e"
    //                         }]
    //                     }, {
    //                         "featureType": "road",
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#ffffff"
    //                         }]
    //                     }, {
    //                         "featureType": "road.arterial",
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#757575"
    //                         }]
    //                     }, {
    //                         "featureType": "road.highway",
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#dadada"
    //                         }]
    //                     }, {
    //                         "featureType": "road.highway",
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#616161"
    //                         }]
    //                     }, {
    //                         "featureType": "road.local",
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#9e9e9e"
    //                         }]
    //                     }, {
    //                         "featureType": "transit.line",
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#e5e5e5"
    //                         }]
    //                     }, {
    //                         "featureType": "transit.station",
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#eeeeee"
    //                         }]
    //                     }, {
    //                         "featureType": "water",
    //                         "elementType": "geometry",
    //                         "stylers": [{
    //                             "color": "#c9c9c9"
    //                         }]
    //                     }, {
    //                         "featureType": "water",
    //                         "elementType": "labels.text.fill",
    //                         "stylers": [{
    //                             "color": "#0088cc"
    //                         }]
    //                     }]
  });
  // The marker, positioned at Uluru
  var image = '/marker.png';
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
    icon: image
  });
}

window.initMap = initMap;

            </script>
            <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqoIqVUkh7cGtexhbsGiYosWJtUdGQI5A&callback=initMap&v=weekly"
      defer
    ></script>
</body>
</html>