<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Conference Management System URL
    |--------------------------------------------------------------------------
    |
    | URL untuk aplikasi conf_ms_web yang menangani sistem registrasi
    | konferensi. Aplikasi landing page akan redirect ke URL ini untuk
    | proses registrasi.
    |
    | Development: http://localhost:8001
    | Production: https://conf-ms-web.gets-2026.com (or similar)
    |
    */

    'conf_ms_web_url' => env('CONF_MS_WEB_URL', 'http://localhost:8001'),

    /*
    |--------------------------------------------------------------------------
    | Conference Information
    |--------------------------------------------------------------------------
    |
    | Informasi kontak dan detail konferensi yang ditampilkan di website
    |
    */

    'name' => 'GETS 2026 - Global Conference on Education, Technology, and Science',
    'short_name' => 'GETS 2026',
    'support_email' => 'info@jptranstech.org',
    'whatsapp_number' => '6281287674791',
    'location' => 'Bali, Indonesia',
    'date' => '2026',

    /*
    |--------------------------------------------------------------------------
    | Call for Papers Sub-themes
    |--------------------------------------------------------------------------
    |
    | Daftar sub-topik penelitian untuk Call for Abstract
    |
    */

    'call_for_papers_subthemes' => [
        'Green marketing and conscious consumption',
        'Green Human Resources Management (HRM) Practices',
        'Corporate Social Responsibility',
        'Environmental, Social, and Governance (ESG) Management',
        'Artificial Intelligence and Sustainable Business models',
        'Circular economy and waste reduction management',
        'Sustainable Strategic management and business policy',
        'Entrepreneurship and startups for sustainable development',
    ],
];
