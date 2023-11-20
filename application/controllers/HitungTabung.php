<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HitungTabung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('tabung');
    }

    function index()
    {
        $this->tabung->hasilTabung('10', '2');
        echo "<br/>";
    }
}
?>