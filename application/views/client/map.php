

    <div class="span9">
         </ul>
        <h3> Track the best services</h3>
        <hr class="soft" />
        <div id="map"></div>
        <script>
        	function initMap(){
        		var colombo = {lat: 6.9271, lng: 79.8612};
        		var galle = {lat: 6.0535, lng: 80.2210};
        		var kandy = {lat: 7.2906, lng: 80.6337};
        		var map = new google.maps.Map(document.getElementById('map'),{
        			zoom: 8,
        			center: kandy
        		});
        		var maker2 = new google.maps.Marker({
        			position: colombo,
        			map: map
        		});
        		var maker = new google.maps.Marker({
        			position: galle,
        			map: map
        		});
        		setMarkers();
        	}


        	function setMarkers(){
				  //clearMarkers(markers);
				  var markers = [];
				  markers.push({name: 'Marker 1', lat: 8.7585700, lng: 80.491870, type:'metal', place:'Sewalanka+Foundation, lk'});
				  markers.push({name: 'Marker 2', lat: 8.7626494, lng: 80.490561, type:'paper', place:'Pop+Yarl+Ice+Cream, lk'});
				  markers.push({name: 'Marker 3', lat: 8.758109, lng: 80.490282, type:'plastic', place:'Suvai+Aruvi, lk'});
				  markers.push({name: 'Marker 4', lat: 8.757731, lng: 80.491550, type:'glass', place:'Recharge+Now+Dth+Systems, lk'});
				  markers.push({name: 'Marker 5', lat: 8.758239, lng: 80.500592, type:'plastic', place:'Iluppayadi, lk'});
				  markers.push({name: 'Marker 6', lat: 8.762289, lng: 80.489012, type:'metal', place:'Vithusha+Medi+Clinic'});
				  markers.push({name: 'Marker 7', lat: 8.761160, lng: 80.497254, type:'paper', place:'Vavuniya+Divisional+Secretariat, lk'});
				  markers.push({name: 'Marker 8', lat: 8.754790, lng: 80.495007, type:'glass', place:'Distilleries+Company+Wholesale+Outlet, lk'});

				  for (m in markers){
				    if (document.getElementById('chk-'.concat(markers[m]['type'])).checked){
				      mk = markers[m]['place'];
				      markers[m] = new google.maps.Marker({
				        animation: google.maps.Animation.DROP,
				        position: {lat:markers[m]['lat'], lng:markers[m]['lng']},
				        map: window.map,
				        place: markers[m]['place'],
				        title: markers[m]['name'],
				        icon: 'images/bin-'.concat(markers[m]['type'], '.png')
				      });

				      google.maps.event.addListener(markers[m], 'click', (function(mk) {
				        return function() {
				              calculateAndDisplayRoute(window.directionsService, window.directionsDisplay, "Vavuniya+Campus,+University+of+Jaffna, lk", mk);
				        }
				      })(mk));
				    }
				  }
				  window.markers = markers;
				}
        	</script>



        	 <script async defer
		    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASed7m-nA1qJmxaRdN6f-eUFb6p0bhT_M&callback=initMap">
		    </script>

        </script>
       
    </div>
