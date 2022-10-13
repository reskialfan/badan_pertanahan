<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$session = $this->session->userdata('status');

		if ($session == '') {
			$vals = [
				'word'          => substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4),
				'img_path'      => './assets/images/captcha/',
				'img_url'       => base_url('assets/images/captcha/'),
				'img_width'     => '150',
				'img_height'    => 40,
				'expiration'    => 7200,
				'word_length'   => 4,
				'font_size'     => 24,
				'img_id'        => 'Imageid',
				'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

				'colors'        => [
					'background' => [255, 255, 255],
					'border'    => [255, 255, 255],
					'text'      => [0, 0, 0],
					'grid'      => [255, 20, 20]
				]
			];

			$captcha = create_captcha($vals);
			// echo $captcha['img_url'];

			$this->session->set_userdata('captcha', $captcha['word']);
			$this->load->view('login', ['captcha' => $captcha['image']]);
		} else {
			if ($this->session->userdata('username') == 'rssm') {
				redirect('Suratdokumen');
			} else {
				redirect('Home');
			}
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');



		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login($username, $password);

			$captchaa    = $this->session->userdata('captcha');
			$post_code  = $this->input->post('captcha');

			if ($post_code && ($post_code == $captchaa)) {

				if ($data == false) {
					$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
					redirect('Auth');
				} else {
					$session = [
						'userdata' => $data,
						'status' => "Loged inxxccvb"
					];
					$this->session->set_userdata($session);
					$this->session->set_userdata('level', $data->level);
					$this->session->set_userdata('kode', $data->id);
					$this->session->set_userdata('username', $data->username);

					redirect('Home');
				}
			} else {
				$this->session->set_flashdata('error_msg', 'Capcha Salah.');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */