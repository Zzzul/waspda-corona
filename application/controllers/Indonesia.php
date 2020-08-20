<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indonesia extends CI_Controller
{

    public function index()
    {

        // Data kumulatif dan harian
        $indo = json_decode(file_get_contents('https://data.covid19.go.id/public/api/update.json'), true);

        // Provinsi 
        $provinsi = json_decode(file_get_contents('https://data.covid19.go.id/public/api/prov.json'), true);

        // rumah sakit rujukan
        $rumah_sakit = json_decode(file_get_contents('https://dekontaminasi.com/api/id/covid19/hospitals'), true);


        $data = array(
            'indo'        => $indo,
            'provinsi'    => $provinsi,
            'rumah_sakit' => $rumah_sakit,
        );

        $title['title'] = 'Informasi kasus Coronavirus di Indonesia';

        $this->load->view('templates/v_header', $title);
        $this->load->view('v_indonesia', $data);
        $this->load->view('templates/v_footer');
    }
}
