<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function index()
    {
        $data = [
            'title' => 'Welcome to WebGIS TWI'
        ];

        $this->load->view('landing/index', $data);
    }

    function about()
    {
        $data = [
            'title' => 'About | WebGIS TWI'
        ];

        $this->load->view('landing/about', $data);
    }

    function workflow()
    {
        $data = [
            'title' => 'Workflow | WebGIS TWI'
        ];

        $this->load->view('landing/workflow', $data);
    }

    function analysis()
    {
        $data = [
            'title' => 'analysis | WebGIS TWI'
        ];

        $this->load->view('landing/analysis', $data);
    }
    function us()
    {
        $data = [
            'title' => 'About Us | WebGIS TWI'
        ];

        $this->load->view('landing/aboutus', $data);
    }
}
