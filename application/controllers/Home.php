<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = array(
                        'title' => 'Kolaka Timur'
                     );

        // var_dump($data);
        // die;

        $this->template->load('front/template','front/content', $data);
    }
}
