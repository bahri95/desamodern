<?php 
    
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Generalmodel extends CI_Model {
        
        function  __construct() {
            // Call the Model constructor
            parent::__construct();
        }

        
        function get_list_menu_kategori() {
            $sql = "SELECT * FROM berita_kategori_m ORDER BY urutan ASC";
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return 0;
            }

        }

      
    }