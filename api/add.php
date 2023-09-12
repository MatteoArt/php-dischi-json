<?php 

$dati_post = $_POST;

//decodifico il json per leggerlo in php
$datiJson = file_get_contents(__DIR__.'/../db/dischi.json');
$dischi = json_decode($datiJson, true);

//pusho nell'array dei dischi il nuovo oggetto che è stato inviato
$dischi[] = $dati_post;


//converto l'array dei dischi in formato json per poi scriverlo dentro il file json
$jsonString = json_encode($dischi, JSON_PRETTY_PRINT);

file_put_contents(__DIR__.'/../db/dischi.json',$jsonString);

header('Content-Type: application/json');

?>