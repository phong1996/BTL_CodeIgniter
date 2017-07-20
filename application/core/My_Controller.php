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
                if(strtolower($this->uri->segment(2)=='login'))
                {
                   
                }
                elseif($this->session->userdata("user_login"))
                {

                }
                else
                {
                  return redirect('admin/login');
                }
                break;
            }
            default:
            {
                
                break;
            }
        }
    }


}