<?php

$url = "https://api.clashroyale.com/v1/players/%23".$_GET["tag"]."/upcomingchests";

$imgsilver="http://50.21.190.183/clashroyaleapi/img/silverchest.png";
$imggolden="http://50.21.190.183/clashroyaleapi/img/goldenchest.png";
$imggold="http://50.21.190.183/clashroyaleapi/img/goldcrate.png";
$imgmagical="http://50.21.190.183/clashroyaleapi/img/magicalchest.png";
$imggiant="http://50.21.190.183/clashroyaleapi/img/giantchest.png";
$imgmegalc="http://50.21.190.183/clashroyaleapi/img/mlc.png";
$imglegend="http://50.21.190.183/clashroyaleapi/img/legendario.png";
$imgepic="http://50.21.190.183/clashroyaleapi/img/epic.png";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImJjNjNhMTQyLTM1ZWItNDEzNS1iMDZmLWY1MDk1ZTBhNWNkNSIsImlhdCI6MTYzMjM3MDU4MSwic3ViIjoiZGV2ZWxvcGVyL2QwN2IzMzc5LWNmNWItY2Q1Zi01ZjhhLWZlYjA3NjAyMDBiMyIsInNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUiOiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyI1MC4yMS4xOTAuMTgzIl0sInR5cGUiOiJjbGllbnQifV19.iAQdqo70mljNqZHcKNKZke-NPkF6mW2xDXamW9-1Y_fyo1cll-0l81RSczbfHva8B29wC5KUlFzh4IGqUm-iaA",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);

if (!curl_errno($curl)) {
  switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
    case 200:  # OK
    $stc=200; 
      break;
    default:
      $stc=$http_code;
  }
}
curl_close($curl);

if($stc==200)
{
  
  $jsond=json_decode($resp,true);

foreach($jsond["items"] as $cofres)
{  
switch ($cofres["name"]) {
    case "Silver Chest":

      echo '<div class="card" style="width: 15rem;">';
      echo '<img src="'; print $imgsilver; echo '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
       echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
      echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
     echo '</div>';
       echo '</div>'; 
    break;

    case "Golden Chest":

      echo '<div class="card" style="width: 15rem;">';
      echo '<img src="'; print $imggolden; echo '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
       echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
      echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
     echo '</div>';
       echo '</div>'; 
      break;
    
    case "Magical Chest":

      echo '<div class="card" style="width: 15rem;">';
      echo '<img src="'; print $imgmagical; echo '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
       echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
      echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
     echo '</div>';
       echo '</div>'; 
    break;

    case "Giant Chest":

      echo '<div class="card" style="width: 15rem;">';
      echo '<img src="'; print $imggiant; echo '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
       echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
      echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
     echo '</div>';
       echo '</div>'; 
      break;

    case "Mega Lightning Chest":

      echo '<div class="card" style="width: 15rem;">';
      echo '<img src="'; print $imgmegalc; echo '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
       echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
      echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
     echo '</div>';
       echo '</div>'; 
    break;

    case "Legendary Chest":

      echo '<div class="card" style="width: 15rem;">';
      echo '<img src="'; print $imglegend; echo '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
       echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
      echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
     echo '</div>';
       echo '</div>'; 
      break;

    case "Epic Chest":

      echo '<div class="card" style="width: 15rem;">';
      echo '<img src="'; print $imgepic; echo '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
       echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
      echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
     echo '</div>';
       echo '</div>'; 
      break;
     
     default:

     echo '<div class="card" style="width: 15rem;">';
     echo '<img src="'; print $imggold; echo '" class="card-img-top" alt="...">';
     echo '<div class="card-body">';
      echo '<h5 class="card-title">'; print $cofres["name"]; echo '</h5>';
     echo '<p class="card-text"> posición: '; print $cofres["index"]+1; echo '</p>';
    echo '</div>';
      echo '</div>'; 

      break;
}

}

} 
else
{
   echo "No se pudo obtener informacion del jugador, revise que el tag ingresado sea correcto";
}

?>
