<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Merge extends CI_Controller
    {
       
        public function index()
        {
            $this->load->helper('url'); 
            $this->load->view('merge_view');
        }
        
    }
    
?>