<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phonebook extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Listphone");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list'] = $this->Listphone->getData();
        $this->load->view('main/home', $data);
    }

    public function addNew()
    {
        $phone = $this->Listphone;
        $validation = $this->form_validation;
        $validation->set_rules($phone->rules());

        if ($validation->run())
        {
            $phone->addNewData();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('phonebook/addnew');
        }

        $this->load->view('main/pages/form');
    }
	// public function index()
	// {
	// 	$this->load->view('main/home');
	// }
}
