<?php
function public_url($url = '')
{
    return base_url('public/admin_asset'.$url);
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