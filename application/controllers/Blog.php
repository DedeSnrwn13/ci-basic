<?php 

class Blog extends CI_Controller
{
	public function index()
	{
		$this->load->database();

		$query = $this->db->query("SELECT * FROM blog");
		$data['blogs'] = $query->result_array();

		$this->load->view('blog', $data);
	}

	public function listdata()
	{
		$this->load->view('list_data');
	}

	public function detail()
	{
		$this->load->view('detail_blog');
	}
}

?>
