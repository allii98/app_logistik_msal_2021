<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index()
    {
        $data = [
            'tittle'          => 'Data Invoice'

        ];
        $this->template->load('template', 'v_product', $data);
    }
}

/* End of file Invoice.php */
