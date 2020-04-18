<?php
//ini_set('MAX_EXECUTION_TIME', 3600);
if (isset($_POST['data'])) {
    $data = $_POST['data'];

} else {
    $data = "No Data in Array";
}

// erzeuge einen neuen cURL-Handle
$ch = curl_init();
//$pictureArray = array('name' => 'Foo', 'file' => '@/path/to/image.jpeg');
// setze die URL und andere Optionen
curl_setopt($ch, CURLOPT_URL, "127.0.0.1:5000/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 3600);
//curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $pictureArray);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));

// führe die Aktion aus und gib die Daten an den Browser weiter
$result = curl_exec($ch);

// schließe den cURL-Handle und gib die Systemresourcen frei
curl_close($ch);

echo $result;