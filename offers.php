<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'layout';
    $values = [
        'title' => 'Hotel Miranda Offers'
    ];

    renderTemplate($template, $values);
?>