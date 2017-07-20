<?php
Class MY_Controller extends CI_Controller
{
    var $data = array();
    function __construct()
    {
        parent::__construct();
        $controller = $this->uri->segment(1);

        $controller = strtolower($controller);

        switch($controller)
        {
            case 'admin':
            {

                break;
            }
            default:
            {

                break;
            }
        }
    }


}