<?php
class Maps_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        function get_provinsi()
    {
        $this->db->order_by("provinsi.order","asc");
        return $this->db->get("provinsi")->result();
    }
}
