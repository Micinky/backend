<?php
include 'fetch.php';
$type = 0;
if($type== 0){
    $url = "";
    $res = GetFromApi($url);
    for($i=0;$i<count($res);$i++){
        $lat = $res[$i]['geometry']["y"];
        $lon = $res[$i]['geometry']["x"];
        DrawPoint($lon,$lat,"");
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
    print(" <Marker position={[$x,$y]}>
      <Popup>
        
      </Popup>
    </Marker>");
}
function DrawPolyLine($lonlats, $text){
    print("L.polyline($lonlats).addTo(map).bindPopup($text)");
}
function DrawPolygon($lonlats, $text){
    print("L.polygon($lonlats).addTo(map).bindPopup($text)");
}
?>