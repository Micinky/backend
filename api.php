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
?>
//var geojsonFeature = {"type":"FeatureCollection","features":[{"type":"Feature","id":1,"geometry":{"type":"Point","coordinates":[15.9104,50.5640000000001]},"properties":{"nazev":"Centrum inovací a podnikání Trutnov","ico":"05146828","pravni_forma":"spolek","vlastnictvi":"soukromé","vedeckotechnicky_park":"ne","typ_inovacniho_centra":"ne","cowork":"ano","otevrena_dilna":"ne","aktivni":"ne","pasivni":"ano","nefunkcni":"ne","dotace_op_mpo":"ne","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ano","www":"facebook.com/CIPTrutnov/","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Trutnov","kod_okresu":"CZ0525","nazev_orp":"Trutnov","kod_orp":"5214","nazev_obce":"Trutnov","kod_obce":"579025","nazev_ulice":"Nádražní","cislo_domovni":"189","typ_cisla_domovniho":"č.p.","cislo_orientacni":null,"psc":"54101","wkt":"POINT(50.564 15.9104)","x":15.9104,"y":50.564,"dp_id":"II1","OBJECTID":1}},{"type":"Feature","id":2,"geometry":{"type":"Point","coordinates":[15.8642,50.2384000000001]},"properties":{"nazev":"Coworking TCHK","ico":"27493784","pravni_forma":"ústav","vlastnictvi":"veřejné","vedeckotechnicky_park":"ne","typ_inovacniho_centra":"ne","cowork":"ano","otevrena_dilna":"ne","aktivni":"ano","pasivni":"ne","nefunkcni":"ne","dotace_op_mpo":"ne","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ne","www":"tchk.cz/sluzby/podnikani/coworking/","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Hradec Králové","kod_okresu":"CZ0521","nazev_orp":"Hradec Králové","kod_orp":"5205","nazev_obce":"Hradec Králové","kod_obce":"569810","nazev_ulice":"Piletická","cislo_domovni":"486","typ_cisla_domovniho":"č.p.","cislo_orientacni":"19","psc":"50341","wkt":"POINT(50.2384 15.8642)","x":15.8642,"y":50.2384,"dp_id":"II2","OBJECTID":2}},{"type":"Feature","id":3,"geometry":{"type":"Point","coordinates":[15.8029000000001,50.4355]},"properties":{"nazev":"CTTV INOTEX (Centrum textilních technologií a vzdělávání - INOTEX)","ico":"47451963","pravni_forma":"společnost s ručením omezeným","vlastnictvi":"soukromé","vedeckotechnicky_park":"ne","typ_inovacniho_centra":"ne","cowork":"ne","otevrena_dilna":"ne","aktivni":"ano","pasivni":"ne","nefunkcni":"ne","dotace_op_mpo":"ano","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ne","www":"inotex.cz","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Trutnov","kod_okresu":"CZ0525","nazev_orp":"Dvůr Králové nad Labem","kod_orp":"5203","nazev_obce":"Dvůr Králové nad Labem","kod_obce":"579203","nazev_ulice":"Štefánikova ","cislo_domovni":"1208","typ_cisla_domovniho":"č.p.","cislo_orientacni":"1208","psc":"54401","wkt":"POINT(50.4355 15.8029)","x":15.8029,"y":50.4355,"dp_id":"II3","OBJECTID":3}},{"type":"Feature","id":4,"geometry":{"type":"Point","coordinates":[15.8238000000001,50.2164000000001]},"properties":{"nazev":"Liána Coworking","ico":"3333582","pravni_forma":"spolek","vlastnictvi":"soukromé","vedeckotechnicky_park":"ne","typ_inovacniho_centra":"ne","cowork":"ano","otevrena_dilna":"ne","aktivni":"ne","pasivni":"ano","nefunkcni":"ne","dotace_op_mpo":"ne","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ne","www":"facebook.com/lianacoworking/","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Hradec Králové","kod_okresu":"CZ0521","nazev_orp":"Hradec Králové","kod_orp":"5205","nazev_obce":"Hradec Králové","kod_obce":"569810","nazev_ulice":"Resslova","cislo_domovni":"929","typ_cisla_domovniho":"č.p.","cislo_orientacni":"6","psc":"50002","wkt":"POINT(50.2164 15.8238)","x":15.8238,"y":50.2164,"dp_id":"II4","OBJECTID":4}},{"type":"Feature","id":5,"geometry":{"type":"Point","coordinates":[15.8346000000001,50.2042000000001]},"properties":{"nazev":"Podnikatelské centrum Hradec Králové","ico":"62060911","pravni_forma":"společnost s ručením omezeným","vlastnictvi":"soukromé","vedeckotechnicky_park":"ne","typ_inovacniho_centra":"ano","cowork":"ne","otevrena_dilna":"ne","aktivni":"ne","pasivni":"ano","nefunkcni":"ne","dotace_op_mpo":"ne","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ne","www":"pc-hk.cz","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Hradec Králové","kod_okresu":"CZ0521","nazev_orp":"Hradec Králové","kod_orp":"5205","nazev_obce":"Hradec Králové","kod_obce":"569810","nazev_ulice":"Hradecká","cislo_domovni":"1151","typ_cisla_domovniho":"č.p.","cislo_orientacni":null,"psc":"50003","wkt":"POINT(50.2042 15.8346)","x":15.8346,"y":50.2042,"dp_id":"II5","OBJECTID":5}},{"type":"Feature","id":6,"geometry":{"type":"Point","coordinates":[15.8228000000001,50.2142000000001]},"properties":{"nazev":"Spolupracovna Bio Central","ico":"62958542","pravni_forma":"společnost s ručením omezeným","vlastnictvi":"soukromé","vedeckotechnicky_park":"ne","typ_inovacniho_centra":"ne","cowork":"ano","otevrena_dilna":"ne","aktivni":"ne","pasivni":"ano","nefunkcni":"ne","dotace_op_mpo":"ne","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ne","www":"biocentral.cz/en/udalost/closed-spolupracovna-coworking-space-for-you-344","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Hradec Králové","kod_okresu":"CZ0521","nazev_orp":"Hradec Králové","kod_orp":"5205","nazev_obce":"Hradec Králové","kod_obce":"569810","nazev_ulice":"tř. Karla IV. ","cislo_domovni":"774","typ_cisla_domovniho":"č.p.","cislo_orientacni":null,"psc":"50002","wkt":"POINT(50.2142 15.8228)","x":15.8228,"y":50.2142,"dp_id":"II6","OBJECTID":6}},{"type":"Feature","id":7,"geometry":{"type":"Point","coordinates":[15.8642,50.2384000000001]},"properties":{"nazev":"Technologické centrum Hradec Králové","ico":"27493784","pravni_forma":"ústav","vlastnictvi":"veřejné","vedeckotechnicky_park":"ano","typ_inovacniho_centra":"ano","cowork":"ne","otevrena_dilna":"ne","aktivni":"ano","pasivni":"ne","nefunkcni":"ne","dotace_op_mpo":"ano","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ne","www":"tchk.cz","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Hradec Králové","kod_okresu":"CZ0521","nazev_orp":"Hradec Králové","kod_orp":"5205","nazev_obce":"Hradec Králové","kod_obce":"569810","nazev_ulice":"Piletická","cislo_domovni":"486","typ_cisla_domovniho":"č.p.","cislo_orientacni":"19","psc":"50341","wkt":"POINT(50.2384 15.8642)","x":15.8642,"y":50.2384,"dp_id":"II7","OBJECTID":7}},{"type":"Feature","id":8,"geometry":{"type":"Point","coordinates":[15.8487000000001,50.2124000000001]},"properties":{"nazev":"Technologické centrum Tesla","ico":"2335794","pravni_forma":"společnost s ručením omezeným","vlastnictvi":"soukromé","vedeckotechnicky_park":"ne","typ_inovacniho_centra":"ne","cowork":"ne","otevrena_dilna":"ne","aktivni":"ano","pasivni":"ne","nefunkcni":"ne","dotace_op_mpo":"ne","dotace_op_msmt":"ne","dotace_op_mpsv":"ne","dotace_op_praha":"ne","dotace_kraje":"ne","dotace_jine":"ne","www":"tctesla.cz","nazev_vusc":"Královéhradecký kraj","kod_vusc":"CZ052","nazev_okresu":"Hradec Králové","kod_okresu":"CZ0521","nazev_orp":"Hradec Králové","kod_orp":"5205","nazev_obce":"Hradec Králové","kod_obce":"569810","nazev_ulice":"Víta Nejedlého","cislo_domovni":"1161","typ_cisla_domovniho":"č.p.","cislo_orientacni":"1b","psc":"50003","wkt":"POINT(50.2124 15.8487)","x":15.8487,"y":50.2124,"dp_id":"II8","OBJECTID":8}}]};
<?php
print("
//L.geoJSON(geojsonFeature).addTo(map);
");
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