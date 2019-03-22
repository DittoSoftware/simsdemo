<?php
    class Signin extends CI_Controller
    {	
	function __construct(){
	    parent::__construct();
            $this->load->database();
            ob_start(); 
	}

        public function index()
        {
            $this->load->helper('url'); 
            $this->load->view('login_view');
        }
	public function logout(){
            $this->load->driver('cache'); 
            $this->session->sess_destroy();
            $this->cache->clean(); 
            redirect('signin'); 
            ob_clean();
        }
    }
    
?>
