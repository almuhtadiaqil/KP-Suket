<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("M_surat_n1_n6");
        $this->load->model('Usermodel');
    }
    function SK_usaha()
    {

        $data = [
            'title' => 'Surat Keterangan Usaha',
            'surat_sku' => $this->M_surat_n1_n6->get('sku')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_usaha', $data);
    }
    function SK_kelakuanbaik()
    {

        $data = [
            'title' => 'Surat Keterangan Kelakuan Baik',
            'sk_kb' => $this->M_surat_n1_n6->get('sk_kelakuanbaik')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_kelakuanbaik', $data);
    }
    function SK_bedanama()
    {

        $data = [
            'title' => 'Surat Keterangan Kelakuan Baik',
            'sk_bedanama' => $this->M_surat_n1_n6->get('sk_bedanama')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_bedanama', $data);
    }
    function SK_belumkerja()
    {

        $data = [
            'title' => 'Surat Keterangan Kelakuan Baik',
            'sk_belumkerja' => $this->M_surat_n1_n6->get('sk_belumkerja')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_belumbekerja', $data);
    }
    function SK_bmr()
    {

        $data = [
            'title' => 'Surat Keterangan Kelakuan Baik',
            'sk_bmr' => $this->M_surat_n1_n6->get('sk_bmr')->result_array(),
        ];
        $this->template->load('administrator/template', 'administrator/mod_layanan/sk_bmr', $data);
    }
}
