<?php
class creerCompte extends CI_Controller
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
        $this->load->view('Client\creerCompte');
    }
}