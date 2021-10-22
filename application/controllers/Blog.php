<?php 

class Blog extends CI_Controller
{
	public function index($nama, $goldarah, $alamat)
	{
		echo "Selamat Datang $nama <br>";  
		echo "Golongan Darah $goldarah <br>";  
		echo "Anda tinggal di $alamat <br>";  
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
