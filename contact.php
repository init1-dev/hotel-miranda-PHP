<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'layout';
    $values = [
        'title' => 'Contact Hotel Miranda'
    ];

    renderTemplate($template, $values);
?>