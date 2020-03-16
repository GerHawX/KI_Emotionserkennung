<?php

 // erzeuge einen neuen cURL-Handle
 $ch = curl_init();

 // setze die URL und andere Optionen
 curl_setopt($ch, CURLOPT_URL, "127.0.0.1:5000/");
 curl_setopt($ch, CURLOPT_HEADER, 0);

 // führe die Aktion aus und gib die Daten an den Browser weiter
 $result = curl_exec($ch);

 // schließe den cURL-Handle und gib die Systemresourcen frei
 curl_close($ch);

echo $result;