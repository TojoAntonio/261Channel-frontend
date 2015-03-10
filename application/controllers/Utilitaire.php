<?php
function heureminute($heure) {
    // $heure de la forme hh:mm:ss
    // on enleve les secondes
    $arrayheure = explode(':',$heure);
    $newheure = $arrayheure[0].':'.$arrayheure[1];
    return $newheure; // de la forme hh:mm
}
function stringToTab($p){
    if(strlen($p)>0){
        $tab=explode(",",$p);
        $res=array();
        $i=0;
        foreach($tab as $ligne){
            $res[$i]=intval($ligne);
            $i++;
        }
        return $res;
    }
    else return 0;
}
function tabToString($p){
    if(sizeof($p)>0){
        $res="";
        foreach($p as $ligne){
            $res=$res.$ligne;
        }
        echo($res);
    }
    else echo("Erreur: la taille du tableau a parser est incorrecte");
}
function additionHours($date1, $date2)
{
    $hour = (int) substr($date1, 0, 2) + (int) substr($date2, 0, 2);
    $minutes = (int) substr($date1, 4, -3) + (int) substr($date2, 4, -3);
    $sec = (int) substr($date1, -2) + (int) substr($date2, -2);

    if($hour < 10) $hour = "0".(string) $hour;
    if($minutes < 10) $minutes = "0".(string) $minutes;
    if($sec < 10) $sec = "0".(string) $sec;

    $result = (string) $hour . ":" . (string) $minutes . ":" . (string) $sec;
    return $result;
}
function soustractionHours($date1, $date2)
{
    $
    $result = (string) $hour . ":" . (string) $minutes . ":" . (string) $sec;
    return $result;
}
function add_heures($heure1,$heure2)
{
    $secondes1=heure_to_secondes($heure1);
    $secondes2=heure_to_secondes($heure2);
    $somme=$secondes1+$secondes2;
    //transfo en h:i:s
    $s=$somme % 60; //reste de la division en minutes => secondes
    $m1=($somme-$s) / 60; //minutes totales
    $m=$m1 % 60;//reste de la division en heures => minutes
    $h=($m1-$m) / 60; //heures
    if($s < 10) $s = '0'.$s;
    if($m < 10) $m = '0'.$m;
    if($h < 10) $h = '0'.$h;
    $resultat = $h.":".$m.":".$s;
    return $resultat;
}
function heure_to_secondes($heure)
{
    $array_heure = explode(":",$heure);
    $secondes = 3600*$array_heure[0]+60*$array_heure[1]+$array_heure[2];
    return $secondes;
}

?>