<?php

return [
    /* Main */
    'logo_light' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'svg', 'gif'],
    ],
    'logo_dark' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'svg', 'gif'],
    ],
    'logo_email' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'gif'],
    ],
    'favicon' => [
        'whitelisted_file_extensions' => ['png', 'ico', 'gif'],
    ],
    'opengraph' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'gif'],
    ],

    /* Payment proofs for offline payments */
    'offline_payment_proofs' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'pdf'],
    ],

    /* QR codes */
    'qr_codes/logo' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'gif'],
    ],
];
