<?php 
 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Our_Chart extends CI_Controller 
 
    { 
    function __construct() 
        { 
        parent::__construct(); 
        $this->load->model('Our_chart_model'); 
 
        // $this->load->library('form_validation'); 
 
        $this->load->helper('string'); 
        } 
 
    public 
 
    function index() 
        { 
        $this->load->view('main_view'); 
        } 
 
    public 
 
    function getdata() 
        { 
        $data = $this->Our_chart_model->get_all_data(); 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Grade Level", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->fruits_name", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->quantity, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
    }