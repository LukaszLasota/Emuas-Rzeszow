let map;
        let mapStyleJson = [{
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "color": "#f5f5f5"
            }]
        }, {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#bdbdbd"
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#eeeeee"
            }]
        }, {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e5e5e5"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dadada"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        }, {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e5e5e5"
            }]
        }, {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [{
                "color": "#eeeeee"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#c9c9c9"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }];

        function initMap() {

            var myLatlng = new google.maps.LatLng(50.0315459645, 21.9979552487);
            // 50.0322743,21.9959429,15

            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatlng,
                styles: mapStyleJson,
                zoom: 16,
                mapTypeControl: true
            });

            var w = $(window).width();

            var infoWindowIcon = `<div style="${ w > 400 ? 'float: left; width: 80px;' : 'width: 100%;'} text-align: center;">
						<img src="logo-black.png" style="width: 70px;margin: auto;">
					</div>`;
            var infoWindowDetails = `<div style="float: left; width: 280px;">
						<strong style="font-size: 11pt;">Zbór &quot;Emaus&quot;<br>
						Kościół Zielonoświątkowy w Rzeszowie</strong><br>
						gen. Jarosława Dąbrowskiego 1a<br>35-036 Rzeszów
						<a target="_blank" href="https://goo.gl/maps/nqzjsBNNsfo" style="float: right;color: grey;font-size: 8pt;padding-top: 4px;">Zobacz w Google</a>
					</div>`;

            var infowindow = new google.maps.InfoWindow({
                content: `
				<div style="position: relative;">
			        ${ w <= 400 || w > 600 ? infoWindowIcon : '' }
					${ w > 400 ? infoWindowDetails : ''}
				</div>
			`,
            });

            var marker = new google.maps.Marker({
                visible: true,
                position: myLatlng,
                map: map,
                animation: google.maps.Animation.DROP,
                title: "Zbór Zielonoświątkowy Emaus - Rzeszów"
            });

            infowindow.open(map, marker);
        }