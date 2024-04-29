<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'rooms-grid';
    $values = [
        'title' => 'Rooms Grid'
    ];

    renderTemplate($template, $values);
?>