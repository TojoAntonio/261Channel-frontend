<?php
class UserController extends CI_Controller
{

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

    public function index()
    {
        $data['calendar'] = true;
        $this->load->view('Client/creerCompte', $data);
    }

    public function checkfield($str){
        if ($str == ''){
            $this->form_validation->set_message('checkfield', ' * %s requis');
            return false;
        }else if(strlen($str)<2){
            $this->form_validation->set_message('checkfield', ' * %s trop court, minimum 2');
            return false;
        }
        return true;
    }

    public function addUser()
    {
        /*echo $this->input->post('nom');
        echo '<br />';
        echo $this->input->post('pseudo');
        echo '<br />';
        echo $this->input->post('password1');//comparer
        echo '<br />';
        echo $this->input->post('password2');
        echo '<br />';
        echo $this->input->post('email1');//comparer
        echo '<br />';
        echo $this->input->post('email2');
        echo '<br />';
        echo $this->input->post('addresse1');
        echo '<br />';
        echo $this->input->post('addresse2');
        echo '<br />';
        echo $this->input->post('ville');
        echo '<br />';
        echo $this->input->post('region');
        echo '<br />';
        echo $this->input->post('pays');
        echo '<br />';
        echo $this->input->post('codepostal');
        echo '<br />';
        echo $this->input->post('phone');
        echo '<br />';
        echo $this->input->post('website');
        echo '<br />';
        echo $this->input->post('datenaissance');
        echo '<br />';
        echo $this->input->post('codeabonnement');
        echo '<br />';
        */

        $this->form_validation->set_rules('nom', 'Nom', 'trim|xss_clean|callback_checkfield');
        //$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|callback_checkfield|valid_email');
        //$this->form_validation->set_message('valid_email', ' * Email non valide');

        if($this->form_validation->run()){
            $test=$this->input->post('nom');
        }

        /*echo 'sasa';
        if($this->input->post('codeabonnement') != null)
        {
            echo 'sasa';
            if(($this->input->post('password1') == $this->input->post('password2')) && ($this->input->post('email1') == $this->input->post('email2')))
            {
                echo 'sasa';
                //verifier l'existance du compte
                if($this->select->getQuantity('user', array('u_email'=> $this->input->post('email1'), 'u_pseudo' => $this->input->post('pseudo'), 'u_mdp'=> $this->input->post('password1'))) == 0)
                {
                    echo 'sasa1';
                    //verifier le code d'abonnement
                    if($this->select->getQuantity('abonnement', array('a_code' => $this->input->post('codeabonnement'), 'a_used' => 0)) == 1 )
                    {
                        echo 'sasa2';
                        //select idabonnement et inserer dans user
                        $idabonnement = $this->select->getElement('abonnement', 'idabonnement', 'a_code', $this->input->post('codeabonnement'))[0]->idabonnement;
                        print_r($this->select->getMax('user', 'iduser'));
                        //inserer l'utilisateur
                        $userdata = array('iduser' => (int) $this->select->getMax('user', 'iduser') + 1, 'u_nom' => $this->input->post('nom'), 'u_mdp' =>$this->input->post('password1'), 'u_pseudo' =>$this->input->post('pseudo'), 'u_email' => $this->input->post('email1'), 'u_pays' =>$this->input->post('pays'), 'u_ville' =>$this->input->post('ville'), 'u_region' =>$this->input->post('region'), 'u_adresse' =>$this->input->post('addresse1'), 'u_tel' =>$this->input->post('phone'), 'u_naissance' =>$this->input->post('datenaissance'), 'u_site' => $this->input->post('website'), 'idabonnement' => $idabonnement);
                        $this->crud->insertData('user', $userdata);
                        echo $idabonnement;
                        $this->crud->updateData('abonnement', array('a_used' => 1), 'idabonnement', $idabonnement);
                        $user = $this->select->getElement('user', 'iduser, u_pseudo', 'u_pseudo', $this->input->post('pseudo'))[0];
                        $this->session->set_userdata('userinfo', $user);
                        redirect('programmeDuJour/emissionsDuJour');
                    }
                }
            }
            else
            {
                //existance de mail et mdp et pseudo similaires
                $this->load->view('Client/erreur/inscriptionerreur');
            }
        }*/
    }

    //connexion
    public function connect()
    {
        $login=$this->input->post('user');
        $code=$this->input->post('password');
        if(isset($login) && isset($code)){

            //Verification login et code abonnement
                                                                                                                            // $nbLigne = $this->db->select(SELECT COUNT(U_PSEUDO='wawa') AS total, IDABONNEMENT FROM user );
                    $reference='U_PSEUDO';
                    $nbligne=$this->select->getQuantity('user',$reference,$login);
                    if($nbligne!=0){
                        $user=$this->select->getElement('user','*',$reference,$login);
                        //Ny pseudo tokony atao email amzay tonga d unique
                        $idabonnement=$user[0]->IDABONNEMENT;
                        $nbligne2=$this->select->getQuantity('abonnement','A_CODE',$code);
                        if($nbligne2!=0){
                            $abon=$this->select->getElement('abonnement','*','A_CODE',$code);
                            if(isset($abon)){
                                if($abon[0]->IDABONNEMENT==$idabonnement){
                                    $this->session->set_userdata('user',$user);
                                    $this->session->set_userdata('abonnement',$abon);
                                    echo("ok");
                                }else echo("erreur2");
                            }else echo("erreur2");
                        }else echo("erreur2");
                    }
                    else echo("erreur2");
                                                                                                                        //echo json_encode('sasa');
                                                                                                                        /*if($this->input->post('email') != '' && $this->input->post('password')  != '')
                                                                                                                        {
                                                                                                                            //echo $this->input->post('email');
                                                                                                                            //echo '<br />';
                                                                                                                            //echo $this->input->post('password');
                                                                                                                            //echo '<br />';

                                                                                                                            if($this->select->getQuantity('user', array('u_email'=> $this->input->post('email'), 'u_mdp' => $this->input->post('password'))) == 1)
                                                                                                                            {
                                                                                                                                $idabonnement = $this->select->getElement('user', 'idabonnement', 'u_email', $this->input->post('email'));
                                                                                                                                $user = $this->select->getElement2('user', 'iduser, u_pseudo', array('u_email' => $this->input->post('email'), 'u_mdp' => $this->input->post('password')))[0];
                                                                                                                                $this->session->set_userdata('userinfo', $user);
                                                                                                                                redirect('programmeDuJour/emissionsDuJour');
                                                                                                                            }
                                                                                                                            else
                                                                                                                            {
                                                                                                                                $this->load->view('Client/erreur/connectionerreur');
                                                                                                                            }
                                                                                                                        }
                                                                                                                        else
                                                                                                                        {
                                                                                                                            $this->load->view('Client/erreur/connectionerreur');
                                                                                                                        }*/
        }
                    //Si les champs sont vide
        else echo("erreur1");

    }

    //déconnexion
    public function disconnect()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('abonnement');

        redirect( base_url());
    }
}