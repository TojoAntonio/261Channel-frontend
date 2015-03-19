<?php
class Emission extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Chargement des ressources pour tout le contr�leur
		$this->load->database();

		$this->load->helper('url');
		$this->load->model('fonctionsCRUD', 'crud');
		$this->load->model('fonctionsSelectGlobales', 'select');
	}
    public function rechercher(){
        $word=$this->input->post('searchword');
        if(isset($word)){
            $data=array();
            $i=0;
            $tab=$this->db->select('*')
                ->from('vueemission')
                ->like('E_NOM',$word)

                ->get();
            foreach($tab->result() as $row){
                $data['resultat'][$i]=$row;
                $i++;
            }
            $this->load->view('Client/Recherche/Resultat',$data);
        }
    }
    public  function liker(){
        $tab=array('idEmission'=> $_POST['idemission'],'idUser'=>$_POST['iduser']);
        $res=$this->crud->insertData('like',$tab);
        echo($res);
    }
	public function ajouter(){

        $toinsert = array('idcategorie' => $this->input->post('idcategorie'),'idtype' => $this->input->post('idtype'),'e_nom' => $this->input->post('nom'),'e_duree' => $this->input->post('duree'),'e_zanaka' => $this->input->post('zanaka'),'e_chemin' => $this->input->post('chemin'));
		$this->crud->insertData('Emission',$toinsert);
		
		$this->liste();
	}
	public function liste(){
		$data['liste']=$this->select->query('select idemission,cat_libelle,t_libelle,e_nom,e_duree,e_zanaka,e_chemin from emission,typeemission,categorieage where emission.idcategorie=categorieage.idcategorie and emission.idtype=typeemission.idtype');
		$this->load->view('ListeEmission',$data);
	}

	public function supprimer($idemission=1){
			
		$this->crud->deleteWhere('emission','idemission',$idemission);
		$this->liste();
	}
	public function ajouterParProgramme($idProgramme=1){
		$toinsert=array('idemission'=>(int)$this->getMax('emission', 'idemission'),'idProgramme'=>$idProgramme,'heure_diffusion'=>$this->input->post('heure_diffusion'));
		
		$this->crud->insertData('programme_emission',$toinsert);
		
		$this->listeParProgramme($idProgramme);
	}
	public function supprimerParProgramme($idProgramme=1,$idemission=1){
			
		$this->crud->deleteWhere2('programme_emission','idemission',$idemission,'idProgramme',$idProgramme);
		$this->listeParProgramme($idProgramme);
	}
	
	public function listeParProgramme($idProgramme=1){
		$data['liste']=$this->select->getSimpleListWhere('vueemissionparprogramme', '*', 'idprogramme', $idProgramme);
		$data['idProgramme']=$idProgramme;
        $this->load->view('ListeEmissionParProgramme', $data);
	}

    public function listeHier(){
        $data['liste']=$this->select->getSimpleListWhere('vueemissionprogramme', '*', 'p_date', date('Y-m-d', time() - 3600 * 24));
        $data['idProgramme']=1;

        $this->load->view('ListeEmissionParProgramme', $data);
    }

}