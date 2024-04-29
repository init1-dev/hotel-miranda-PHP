<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'layout';
    $values = [
        'title' => 'Room Details'
    ];

    renderTemplate($template, $values);
?>