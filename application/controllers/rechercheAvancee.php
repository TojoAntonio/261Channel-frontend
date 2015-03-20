<?php
class RechercheAvancee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $this->load->view('Client/Recherche/rechercheAvancee');
        //echo("test");
    }

    public function resultat(){
        $word=$this->input->post('searchword');
        $date=$this->input->post('date');
        if(isset($word)){
            if(isset($date)){
                $data=array();
                $i=0;
                $tab=$this->db->select('*')
                                            ->from('vueemission')
                                            ->like('E_NOM',$word)
                                            ->like('p_date',$date)
                                            ->where('SUPPRIME',0)
                                            ->get();
                foreach($tab->result() as $row){
                    $data['resultat'][$i]=$row;
                    $i++;
                }
               $this->load->view('Client/Recherche/Resultat',$data);
            }
            else{
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
        }elseif(isset($date)){
            $data=array();
            $i=0;
            $tab=$this->db->select('*')
                ->from('vueemission')
                ->like('p_date',$date)
                ->get();
            foreach($tab->result() as $row){
                $data['resultat'][$i]=$row;
                $i++;
            }
            $this->load->view('Client/Recherche/Resultat',$data);
        }
        //echo $this->input->post('searchword').$this->input->post('date');
        //$this->load->view('Client/Recherche/Resultat');
    }
}