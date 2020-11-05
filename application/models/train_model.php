<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Train_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('train_model', 'train');
    }

    public function showTrain()
    {
        $this->db->join('origin', 'origin.id = procession.id');
        $this->db->join('huayrach', 'huayrach.id = procession.id');
        $this->db->join('destination', 'destination.id = procession.id');
        // $this->db->where('procession.report', 'รถธรรมดา'); แสดงแค่รถธรรมดา
        $this->db->order_by('origin.timeout', 'ASC');
        $result = $this->db->get('procession');
        return $result;
    }

    public function adding($data1,$data2,$data3,$data4)
    {
        $this->db->insert('procession',$data1);
        $this->db->insert('origin', $data2);
        $this->db->insert('huayrach', $data3);
        $this->db->insert('destination', $data4);
    }

}
