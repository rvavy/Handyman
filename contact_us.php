<!DOCTYPE html>
<html lang="en">

<?php
include("views/header.php");
?>

<div class="maincontent">
		<div class="content">
            	<header>
                	<h2>Contact Details</h2>
                </header>
                    <p>
					If you have any concerns, please get in contact. <br />
					<br />
					9am-5pm Mon-Fri Help Lines: <br />
					Account Help Telephone Number: 01484 589329 <br />
					Other help Telephone Number: 01484 589328 <br />
					<br />
					Any Time Help: <br />
					Email Address (Response:ASAP): HandymanAgency@hotmail.co.uk <br />
					</p>
					
					<p>
					Below is a google map of where we are based.:
					</p>
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:610px;'><div id='gmap_canvas' style='height:440px;width:610px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(53.6426026,-1.7785138000000416),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(53.6426026,-1.7785138000000416)});infowindow = new google.maps.InfoWindow({content:'<strong>University Of Huddersfield</strong><br>University Of Huddersfield<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
</div>




<?php
include("views/footer.php");
?>
