<?php 

class Blog extends CI_Controller
{
	public function index()
	{
		$data['blogs'] = [
            [
				'title' => 'Artikel Pertama',
            	'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
			],
            [
				'title' => 'Artikel Kedua',
            	'content' => '<p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>'
			],
            [
				'title' => 'Artikel Ketiga',
            	'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.</p>'
			]
        ];

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
