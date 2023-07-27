<?php
$url = file_get_contents("http://localhost:8080/geoserver/WONOSOBO/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=WONOSOBO%3Awonosobo&maxFeatures=50&outputFormat=application%2Fjson");
# url yang ada di dalam ("") itu link address dari halaman GeoJSON.. jangan luap hapus bagian &maxFeatures=50
echo ($url);
