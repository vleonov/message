<?php

class U_SMS
{
    private $_phone;
    private $_text;
    private $_subject;

    public function setPhone($phone)
    {
        $this->_phone = $phone;
        return $this;
    }

    public function setText($text)
    {
        $this->_text = $text;
        return $this;
    }

    public function setSubject($subject)
    {
        $this->_subject = $subject;
        return $this;
    }

    public function send()
    {
        $config = Config()->sms;

        $params = array(
            'method' => 'push_msg',
            'format' => 'JSON',
            'email' => $config['email'],
            'password' => $config['password'],
            'text' => $this->_text,
            'phone' => '+7' . $this->_phone,
            'sender_name' => $this->_subject,
        );

        $curl = curl_init($config['host']);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_POST => true,
                CURLOPT_AUTOREFERER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HEADER => false,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT => 3,
                CURLOPT_DNS_CACHE_TIMEOUT => 5,
                CURLOPT_TIMEOUT => 3,
            )
        );

        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));

        $response = curl_exec($curl);
        if (!$response) {
            return false;
        }

        $response = json_decode($response, true);
        if (!isset($response['data']['id'])) {
            return false;
        }

        return true;
    }

}