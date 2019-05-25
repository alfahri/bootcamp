<?php
    function badenPowel($kalimatnya)
    {
        $data = substr_count($kalimatnya, 'a')+substr_count($kalimatnya, 'i')+substr_count($kalimatnya, 'u')+substr_count($kalimatnya, 'e')+substr_count($kalimatnya, 'o');

        return $data;
    }

    $kalimatnya = "software engginerring";
    $result = badenPowel($kalimatnya);

    echo $result;
 ?>