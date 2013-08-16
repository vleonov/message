<?php

class Controller
{
    public function __construct()
    {
        $host = U_Url::host();
        $base = Config()->base;
        $baseHref = '//' . $host . U_Misc::is($base[$host], '') . '/';

        $r = array(
//            'Auth' => U_GAuth::check(),
            'BaseHref' => $baseHref,
        );

        Response()->assign($r);
    }
}