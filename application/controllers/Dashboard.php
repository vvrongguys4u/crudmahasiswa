<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mahasiswa.php
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller MAHASISWA.PHP
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['judul'] = "Dashboard";
    $this->load->view("layout/header");
    $this->load->view("dashboard/vw_dashboard", $data);
    $this->load->view("layout/footer");
    
  }
}