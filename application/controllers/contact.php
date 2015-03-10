<?php
class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('fonctionsSelectGlobales', 'select');
        $this->load->model('fonctionsCRUD', 'crud');
    }

    public function index()
    {
        $this->load->view('Client/contact');
    }
}