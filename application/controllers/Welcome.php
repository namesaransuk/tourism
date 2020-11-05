<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct() {
		parent::__construct();
		$this->load->model('train_model','train');
        $this->load->view('bootstrap');
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function show()
	{
		$this->load->view('show');
	}

	public function insert()
	{
		$data1 = array(
			'id_train' => $this->input->post("id_train"),
			'report' => $this->input->post("report")
		);

		$data2 = array(
			'station' => $this->input->post("station1"),
			'timeout' => $this->input->post("timeout1")
		);

		$data3 = array(
			'to' => $this->input->post("to"),
			'out' => $this->input->post("out")
		);

		$data4 = array(
			'station' => $this->input->post("station2"),
			'totime' => $this->input->post("timeout2")
		);

		if ($data1 && $data2 && $data3 && $data4) {
			$this->train->adding($data1, $data2, $data3, $data4);
			echo '<script> alert("สมัครสำเร็จ กรุณาเข้าสู่ระบบ !!") </script>';
			redirect('welcome/show', 'refresh');
			// $this->load->view('login');
		} else {
			echo '<script> alert("เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง !!") </script>';
		}
	}
}
