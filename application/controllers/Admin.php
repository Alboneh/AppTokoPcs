<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        $this -> load -> model('M_Admin');
        $data['admin'] = $this -> M_Admin -> getAdmin();
        $this -> load -> view('v_admin',$data);
    }
}