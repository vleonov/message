<?php

class C_Message extends Controller
{
    public function main()
    {
        $lPhones = new L_Phones(array('hash' => Request()->args('hash')));
        if (!$lPhones->length) {
            return Response()->error404();
        }

        foreach ($lPhones as $mPhone) {
            break;
        }

        if (Request()->isPost()) {
            $mMessage = new M_Message(Request()->messageId);
            if ($mMessage) {
                echo $mMessage->text;
                echo $mPhone->phone;

                return Response()->redirect($mPhone->hash . '/sent');
            }
        }

        $lMessages = new L_Messages(array('isActive' => true), array('sorting ASC'));


        $r = array(
            'phone' => $mPhone,
            'messages' => $lMessages,
        );

        return Response()->assign($r)->fetch('phone.tpl');
    }

    public function qr()
    {
        $lPhones = new L_Phones(array('hash' => Request()->args('hash')));
        if (!$lPhones->length) {
            return Response()->error404();
        }

        foreach ($lPhones as $mPhone) {
            break;
        }

        $url = PROJECT_HOST . '/' . $mPhone->hash;

        return Response()->assign('src', U_QR::url($url, 8))->fetch('qr.tpl');
    }

    public function sent()
    {
        $lPhones = new L_Phones(array('hash' => Request()->args('hash')));
        if (!$lPhones->length) {
            return Response()->error404();
        }

        foreach ($lPhones as $mPhone) {
            break;
        }

        return Response()->fetch('sent.tpl');
    }
}