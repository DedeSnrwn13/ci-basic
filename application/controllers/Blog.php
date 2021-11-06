<?php 

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Blog_model');
	}

	public function index()
	{
		$query = $this->Blog_model->getBlogs();
		$data['blogs'] = $query->result_array();

		$this->load->view('blog', $data);
	}

	public function detail($url)
	{
		$query = $this->Blog_model->getSingleBlog('url', $url);
		$data['blog'] = $query->row_array();

		$this->load->view('detail', $data);
	}

	public function add()
	{
		if ($this->input->post()) {
			$data['title'] = $this->input->post('title');
			$data['content'] = $this->input->post('content');
			$data['url'] = $this->input->post('url');

            //konfigurasi upload
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1000;
			$config['max_width'] = 2000;
			$config['max_height'] = 1600;

			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('cover'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data['cover'] = $this->upload->data('file_name');
			}

			$id = $this->Blog_model->insertBlog($data);

			if ($id) {
				echo "Data Berhasil Disimpan";
				redirect('/');
			} else {
				echo "Data Gagal Disimpan";
			}
		}

		$this->load->view('form_add');
	}

	public function edit($id)
	{
		$query = $this->Blog_model->getSingleBlog('id', $id);
		$data['blog'] = $query->row_array();

		if ($this->input->post()) {
			$dataEdit['title'] = $this->input->post('title');
			$dataEdit['content'] = $this->input->post('content');
			$dataEdit['url'] = $this->input->post('url');

			//konfigurasi upload
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1000;
			$config['max_width'] = 2000;
			$config['max_height'] = 1600;

			$this->load->library('upload', $config);
			$this->upload->do_upload('cover');
			
			if (!empty($this->upload->data()['file_name']))
			{
				$dataEdit['cover'] = $this->upload->data()['file_name'];
			}

			$id = $this->Blog_model->updateBlog($id, $dataEdit);

			if ($id) {
				echo "Data Berhasil Diupdate";
			} else {
				echo "Data Gagal Diupdate";
			}
		}

		$this->load->view('form_edit', $data);
	}

	public function delete($id)
	{
		$this->Blog_model->deleteBlog($id);

		redirect('/');
	}
}
