<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seluruh_dunia extends CI_Controller
{

    public function index()
    {
        $global = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
        $tpositif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), true);
        $tsembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), true);
        $tmeninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
        $lokasi = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);

        $data = array(
            'global' => $global,
            'tpositif' => $tpositif,
            'tsembuh' => $tsembuh,
            'tmeninggal' => $tmeninggal,
            'lokasi' => $lokasi,
        );

        $title['title'] = 'Informasi kasus Coronavirus di seluruh dunia';

        $this->load->view('templates/v_header', $title);
        $this->load->view('v_global', $data);
        $this->load->view('templates/v_footer');
    }
}
