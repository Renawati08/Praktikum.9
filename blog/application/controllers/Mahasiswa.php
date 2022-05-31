<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
		$this->load->model('mahasiswa_model', 'mhs1');

		// Menggunakan class model + isi data
		$this->mhs1->id = 1;
		$this->mhs1->nim = "011012";
		$this->mhs1->nama = "Rena";
		$this->mhs1->gender = "P";
		$this->mhs1->ipk = 3.85;

		// Load model + bikin objek 2
		$this->load->model('mahasiswa_model', 'mhs2');

		// Menggunakan class model + isi data
		$this->mhs2->id = 2;
		$this->mhs2->nim = "022021";
		$this->mhs2->nama = "Najib";
		$this->mhs2->gender = "L";
		$this->mhs2->ipk = 3.38;

		//simpan objek kedalam array
		$list_mhs = [$this->mhs1, $this->mhs2];

		//menyiapkan data untuk dikirim ke view
		$data["list_mhs"] = $list_mhs;

		//untuk mengirim data + menampilkan ke view
		$this->load->view('header');
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('footer');
	}
}
