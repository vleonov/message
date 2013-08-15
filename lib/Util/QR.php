<?php

class U_QR
{
    public static function url($url, $size = 4, $bound = 2)
    {
        self::_init();

        $filename = '/' . md5($url) . '.png';
        QRcode::png($url, WWW_TMP_DIR . $filename, 'L', $size, $bound);

        return TMP_URL . $filename;
    }

    private static function _init()
    {
        include_once LIB_DIR . '/External/QR/qrlib.php';
    }
}