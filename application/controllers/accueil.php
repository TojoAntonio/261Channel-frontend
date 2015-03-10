<?php

class Accueil extends CI_Controller
{
    public function index(){
       redirect('/programmeDuJour/emissionDuJour');
    }
}