<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Load extends CI_Controller
    {
        public function index()
        {
            $this->load->view('load_view');
        }
        
    }
    
?>