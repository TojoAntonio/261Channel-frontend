<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if(! function_exists('heureminute')){
    function heureminute($heure) {
        // $heure de la forme hh:mm:ss
        // on enleve les secondes
        $arrayheure = explode(':',$heure);
        $newheure = $arrayheure[0].':'.$arrayheure[1];
        return $newheure; // de la forme hh:mm
    }
}
if(! function_exists('add_heures')){
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
}
if(! function_exists('heure_to_secondes')){
    function heure_to_secondes($heure)
    {
        $array_heure = explode(":",$heure);
        $secondes = 3600*$array_heure[0]+60*$array_heure[1]+$array_heure[2];
        return $secondes;
    }
}
if(! function_exists('stringToTab')){
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
        else echo("Erreur: la taille de la chaine a parser est incorrecte");
    }
}

if(! function_exists('tabToString')){
    function tabToString($p){
        if(count($p)>0){
            $res="";
            for($i=0;$i<count($p);$i++){
                $res.=$p[$i];
                if($i!=(count($p)-1)) $res.=",";
            }
            return $res;
        }
        else echo("Erreur: la taille du tableau a parser est incorrecte");
    }
}

if(! function_exists('erreur')){
    function erreur($mes){
        echo "
        <html>
            <head>
                <title>".$mes."</title>
            </head>
            <body>
                <h2>".$mes."</h2>
                <a href='javascript:history.go(-1)'>Retour</a>
            </body>
        </html>
        ";
    }
}


if(! function_exists('test_code')){
    function test_code($mes){
        echo '
        <html>
            <head>
                <title>Test code</title>
            </head>
            <body>
                <h2>Test code</h2>
                <div>'.htmlentities($mes).'</div><br/>
                <a href="javascript:history.go(-1)">Retour</a>
            </body>
        </html>
        ';
    }
}