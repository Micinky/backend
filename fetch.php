<?php
//$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';


//if ($contentType === "application/json") {
    //Receive the RAW post data.
    //$content = trim(file_get_contents("php://input"));
    $content = '{
         "attributes": {
            "oblast": "Hradec Králové",
            "vyjezdova_zakladna": "Bláhovka",
            "nazev_vusc": "Královehradecký kraj",
            "kod_vusc": "CZ052",
            "nazev_okresu": "Hradec Králové",
            "kod_okresu": "CZ0521",
            "nazev_orp": "Hradec Králové",
            "kod_orp": "5205",
            "nazev_obce": "Hradec Králové",
            "kod_obce": "569810",
            "nazev_ulice": "Pražská",
            "cislo_domovni": "230",
            "typ_cisla_domovniho": "č.p.",
            "cislo_orientacni": "153z",
            "psc": "50004",
            "www": "https://www.zzskhk.cz/vedeni-zzs-a-vyjezdove-zakladny-hradec-kralove",
            "wkt": "POINT(50.2013  15.7779)",
            "x": 15.7779,
            "y": 50.2013,
            "dp_id": "ZZS3",
            "OBJECTID": 3
         },
         "geometry": {
            "x": 15.777900000000047,
            "y": 50.20130000000006
         }
      },
      {
         "attributes": {
            "oblast": "Náchod",
            "vyjezdova_zakladna": " ",
            "nazev_vusc": "Královehradecký kraj",
            "kod_vusc": "CZ052",
            "nazev_okresu": "Náchod",
            "kod_okresu": "CZ0523",
            "nazev_orp": "Náchod",
            "kod_orp": "5209",
            "nazev_obce": "Náchod",
            "kod_obce": "573868",
            "nazev_ulice": "B. Němcové",
            "cislo_domovni": "738",
            "typ_cisla_domovniho": "č.p.",
            "cislo_orientacni": null,
            "psc": "54701",
            "www": "https://www.zzskhk.cz/nachod",
            "wkt": "POINT(50.4126  16.1623)",
            "x": 16.1623,
            "y": 50.4126,
            "dp_id": "ZZS4",
            "OBJECTID": 4
         },
         "geometry": {
            "x": 16.162300000000073,
            "y": 50.412600000000054
         }
      }';

    $decoded = json_decode($content, true);
echo count($decoded);
    //If json_decode failed, the JSON is invalid.
    if(is_array($decoded) && count($decoded) != 0) {
var_dump($decoded);
echo"\n";
echo($decoded[0]["attributes"]["oblast"]);
    } else {
        // Send error back to user.
        echo("fuck");
    }
//}
?>