<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
		$this->load->model('matakuliah_model', 'dsn1');

		// Menggunakan class model + isi data
		$this->dsn1->id = 1;
		$this->dsn1->nama = "Rena";
		$this->dsn1->sks = 4;
		$this->dsn1->kode = 011;
		

		// Load model + bikin objek 2
		$this->load->model('matakuliah_model', 'dsn2');

		// Menggunakan class model + isi data
		$this->dsn2->id = 2;
		$this->dsn2->nama = "Lana";
		$this->dsn2->sks = 3;
		$this->dsn2->kode = 012;
		
        // Load model + bikin objek 2
		$this->load->model('matakuliah_model', 'dsn3');

		// Menggunakan class model + isi data
		$this->dsn3->id = 3;
		$this->dsn3->nama = "Joko";
		$this->dsn3->sks = 2;
		$this->dsn3->kode = 013;
		
		//simpan objek kedalam array
		$list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

		//menyiapkan data untuk dikirim ke view
		$data["list_dsn"] = $list_dsn;

		//untuk mengirim data + menampilkan ke view
		$this->load->view('header');
		$this->load->view('matakuliah/index', $data);
		$this->load->view('footer');
	}
}
