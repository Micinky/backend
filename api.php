<?php
include 'fetch.php';
print("<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <div id='map' style='height: 85%;' ></div>
");
print("
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.2/leaflet.css\" integrity=\"sha512-UkezATkM8unVC0R/Z9Kmq4gorjNoFwLMAWR/1yZpINW08I79jEKx/c8NlLSvvimcu7SL8pgeOnynxfRpe+5QpA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.2/leaflet.js\" integrity=\"sha512-KMraOVM0qMVE0U1OULTpYO4gg5MZgazwPAPyMQWfOkEshpwlLQFCHZ/0lBXyviDNVL+pBGwmeXQnuvGK8Fscvg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script>
var map = L.map('map').setView([50.4441322,15.7358852], 10);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
}).addTo(map);");
$type = 0;
if($type== 0){
    $url = "";
    $res = GetFromApi($url);
    for($i=0;$i<count($res);$i++){
        $lat = $res[$i]["lat"];
        $lon = $res[$i]["lon"];
        DrawPoint($lat,$lon,"");
    }
}
else if ($type == 1){
    $url = "";
    $res = GetFromApi($url);
    for($i=0;$i<count($res);$i++){
        $lonlat = $res[$i]["lonlat"];
        DrawPolyLine($lonlat,"");
    }
}else{
    $url = "";
    $res = GetFromApi($url);
    for($i=0;$i<count($res);$i++){
        $lonlat = $res[$i]["lonlat"];
        DrawPolygon($lonlat,"");
    }
}
DrawPoint(50.19840000000004,15.83370000000008,"\"Hlavní budova\"");
print("
</script>
");
print("
</body>
</html>");
function DrawPoint($x, $y, $text){
    print("L.marker([$x, $y]).addTo(map).bindPopup($text)");
}
function DrawPolyLine($lonlats, $text){
    print("L.polyline($lonlats).addTo(map).bindPopup($text)");
}
function DrawPolygon($lonlats, $text){
    print("L.polygon($lonlats).addTo(map).bindPopup($text)");
}
?>