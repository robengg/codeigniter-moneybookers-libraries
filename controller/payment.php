<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * CodeIgniter Moneybookers (Skrill) libraies
 *
 *  PHP 5.1.6 or newer
 *  author : ASHADUR ROB 
 *  author_url : http://www.robengg.com
 *  packages : Codeigniter
 *  license : GLP
 *  version : 1.0
 */

class Payment extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function payment() {
        //get payment value from another controller or user input post method
        $config ['detail1_text'] = ''; //Text about your services
        $config ['amount'] = $this->input->post('price', true); // get post values
        $this->load->library('skrill', $config);
        $this->skrill->pay();
    }
}
    
