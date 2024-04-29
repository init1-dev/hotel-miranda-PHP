<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'about';
    $values = [
        'title' => 'About Hotel Miranda'
    ];

    renderTemplate($template, $values);
?>