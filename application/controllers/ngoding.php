<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('lmcp');
		$this->lmcp->nama_saya();
                echo "<br/>";
                $this->lmcp->nama_kamu("Abdul");
	}
 
}
