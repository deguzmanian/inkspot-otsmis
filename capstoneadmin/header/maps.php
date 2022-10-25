<style>
    /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 100%;
        position: relative !important;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<div id="map"></div>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVJgnJtuMAKEMF4aS2FTYt55igMoCi6jk&libraries=places&callback=initMap">
</script>
<script>
    /**
     * @license
     * Copyright 2019 Google LLC. All Rights Reserved.
     * SPDX-License-Identifier: Apache-2.0
     */
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVJgnJtuMAKEMF4aS2FTYt55igMoCi6jk&libraries=places">
    var map, infoWindow, service;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: -34.397,
                lng: 150.644
            },
            zoom: 14
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                map.setCenter(pos);
                //Put marker of the Geolocated user location
                var userMarker = new google.maps.Marker({
                    map: map,
                    position: pos
                });

                google.maps.event.addListener(userMarker, 'click', function() {
                    infoWindow.setContent('Your location');
                    infoWindow.open(map, this);
                });

                //Put request in here there are 3 requests since nearbysearch only has one type to be specified
                var requestTattooShop = {
                    location: pos,
                    radius: '20000',
                    keyword: ['tattoo+shops']
                };

                //Make Places Service requests here
                service = new google.maps.places.PlacesService(map);
                service.nearbySearch(requestTattooShop, callback);

            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

    function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                var place = results[i];
                createMarker(results[i]);
            }
        }
    }

    function createMarker(place) {
        var type = place.types;
        var iconStyle;
        for (var i = 0; i < type.length; i++) {
            //put array of Place types in placeType variable
            var placeType = type[i];
            
            //Check the placeType and set the icon according to the placeType value
            switch (placeType) {
                case "tattoo+shops":
                    iconStyle = "http://maps.google.com/mapfiles/kml/shapes/pharmacy_rx.png"
                    break;
            }
        }

    //put marker of the places in the map
        var marker = new google.maps.Marker({
            map: map,
            icon: iconStyle,
            position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(place.name);
            infoWindow.open(map, this);
        });
    }

</script>
