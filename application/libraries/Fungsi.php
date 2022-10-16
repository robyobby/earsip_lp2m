<?php

class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $id_user = $this->ci->session->userdata('kode_user');
        $user_data = $this->ci->user_m->get($id_user)->row();
        return $user_data;
    }

    function PdfGenerator($html, $filename, $paper, $orientation)
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orientation);
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream($filename, array('Attachment' => 0));
    }

    public function surat_masuk()
    {
        $this->ci->load->model('surat_masuk_m');
        return $this->ci->surat_masuk_m->get_sm()->num_rows();
    }

    public function surat_keluar()
    {
        $this->ci->load->model('surat_keluar_m');
        return $this->ci->surat_keluar_m->get_sk()->num_rows();
    }

    public function surat_batal()
    {
        $this->ci->load->model('surat_keluar_m');
        return $this->ci->surat_keluar_m->get_batal()->num_rows();
    }
}
