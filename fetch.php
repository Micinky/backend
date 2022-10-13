<?php
//function GetFromApi($apiurl)
//{
    $apiurl = 'https://services6.arcgis.com/ogJAiK65nXL1mXAW/arcgis/rest/services/N%C3%A1rodn%C3%AD_kulturn%C3%AD_pam%C3%A1tky_na_indikativn%C3%ADm_seznamu/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $apiurl);
    $content = curl_exec($ch);
    curl_close($ch);
    $decoded = json_decode($content, true);
    //echo count($decoded);
    if (in_array('fields', $decoded)) {
        echo('fuck');
        if (in_array('name', $decoded['fields'])) {
            echo('not so nice');
            if (in_array('alias', $decoded['fields'])) {
                for ($x = 0; $x < count($decoded['fields']); $x++){
                    echo('nice');
                     $decoded['features'][$x]['attributes'][$decoded['fields'][$x]['alias']] = $decoded['features'][$x]['attributes'][$decoded['fields'][$x]['name']];
                    unset($decoded['features'][$x]['attributes'][$decoded['fields'][$x]['name']]);
                }
            }
        }
    }
    echo "\n";
    if (is_array($decoded) && count($decoded) != 0)
    {
        var_dump($decoded);
    }
    else
    {
        echo("upsík dupsík");
    }

//}
?>


