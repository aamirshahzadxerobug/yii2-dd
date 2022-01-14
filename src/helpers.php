<?php
if (!function_exists('dd')) {
    function dd($data)
    {
        echo "<pre>";
        print_r($data);
        exit;
        /*array_map(function ($param) {
            print_r($param);
        }, func_get_args());
        die(1);*/
    }
}