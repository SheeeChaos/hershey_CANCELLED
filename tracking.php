<?php 
include('clientPartials/clientHeader.php');
ob_start();
?>

<!DOCTYPE html>
<html>
<style>
        .body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }

        #map {
            height: 400px;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #deliveryStatus {
            font-size: 18px;
            margin-top: 20px;
        }

    </style>
<body>
    <br></br>
    <span></span>
    <div class="container">
        <h1>Delivery Tracking System</h1>
        <div id="map"></div>
        <button id="trackButton">Track Delivery</button>
        <div id="deliveryStatus"></div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
   

    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 14.6819, lng: 121.0421},
                zoom: 15
            });
        }

        function trackDelivery() {
            // Simulate tracking delivery
            var deliveryLocation = {lat: 14.6819, lng: 121.0421};
            var marker = new google.maps.Marker({
                position: deliveryLocation,
                map: map,
                title: 'Delivery Location'
            });
            
            map.setCenter(deliveryLocation);
            document.getElementById('deliveryStatus').innerHTML = 'Delivery is on the way!';
        }

        document.getElementById('trackButton').addEventListener('click', trackDelivery);

    </script>
</body>
</html>
<?php 
include('clientPartials/clientFooter.php');
?>