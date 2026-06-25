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
        'Green Marketing and Conscious Consumption',
        'Green Human Resource Management (HRM) Practices',
        'Corporate Social Responsibility (CSR)',
        'Environmental, Social, and Governance (ESG) Management',
        'Artificial Intelligence and Sustainable Business Models',
        'Sustainable Strategic Management and Business Policy',
        'Entrepreneurship and Startups for Sustainable Development',
        'Green Technology and Sustainable Innovation',
        'Renewable Energy and Climate-Resilient Infrastructure',
        'Sustainable Materials and Circular Engineering',
        'Circular Economy and Waste Reduction Management',
        'Energy Efficiency and Sustainable Industrial Practices',
        'Climate Adaptation Technology and Community Resilience',
    ],
];
