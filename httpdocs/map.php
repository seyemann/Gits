<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
    // this will run when page is loaded and scrip above is already processed
    window.onload = function(){
        // we create a map 
        var centerPoint = new google.maps.LatLng(51.4641905, -0.1173561);
        var myOptions = {
            zoom: 16,
            center: centerPoint,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-div"), myOptions);
 
        // we create draggable marker of the user's location
        var myLocationMarker = new google.maps.Marker({draggable:true});
        myLocationMarker.setPosition(centerPoint);
        google.maps.event.addListener(myLocationMarker, 'dragend', function(event) {
            // closure is called when draggin ends
            alert(this.getPosition());
        });
        myLocationMarker.setAnimation(google.maps.Animation.DROP);
        myLocationMarker.setMap(map);
 
        // create clikable marker with custom data
        var destinationMarker = new google.maps.Marker({
            clickable:true,
            position:new google.maps.LatLng(-33.8710, 151.2030)
        });
        destinationMarker.someCustomData = 'Train Station';
        google.maps.event.addListener(destinationMarker, 'click', function(event) {
            alert(this.someCustomData);
        });
        destinationMarker.setMap(map);
 
        // finally create a marker with custom icons and hover handlers
        var imagUrls = {
            oneOn: 'http://maps.google.com/mapfiles/kml/pal3/icon47.png',
            oneOff: 'http://maps.google.com/mapfiles/kml/pal3/icon39.png'
        };
        var images = {
            oneOn: new google.maps.MarkerImage(imagUrls.oneOn),
            oneOff: new google.maps.MarkerImage(imagUrls.oneOff)
        };
        var ferryMarker = new google.maps.Marker({
            clickable:true,
            position:new google.maps.LatLng(-33.8697, 151.2041),
            icon:images.oneOff
        });
        google.maps.event.addListener(ferryMarker, 'mouseover', function(event) {
            this.setIcon(images.oneOn);
        });
        google.maps.event.addListener(ferryMarker, 'mouseout', function(event) {
            this.setIcon(images.oneOff);
        });
        ferryMarker.setMap(map);
 
    }
        </script>
    </head>
    <body>
        <div id="map-div" style="width:900px; height:250px; margin-left: 10px; ;"></div>
    </body>
</html>