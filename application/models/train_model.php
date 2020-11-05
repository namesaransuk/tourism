<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Train_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('train_model', 'train');
    }

    public function adding($data1,$data2,$data3,$data4)
    {
        $this->db->insert('procession',$data1);
        $this->db->insert('origin', $data2);
        $this->db->insert('huayrach', $data3);
        $this->db->insert('destination', $data4);
    }

}
