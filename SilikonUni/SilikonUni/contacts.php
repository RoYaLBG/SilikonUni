<?php require_once 'app.php'; /* @var $view View */ ?>﻿
<?php $view->partial()->setScriptUrls("https://maps.googleapis.com/maps/api/js"); ?>
<?php $view->partial()->setScripts("
    function initialize() {
            var map_canvas = document.getElementById('map_canvas');
            var map_options = {
                center: new google.maps.LatLng(42.054598, 25.594458),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(map_canvas, map_options)
        }
        google.maps.event.addDomListener(window, 'load', initialize);        
    ");
?>
<?php $view->partial()->setStyles("
    #map_canvas {
            width: 50%;
            height: 300px;
        }
    ");
?>
<?php $view->partial()->header(); ?>
        <section>
            <div id="map_canvas"></div> 
            <address>
                <p>адрес: Димитровград,</p>
                <p>п.к.6400 бул."ЧАЛГА СТРИЙТ" №16</p>
                <p>e-mail: gb.renyap@eciffo  </p>
                <p>тел. 0391 60311 тел. </p>
                <p>  0391 60310 факс: 0391 60330 </p>
            </address>
        </section>
<?php $view->partial()->footer(); ?>
