<?php

class Guru extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Guru';
        $data['guru'] = $this->model('Guru_model')->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Guru';
        $data['guru'] = $this->model('Guru_model')->getGuruById($id);
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Guru_model')->tambahDataGuru($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Guru_model')->hapusDataGuru($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/guru');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Kelas_model')->getKelasById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Kelas_model')->editDataKelas($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->model('Kelas_model')->cariDataKelas();
        $this->view('templates/header', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }
}