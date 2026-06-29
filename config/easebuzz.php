<?php

return [
    'merchant_key' => env('EASEBUZZ_MERCHANT_KEY', 'M8YLX5X9Q'),
    'merchant_salt' => env('EASEBUZZ_MERCHANT_SALT', '07JHRA9CQ'),
    'env' => env('EASEBUZZ_ENV', 'test'),
    // Yahan default value zaroor dein:
    'base_url' => env('EASEBUZZ_BASE_URL', 'https://testpay.easebuzz.in'), 
];