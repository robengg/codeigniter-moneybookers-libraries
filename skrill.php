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


//skrill class
class Skrill {
    //new array
    var $config = Array();
    //skrill url
    var $production_url = 'https://www.moneybookers.com/app/payment.pl?';

    // function construct 
    public function __construct($value = array()) {
        $this->__initialize($value);

    }

    //function init
    function __initialize($value = array()) {
        $config ['pay_to_email'] = 'email@mail.com';
        $config ['status_url'] = 'email@mail.com';
        $config ['language'] = 'EN';
        $config ['return_url_text'] = 'Return to Domain';
        $config ['logo_url'] = 'http://www.moneybookers.com/images/logos/checkout_logos/checkout_240x80px.gif';
        $config ['return_url'] = '';
        $config ['cancel_url'] = '';
        $config ['detail1_description'] = 'Some Paymant Description';
        
        //$config array to class variable
        if (count($props) > 0) {
            foreach ($props as $key => $val) {
                $config[$key] = $val;
            }
        }
        $this->config = $config;
    }
    //function pay 
    function pay() {
        $vars = http_build_query($this->config);
        //header function built url
           header('LOCATION:' . $this->production_url . $vars);    
    }

}
