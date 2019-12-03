<div class="col-sm-4 map-section">
<div class="map-row">
	<div class="map-block d-flx h100">
		<div id="loc-map" style="overflow: hidden;position: relative;"></div>
	</div>
</div>
		<script>
				jQuery(function($) {
					// Asynchronously Load the map API 
					var script = document.createElement('script');
					script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyBpizhtLf57D3-zi-Vl2jM2ECJwJvliQNk&sensor=false&callback=initialize";
					document.body.appendChild(script);
				});

				function initialize() {
					var map;
					var bounds = new google.maps.LatLngBounds();
					var mapOptions = {
						mapTypeId: 'roadmap',
					};               
					// Display a map on the page
					map = new google.maps.Map(document.getElementById("loc-map"), mapOptions);
					map.setTilt(45);
						
					// Multiple Markers
					var markers = [
						['Dubai', 43.121191,-79.5806753],
						['Sharjah', 43.1788679,-79.8798403],
						['Abhudhabi', 43.5997785,-79.639839],
						['Ras Al Khaima', 43.66919,-79.393072],
		
						
					];
										
					// Info Window Content
					var infoWindowContent = [
						['<div class="info_content"><div class="info_content"><div class="info_content-img"><img src="assets/images/uploads/sr-images1.jpg"></div><div class="info_content-ctn"><div class="info-ttl">Business Center / Fixed Desk</div><div class="info-adrs"><p>Alliance Business Center - Business Village</p><p>Al Maktoum Road, Dubai, United Arab Emirates</p></div> <a href="#state" class="btn btn-sm styled">View Map</a></div></div></div>'], 
							['<div class="info_content"><div class="info_content"><div class="info_content-img"><img src="assets/images/uploads/sr-images1.jpg"></div><div class="info_content-ctn"><div class="info-ttl">Business Center / Fixed Desk</div><div class="info-adrs"><p>Alliance Business Center - Business Village</p><p>Al Maktoum Road, Dubai, United Arab Emirates</p></div> <a href="#state" class="btn btn-sm styled">View Map</a></div></div></div>'],
							['<div class="info_content"><div class="info_content"><div class="info_content-img"><img src="assets/images/uploads/sr-images1.jpg"></div><div class="info_content-ctn"><div class="info-ttl">Business Center / Fixed Desk</div><div class="info-adrs"><p>Alliance Business Center - Business Village</p><p>Al Maktoum Road, Dubai, United Arab Emirates</p></div> <a href="#state" class="btn btn-sm styled">View Map</a></div></div></div>'],
							['<div class="info_content"><div class="info_content"><div class="info_content-img"><img src="assets/images/uploads/sr-images1.jpg"></div><div class="info_content-ctn"><div class="info-ttl">Business Center / Fixed Desk</div><div class="info-adrs"><p>Alliance Business Center - Business Village</p><p>Al Maktoum Road, Dubai, United Arab Emirates</p></div> <a href="#state" class="btn btn-sm styled">View Map</a></div></div></div>'],
						
							
						
					];
						
					// Display multiple markers on a map
					var infoWindow = new google.maps.InfoWindow(), marker, i;
					
					// Loop through our array of markers & place each one on the map  
					for( i = 0; i < markers.length; i++ ) {
						var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
						bounds.extend(position);
						marker = new google.maps.Marker({
							position: position,
							map: map,
							title: markers[i][0],
							icon: 'https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png'
						});
						
						// Allow each marker to have an info window    
						google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
							return function() {
								infoWindow.setContent(infoWindowContent[i][0]);
								infoWindow.open(map, marker);
							}
						})(marker, i));

						// Automatically center the map fitting all markers on the screen
						map.fitBounds(bounds);
					}

					// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
					var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
						this.setZoom(9);
						google.maps.event.removeListener(boundsListener);
					});
					
				}
		</script>
	</div>