<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Dashboard extends CI_Controller
    {
        function __construct() 
        { 
        parent::__construct(); 
        $this->load->model('Our_chart_model'); 
 
        $this->load->helper('string'); 
        } 

        public function index()
        {
            $this->load->view('dashboard_view');
        }
        
    }
    
?>
