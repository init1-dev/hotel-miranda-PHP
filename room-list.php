<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'layout';
    $values = [
        'title' => 'Rooms List'
    ];

    renderTemplate($template, $values);
?>