<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
		$this->load->model('dosen_model', 'dsn1');

		// Menggunakan class model + isi data
		$this->dsn1->id = 1;
		$this->dsn1->nama = "Rena";
		$this->dsn1->nidn = "01101";
		$this->dsn1->gender = "P";
		$this->dsn1->tmp_lahir = "Tangerang";
        $this->dsn1->tgl_lahir = "22 Mei 2001";
        $this->dsn1->pendidikan = "Magister Komputer";
        $this->dsn1->ipk = 3.99;


		// Load model + bikin objek 2
		$this->load->model('dosen_model', 'dsn2');

		// Menggunakan class model + isi data
		$this->dsn2->id = 2;
		$this->dsn2->nama = "Lana";
		$this->dsn2->nidn = "02202";
		$this->dsn2->gender = "L";
		$this->dsn2->tmp_lahir = "Bandung";
        $this->dsn2->tgl_lahir = "5 April 1995";
        $this->dsn2->pendidikan = "Magister Sains";
        $this->dsn2->ipk = 3.89;

        // Load model + bikin objek 2
		$this->load->model('dosen_model', 'dsn3');

		// Menggunakan class model + isi data
		$this->dsn3->id = 3;
		$this->dsn3->nama = "Joko";
		$this->dsn3->nidn = "03303";
		$this->dsn3->gender = "L";
		$this->dsn3->tmp_lahir = "Bali";
        $this->dsn3->tgl_lahir = "5 April 1955";
        $this->dsn3->pendidikan = "Magister Manajemen";
        $this->dsn3->ipk = 3.88;
		//simpan objek kedalam array
		$list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

		//menyiapkan data untuk dikirim ke view
		$data["list_dsn"] = $list_dsn;

		//untuk mengirim data + menampilkan ke view
		// $this->load->view('header');
		// $this->load->view('dosen/index', $data);
		// $this->load->view('footer');
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/index', $data);
		$this->load->view('layout/footer');
	}

	public function create(){
		$data["judul"] = "Form Kelola Dosen";
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/create', $data);
		$this->load->view('layout/footer');
	}

	public function save(){
		// Load model + buat objek
		$this->load->model('dosen_model', 'dsn');

		$this->dsn->nidn = $this->input->post('nidn');
		$this->dsn->nama = $this->input->post('nama');
		$this->dsn->gender = $this->input->post('gender');
		$this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
		$this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
		$this->dsn->pendidikan = $this->input->post('pendidikan');

		$data['dsn'] = $this->dsn;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/view', $data);
		$this->load->view('layout/footer');
	}

	
}
