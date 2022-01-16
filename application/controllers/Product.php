<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function index(){
        $this -> load -> model('M_Product');
        $data['product'] = $this -> M_Product -> get_product();       
        $this -> load -> view('v_product',$data);
        //print_r ($data['product']);
    }
}