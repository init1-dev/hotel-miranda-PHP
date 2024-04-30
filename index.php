<?php
    require_once __DIR__ . '/utils/renderTemplate.php';
    require_once __DIR__ . '/utils/connection.php';

    $template = 'index';
    $values = [
        'title' => 'Hotel Miranda Web'
    ];

    renderTemplate($template, $values);
    // phpinfo();
?>