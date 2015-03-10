<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 01/02/15
 * Time: 16:23
 */

class ProgrammeDuJour extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('fonctionsSelectGlobales', 'select');
        $this->load->model('fonctionsCRUD', 'crud');
    }

    public  function lire($donnee,$liste){
        //$chaine=str_replace('%',' ',$liste); echo($chaine."<br>");
       $tab=explode("___",$liste);

        if(isset($donnee)&& isset($liste)){
            $data=array();
            $data['donnee']=$donnee;
            $data['liste']=$tab;
            $this->load->view('Client/programmeDuJour/lecteur.php',$data);
        }

    }
    //test
    public function index()
    {
        $this->load->view('Client/programmeDuJour/lecteurtest');

    }

    public function lectureendirect(){


        if($this->input->post('dateformated') != null && $this->input->post('timeformated') != null)
        {
            echo $this->input->post('dateformated') . '<br />' . $this->input->post('timeformated') . '<br />';

            /**récuperer la video de l'emission en cours**/
            $date = date("Y-m-d");

            //programme
            $idProgramme = $this->select->getElement('programme', 'idprogramme', 'p_date', $this->input->post('dateformated'))[0]->idprogramme;
            echo $idProgramme . '<br />';
            if($idProgramme != null)
            {
                //emission
                $emissionEnCours = $this->select->getSimpleListWhereArrayOrderBy('vueemission', 'e_zanaka, heure_diffusion', array('idprogramme' => $idProgramme, 'heure_diffusion <' => $this->input->post('timeformated')), 'heure_diffusion', 'DESC' )[0];

                if($emissionEnCours != null)
                {
                    if($emissionEnCours->e_zanaka != null)
                    {
                        $emissionVideos = stringToTab($emissionEnCours->e_zanaka);

                        //Horaire de fin de l'émission
                        $videoTest = $this->select->getElement('emission', 'e_duree', 'idemission', $emissionVideos[0])[0];
                        $datehorairefinprogramme = add_heures($videoTest->e_duree, $emissionEnCours->heure_diffusion);
                        if(count($emissionVideos) > 1)
                        {
                            for($i = 1; $i < count($emissionVideos); $i += 1)
                            {
                                $videoTemp = $this->select->getElement('emission', 'e_duree', 'idemission', $emissionVideos[$i])[0];
                                $datehorairefinprogramme = add_heures($videoTemp->e_duree, $datehorairefinprogramme);
                            }
                        }

                        echo 'finemission : ' . $datehorairefinprogramme;
                        echo '<br />';

                        echo 'Exemple : ' . '<br />';
                        echo 'emissionvideo[0] : ' . $emissionVideos[0] . '<br />';

                        $dureevideo1 = $this->select->getElement('emission', 'e_duree', 'idemission', $emissionVideos[0])[0]->e_duree;
                        echo 'dureeevideo1 : ' . $dureevideo1 . '<br />';

                        $heurefinvideo1 = add_heures($dureevideo1, $emissionEnCours->heure_diffusion);
                        echo 'heurefinvideo1 : ' . $heurefinvideo1 . '<br />';

                        //video
                        $datehoraireactuel = new DateTime($date . ' ' . $this->input->post('timeformated'));
                        echo 'datehoraireactuel : ';
                        print_r($datehoraireactuel);
                        echo '<br />';

                        $datehorairevideo2 = new DateTime($date . ' ' . $heurefinvideo1);
                        echo 'datehorairevideotemp : ';
                        print_r($datehorairevideo2);
                        echo '<br />';

                        $diffmin = $datehoraireactuel->diff($datehorairevideo2);
                        echo 'differenceentreles2horaires : ';
                        print_r($diffmin);
                        echo '<br />';
                        print_r($diffmin->h . ':' . $diffmin->i . ':' . $diffmin->s);
                        echo '<br />';
                        print_r(strtotime($datehoraireactuel->date));
                        echo '<br />';
                        print_r(strtotime($datehorairevideo2->date));
                        echo '<br />';
                        print_r(strtotime($datehoraireactuel->date)-strtotime($emissionEnCours->heure_diffusion));
                        echo '<br />';

                        $datehorairefinprogramme = new DateTime($date . ' ' . $datehorairefinprogramme);
                        echo 'horairefinemission : ';
                        print_r($datehorairefinprogramme);
                        echo '<br />';
                        echo '<br />';

                        $finprogramme = strtotime($datehorairefinprogramme->date);
                        $horaireactuel = strtotime($datehoraireactuel->date);

                        //diff min est la duree entre maintenant et la video en cours (le zanaka id = 0 ici), elle permet de déterminer où reprendre la vidéo
                        $diffmin = strtotime($datehoraireactuel->date)-strtotime($emissionEnCours->heure_diffusion);
                        $heurefinvideotemp = null;
                        $videoEnCours = null;

                        for($i = 0; $i < count($emissionVideos); $i += 1)
                        {
                            $dureevideotemp = $this->select->getElement('emission', 'e_duree', 'idemission', $emissionVideos[$i])[0]->e_duree;
                            if($heurefinvideotemp == null)
                            {
                                $heurefinvideotemp = $emissionEnCours->heure_diffusion;
                            }
                            else $heurefinvideotemp = add_heures($heurefinvideotemp, $dureevideotemp);

                            $datehorairevideotemp = new DateTime($date . ' ' . $heurefinvideotemp);
                            echo 'horairevideo : ';
                            print_r($datehorairevideotemp);
                            echo '<br />';

                            $difftemp = strtotime($datehoraireactuel->date)-strtotime($datehorairevideotemp->date);
                            echo 'difftemp : ';
                            print_r($difftemp);
                            echo '<br />';
                            //si l'horaire de la fin du programme n'est pas encore passé
                            if($diffmin >= $difftemp && $difftemp > 0 && $horaireactuel < $finprogramme)
                            {
                                $diffmin = $difftemp;
                                $videoEnCours = $this->select->getElement('emission', 'idemission, e_chemin, e_nom, e_duree', 'idemission', $emissionVideos[$i])[0];
                                print_r($videoEnCours);
                                echo '<br />WAWA : ';
                                echo $diffmin;
                                echo '<br />';
                            }
                        }
                    }
                    else if($emissionEnCours->e_zanaka == null)
                    {
                        echo "sasa";
                        $datehoraireactuel = new DateTime($date . ' ' . $this->input->post('timeformated'));
                        $datehorairefinprogramme = add_heures($datehoraireactuel->date, $emissionEnCours->e_duree);
                        $videoEnCours = $emissionEnCours;
                    }

                    if($videoEnCours != null)
                    {
                        $data['horairedebut'] = $diffmin;
                        $data['videoencours'] = $videoEnCours;
                        echo 'DOBERA : ';
                        print_r($data['videoencours']->e_chemin);
                        echo '<br />diffmin ok : ' . $data['horairedebut'];
                    }
                    else
                    {
                        $data['horairedebut'] = null;
                        $data['videoencours'] = null;
                    }
                    $this->load->view('Client/ProgrammeDuJour/lecteur2', $data);
                }
            }

        }


        /**envoi vers lecteur**/
        /*$tab=explode("___",$liste);
        print_r($tab);
        if(isset($donnee)&& isset($liste)){
            $data=array();
            $data['donnee']=$donnee;
            $data['liste']=$tab;
            $data['horairedebut'] = 10;
            $data['horairefin'] = null;
            $this->load->view('Client/programmeDuJour/lecteur2.php',$data);
        }*/
    }

    //Fonction reprendre le programme actuel
    public function reprendreprogrammeactuel()
    {
        if($this->input->post('dateformated') != null && $this->input->post('timeformated') != null)
        {
            //récuperer la video de l'emission en cours
            //$date = date("Y-m-d");
            //print_r($this->input->post('dateformated'));
            $idProgramme = $this->select->getElement('programme', 'idprogramme', 'p_date', $this->input->post('dateformated'))[0]->idprogramme;
            //echo json_encode($idProgramme);
            if($idProgramme != null)
            {
                $emissionEnCours = $this->select->getSimpleListWhereArrayOrderBy('vueemission', 'e_zanaka, heure_diffusion', array('idprogramme' => $idProgramme, 'heure_diffusion <' => $this->input->post('timeformated')), 'heure_diffusion', 'DESC' )[0];
                //echo json_encode($emissionEnCours->e_zanaka);
                //echo json_encode(date('Y-m-d', strtotime($this->input->post('dateformated'))));

                if($emissionEnCours != null)
                {
                    require('Utilitaire.php');
                    $emissionVideos = stringToTab($emissionEnCours->e_zanaka);
                    //echo json_encode($emissionVideos[0]);

                    $heurediffusionvideo2 = $this->select->getElement('emission', 'e_duree', 'idemission', $emissionVideos[0])[0]->e_duree;
                    //echo json_encode($heurediffusionvideo2);

                    $diffmin = date('H:i:s', strtotime($this->input->post('dateformated')));
                    echo json_encode($diffmin);

                    /*$videoEnCours = null;
                    for($i = 0; $i < count($emissionVideos); $i += 1)
                    {
                        $datediff = strtotime($this->input->post('dateformated')) -  strtotime(add_heures($this->select->getElement('emission', 'e_duree', 'idemission', $emissionVideos[$i])[0]->e_duree, $emissionEnCours->heure_diffusion));
                        if($datediff < $diffmin )
                        {
                            $diffmin = $datediff;
                            $videoEnCours = ;
                        }
                    }*/
                }
            }


            //test
            //$this->session->set_userdata('datatest', $this->input->post('dateandtime'));

            //valeur de retour
            //echo json_encode($this->input->post('dateformated'));
        }
    }

    //Emissions du jour
    public function emissionsDuJour(){
        $date = date("Y-m-d");

        $data['pardefaut']=$this->select->getSimpleList('vueemissionpardefaut','*');
        $data['populaire']=$this->select->getSimpleListOrderBy('emissionlike', '*', 'nb_like', 'DESC');
        $data['suggestion'] = $this->db->order_by('heure_diffusion', 'ASC')->get_where('vueemission', array('E_SUGGESTION' => 1, 'p_date' => $date));
        //echo $date.'<br/ >';
        if($this->select->getElement('programme', 'idprogramme', 'p_date', $date) != null)
        {
            $data['info'] = null;
            $idProgramme = $this->select->getElement('programme', 'idprogramme', 'p_date', $date)[0]->idprogramme;
            //echo $idProgramme;
            $data['liste']=$this->select->getSimpleListWhereOrderBy('vueemission', 'idemission,cat_libelle, t_libelle, e_nom,e_chemin, e_duree, e_picture, heure_diffusion, e_zanaka, e_description', 'idprogramme', $idProgramme, 'heure_diffusion', 'ASC');


            $data['zanaka']=array();

            for($i=0;$i<count($data['liste']);$i++){
                //echo($data['liste'][$i]->e_zanaka);
                //echo("<br>");
                $za=$data['liste'][$i]->e_zanaka;
                if(strlen($za)!=0){
                    $tab=stringToTab($za);
                    if($tab!=0){
                        for($j=0;$j<count($tab);$j++){
                            $data['zanaka'][$i][$j]=$this->select->getSimpleListWhere('emission', '*', 'idemission', $tab[$j]);
                        }
                    }else $data['zanaka'][$i][0]=0;
                }else $data['zanaka'][$i][0]=0;
            }
            //echo($data['zanaka'][1][0][0]->E_NOM);
            //$data['idProgramme']=$idProgramme;
        }
        else
        {
            $data['info'] = "PAS DE PROGRAMME POUR AUJOURD'HUI";
        }

        $this->load->view('Client/index', $data);
    }

    public function emissions(){
        $date =  date("2015-02-18");
       //echo $date.'<br/ >';
        if($this->select->getElement('programme', 'idprogramme', 'p_date', $date) == null)
        {
            $data['liste'] = null;
        }
        else
        {
            $idProgramme = $this->select->getElement('programme', 'idprogramme', 'p_date', $date)[0]->idprogramme;
            //echo $idProgramme;
            $data['liste'] = $this->select->getSimpleListWhereOrderBy('vueemission', 'cat_libelle, t_libelle, e_nom, e_duree, heure_diffusion, e_picture, e_description, e_zanaka, e_chemin', 'idprogramme', $idProgramme, 'heure_diffusion', 'ASC');
            //print_r($data['liste']);
            $data['zanaka'] = array();
            //echo(count($data['liste']));
            for($i = 0; $i < count($data['liste']); $i += 1)
            {
                if($data['liste'][$i]->e_zanaka != null)
                {
                    $tab = stringToTab($data['liste'][$i]->e_zanaka);
                    $data['zanaka'][$i] = '';
                    for($i2 = 0; $i2 < count($tab); $i2 += 1)
                    {
                        $data['zanaka'][$i] .= $this->select->getElement('emission', 'e_chemin', 'idemission', $tab[$i2])[0]->e_chemin . '___';
                    }
                    //print_r($data['zanaka']);
                }
                else
                {
                    $data['zanaka'][$i] = $data['liste'][$i]->e_chemin;
                }
            }

            //print_r($data['liste']);
            //$data['idProgramme']=$idProgramme;
        }
        $this->load->view('Client/ProgrammeDuJour/HistoriqueProgrammeO8', $data);
    }
    public  function lire2($nomEmisssion){
        $chaine=str_replace('%20',' ',$nomEmisssion);
        if($this->select->getElement('emission', 'idemission', 'e_nom', $chaine)!=null){
            $emission=$this->select->getElement('emission', '*', 'e_nom', $chaine);
            // echo($emission[0]->E_NOM);
            if(strlen($emission[0]->E_ZANAKA)!=0){

                $tab=stringToTab($emission[0]->E_ZANAKA);
                $listechemin="";
                foreach($tab as $ligne){
                    $chemin=$this->select->getElement('emission', 'e_chemin', 'idemission', $ligne);
                    $listechemin.=$chemin[0]->e_chemin."___";
                }
                $this->lire($chaine,$listechemin);
            }
            else $this->lire($chaine,$emission[0]->E_CHEMIN);
            //$ide=$this->select->getElement('emission', 'idemission', 'e_nom', $nomEmisssion);
        }
        else emissionsDuJour();


    }
}
?>