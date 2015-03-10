<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03/02/15
 * Time: 07:45
 */

class programmesPasses extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('input');
        $this->load->model('fonctionsSelectGlobales', 'select');
        $this->load->model('fonctionsCRUD', 'crud');
    }

    //liste des programmes passees
    public function liste(){
        $date = date("Y-m-d");
        $data['liste']=$this->select->getSimpleListWhere('Programme','idprogramme, p_date', 'p_date <', $date);
        //print_r($data['liste']);
        $this->load->view('Client/ProgrammesPasses/listeProgrammesPassees', $data);
    }



    //historique programme
    public function index()
    {
        $date =  date("Y-m-d", mktime(0,0,0,date("m"),date("d")-1,date("Y")));
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
        }
        $this->load->view('Client/ProgrammesPasses/HistoriqueProgrammeHier', $data);
    }
} 