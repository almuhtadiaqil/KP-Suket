<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_warga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
        $this->load->model("Usermodel");
        $this->load->helper('date');
    }

    public function update_sku_terima($id_surat_sku)
    {
        $where = array(
            'id_surat_sku' => $id_surat_sku
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sku');
        redirect('Surat/SK_usaha');
    }
    public function update_sku_tolak($id_surat_sku)
    {
        $where = array(
            'id_surat_sku' => $id_surat_sku
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sku');
        redirect('Surat/SK_usaha');
    }
    public function update_sk_kelakuanbaik_terima($id_surat_kelakuanbaik)
    {
        $where = array(
            'id_surat_kelakuanbaik' => $id_surat_kelakuanbaik
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kelakuanbaik');
        redirect('Surat/SK_kelakuanbaik');
    }
    public function update_sk_kelakuanbaik_tolak($id_surat_kelakuanbaik)
    {
        $where = array(
            'id_surat_kelakuanbaik' => $id_surat_kelakuanbaik
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_kelakuanbaik');
        redirect('Surat/SK_kelakuanbaik');
    }
    public function update_sk_bedanama_terima($id_surat_bedanama)
    {
        $where = array(
            'id_surat_bedanama' => $id_surat_bedanama
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_bedanama');
        redirect('Surat/SK_bedanama');
    }
    public function update_sk_bedanama_tolak($id_surat_bedanama)
    {
        $where = array(
            'id_surat_bedanama' => $id_surat_bedanama
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_bedanama');
        redirect('Surat/SK_bedanama');
    }
    public function update_sk_belumkerja_terima($id_surat_belumkerja)
    {
        $where = array(
            'id_surat_belumkerja' => $id_surat_belumkerja
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_belumkerja');
        redirect('Surat/SK_belumkerja');
    }
    public function update_sk_belumkerja_tolak($id_surat_belumkerja)
    {
        $where = array(
            'id_surat_belumkerja' => $id_surat_belumkerja
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_belumkerja');
        redirect('Surat/SK_belumkerja');
    }
    public function update_sk_bmr_terima($id_surat_bmr)
    {
        $where = array(
            'id_surat_bmr' => $id_surat_bmr
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_bmr');
        redirect('Surat/SK_bmr');
    }
    public function update_sk_bmr_tolak($id_surat_bmr)
    {
        $where = array(
            'id_surat_bmr' => $id_surat_bmr
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sk_bmr');
        redirect('Surat/SK_bmr');
    }
}
