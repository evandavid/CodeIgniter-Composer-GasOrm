<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->validate_token_params();
        $this->validate_uri();
        $this->set_json_header();
    }

    // validate token authentication from client
    protected function validate_token_params()
    {
        // TODO
    }

    // validate client access from /api/ route
    protected function validate_uri()
    {
        if($this->uri->segment(1) != 'api') {
            show_404('page');
        }
    }

    // inject json header in response
    protected function set_json_header()
    {
        header('Content-Type: application/json');
    }
}