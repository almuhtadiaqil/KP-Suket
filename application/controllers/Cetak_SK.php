<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_SK extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
    }
    function index($id_surat_sku)
    {
        $where = array('id_surat_sku' => $id_surat_sku);
        $data['sku'] = $this->M_surat_n1_n6->get_data($where, 'sku')->result();
        $this->load->view('surat/cetak_SKU', $data);
    }

    function sk_kelakuanbaik($id_surat_kelakuanbaik)
    {
        $where = array('id_surat_kelakuanbaik' => $id_surat_kelakuanbaik);
        $data['sk_kb'] = $this->M_surat_n1_n6->get_data($where, 'sk_kelakuanbaik')->result();
        $this->load->view('surat/cetak_sk_kelakuanbaik', $data);
    }
    function sk_bedanama($id_surat_bedanama)
    {
        $where = array('id_surat_bedanama' => $id_surat_bedanama);
        $data['sk_bedanama'] = $this->M_surat_n1_n6->get_data($where, 'sk_bedanama')->result();
        $this->load->view('surat/cetak_sk_bedanama', $data);
    }
    function sk_belumkerja($id_surat_belumkerja)
    {
        $where = array('id_surat_belumkerja' => $id_surat_belumkerja);
        $data['sk_belumkerja'] = $this->M_surat_n1_n6->get_data($where, 'sk_belumkerja')->result();
        $this->load->view('surat/cetak_sk_belumkerja', $data);
    }
    function sk_bmr($id_surat_bmr)
    {
        $where = array('id_surat_bmr' => $id_surat_bmr);
        $data['sk_bmr'] = $this->M_surat_n1_n6->get_data($where, 'sk_bmr')->result();
        $this->load->view('surat/cetak_sk_bmr', $data);
    }
}
