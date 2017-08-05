<?php
function public_url($url = '')
{
    return base_url('public/admin_asset'.$url);
}

function public_front_url($url = '')
{
    return base_url('public/front_asset'.$url);
}

function pre($list, $exit = true)
{
    echo '<pre>';
    print_r($list);
    if($exit)
    {
        die();
    }
}

function url_admin($url = '')
{
	return base_url('admin/'.$url);
}
