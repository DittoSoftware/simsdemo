<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Filemanager extends CI_Controller
    {
        public function index()
        {
            $this->load->view('file_view2');
        }
        
    }
    
?>
