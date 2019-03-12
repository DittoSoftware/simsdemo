<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class uploader extends CI_Controller
    {
        public function index()
        {
            $this->load->view('upload_view');
        }
        
    }
    
?>