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
<?php $view->partial()->header(); ?>
<section class="oneColumnSection">
    <article>
        <header>
            <h2>Свържене се с нас!</h2>
        </header>
        <div>
            <div id="map_canvas"></div>
            <address id="address">
                <p>гр. Димитровград</p>
                <p>п.к.6400 бул."ЧАЛГА СТРИЙТ"16</p>
                <p>e-mail: chalga.stars@silikonuni.bg</p>
                <p>тел: 06969 696969</p>
                <p>факс: 06969 696969</p>
            </address>
        </div>
    </article>
</section>
<?php $view->partial()->footer(); ?>
