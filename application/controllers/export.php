<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Export extends CI_Controller
    {
        public function index()
        {
            $this->load->view('export');
        }
        
    }
    
?>
