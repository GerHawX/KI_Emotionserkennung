<?php
// Empfange die URL mit dem Foto
if (isset($_POST['data'])) {
    $data = $_POST['data'];

} else {
    $data = "No Data in Array";
}

// Erzeuge einen neuen cURL-Handle
$ch = curl_init();
// Setze die URL und andere Optionen
curl_setopt($ch, CURLOPT_URL, "127.0.0.1:5000/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 3600);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));

// Führe die Aktion aus und gib die Daten an den Browser weiter
$result = curl_exec($ch);

// Schließe den cURL-Handle
curl_close($ch);

echo $result;