<?php

class C_Main extends Controller
{
    public function main()
    {

        $request = Request();
        if ($request->isPost()) {
            $phone = $request->phone;
            $validPhone = preg_replace('/(^\+7|^8|[^\d])/', '', $phone);

            if (strlen($validPhone) == 10) {

                $lPhones = new L_Phones(array('phone' => $validPhone));
                if ($lPhones->length) {
                    foreach ($lPhones as $mPhone) {
                        break;
                    }
                } else {
                    $mPhone = new M_Phone();
                    $mPhone->phone = $validPhone;
                }
                $mPhone->save();

                return Response()->redirect('/' . $mPhone->hash . '/qr');
            }

        } else {
            $phone = null;
        }


        return Response()->assign('phone', $phone)->fetch('index.tpl');
    }
}