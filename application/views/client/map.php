

    <div class="span9">
         </ul>
        <h3> Track the best services</h3>
        <hr class="soft" />
        <div id="map"></div>
       

    <script>
       var curlat;
       var curlng;
       var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: new google.maps.LatLng(7.2906, 80.6337),
          mapTypeId: 'roadmap'
        });

        infoWindow = new google.maps.InfoWindow;

         if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            curlat = position.coords.latitude;
            curlng = position.coords.longitude;

            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location.');
            infoWindow.open(map);
            //map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

        setMarkers();
        }


        function setMarkers(){
        clearMarkers(features);

        var features = [];

        <?php

			foreach ($business_data as $item) {
		?>
  				features.push({position: new google.maps.LatLng(<?php echo $item->lat; ?>, <?php echo $item->lng; ?>),type: 'info', icon:<?php echo $item->category_id; ?> ,name:'<?php echo $item->name; ?>'});
  		<?php }?>
        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            animation: google.maps.Animation.DROP,
            title: feature.name,
            icon:  '<?php echo  base_url() ?>assets/images/'+ feature.icon + '.png' ,
            map: map
          });
        });

        }

      

		function clearMarkers(markers){
			if (typeof markers !== 'undefined'){
				for (m in markers) {
				    markers[m].setMap(null);
				}
			}
		}

		function calculateAndDisplayRoute(directionsService, directionsDisplay, start, end) {
		  // alert(start);
		  // alert(end);
		  directionsService.route({
		    origin: start,
		    destination: end,
		    travelMode: 'DRIVING'
		  }, function(response, status) {
		    if (status === 'OK') {
		      directionsDisplay.setDirections(response);
		      // alert(response);
		    } else {
		      window.alert('Directions request failed due to ' + status);
		    }
		  });
		}


    </script>


        	 <script async defer
		    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASed7m-nA1qJmxaRdN6f-eUFb6p0bhT_M&callback=initMap">
		    </script>

        </script>
       
    </div>
