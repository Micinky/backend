<?php
include 'fetch.php';
$type = 0;
if ($type == 0) {
    $url = "";
    $res = GetFromApi($url);
    for ($i = 0; $i < count($res); $i++) {
        $lat = $res[$i]['geometry']["y"];
        $lon = $res[$i]['geometry']["x"];
        if (isset($res[$i]['attributes'])) {
            $name = $res[$i]['attributes']["Název"];
            $street = $res[$i]['attributes']["Název ulice"];
            $city = $res[$i]['attributes']["Název obce"];
            $number = $res[$i]['attributes']["Číslo popisné nebo evidenční podle typu čísla domovního"];
            $zip = $res[$i]['attributes']["PSČ"];
            DrawPoint($lon, $lat, "<Název>$name</Název><Adresa>$street $number</Adresa><Obec>$city</Obec><PSČ>$zip</PSČ>");
        } else {
            $name = $res[$i]['properties']["nazev"];
            $street = $res[$i]['properties']["nazev_ulice"];
            $city = $res[$i]['properties']["nazev_obce"];
            $number = $res[$i]['properties']["typ_cisla_domovniho"] . $res[$i]['attributes']["cislo_domovni"] . "/" . $res[$i]['attributes']["cislo_orientacni"];
            $zip = $res[$i]['properties']["psc"];
            DrawPoint($lon, $lat, "<Název>$name</Název><Adresa>$street $number</Adresa><Obec>$city</Obec><PSČ>$zip</PSČ>");
        }

    }
} else if ($type == 1) {
    $url = "";
    $res = GetFromApi($url);
    for ($i = 0; $i < count($res); $i++) {
        $lonlat = $res[$i]["lonlat"];
        DrawPolyLine($lonlat, "");
    }
} else {
    $url = "";
    $res = GetFromApi($url);
    for ($i = 0; $i < count($res); $i++) {
        $lonlat = $res[$i]["lonlat"];
        DrawPolygon($lonlat, "");
    }
}
DrawPoint(50.19840000000004, 15.83370000000008, "\"Hlavní budova\"");
print("
</script>
");
print("
</body>
</html>");
function DrawPoint($x, $y, $text)
{
    print(" <Marker position={[$x,$y]}>
      <Popup>
        $text
      </Popup>
    </Marker>");
}

function DrawPolyLine($lonlats, $text)
{
    print("L.polyline($lonlats).addTo(map).bindPopup($text)");
}

function DrawPolygon($lonlats, $text)
{
    print("L.polygon($lonlats).addTo(map).bindPopup($text)");
}

?>