<?php

return array(

    '/' => array(
        'Main',
    ),

    '/(?<hash>[\d\w]{32})/' => array(
        'Message',
    ),
    '/(?<hash>[\d\w]{32})/qr/' => array(
        'Message' => 'qr',
    ),
    '/(?<hash>[\d\w]{32})/sent/' => array(
        'Message' => 'sent',
    ),
);