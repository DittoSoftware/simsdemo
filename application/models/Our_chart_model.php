<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Our_chart_model extends CI_Model 
{ 
    private $performance = 'tbl_name';
    function __construct() 
    { 
        parent::__construct(); 
    } 
   
    function get_all_data() 
    { 

        $query = $this->db->get($this->$performance);
        $results['chart_data'] = $query->result();
        $this->db->select_min('');
        $this->db->limit(1);
        $query = $this->db->get($this->$performance);
        $results['min_year'] = $query->row()->performance_year;
        $this->db->select_max('');
        $this->db->limit(1);
        $query = $this->db->get($this->performance);
        $results['max_year'] = $query->row()->performance_year;
        return $results; 
    } 
}