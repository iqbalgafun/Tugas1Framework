<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' => "Iqbal Fauzi Priansyah",
				'nim' => "1541180161",
				'Jurusan' => "Teknik Informatika",
				'no_hp' => "085608877771",
				'Email' => "iqbalgafun@gmail.com",
				'TTL' => "Madiun, 21 Juni 1997",
				'alamat' => "Jln. Bumi Indah blok V-9, Perum Kartoharjo Indah, Kota Madiun"
			);
		$this->load->view('about',$data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */