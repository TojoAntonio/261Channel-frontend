<?php
class Programme extends CI_Controller
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

    //ajout de programme à une date
	public function ajouter(){
        //un programme ne peut avoir la meme date qu'un autre
        if($this->select->getQuantity2('programme', 'p_date', $this->input->post('dateProgramme')) == 0)
        {
            $toinsert = array('p_date' => $this->input->post('dateProgramme'));
            $this->crud->insertData('Programme',$toinsert);
        }
        else
        {
            echo "<strong style='color: red'>un programme est deja inscrit a la date du ".$this->input->post('dateProgramme')."</strong><br/ >";
        }
        $this->liste();
	}

    //liste des programmes
	public function liste(){
	    $data['liste']=$this->select->getSimpleList('Programme','idprogramme,p_date');
		$this->load->view('Administrateur/Programmes/ListeProgramme', $data);
	}

}