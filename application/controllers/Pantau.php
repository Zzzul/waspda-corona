<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pantau extends CI_Controller
{

    public function index()
    {

        $indo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
        $provinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
        $pnasional = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
        $rumah_sakit = json_decode(file_get_contents('https://dekontaminasi.com/api/id/covid19/hospitals'), true);


        $data = array(
            'provinsi'    => $provinsi,
            'indo'        => $indo,
            'pnasional'   => $pnasional,
            'rumah_sakit' => $rumah_sakit,
        );

        $title['title'] = 'Informasi kasus Coronavirus di Indonesia';

        $this->load->view('templates/v_header', $title);
        $this->load->view('v_indonesia', $data);
        $this->load->view('templates/v_footer');
    }
}
