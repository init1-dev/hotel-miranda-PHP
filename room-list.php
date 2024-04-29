<?php
    require_once __DIR__ . '/utils/renderTemplate.php';

    $template = 'room-list';
    $values = [
        'title' => 'Rooms List'
    ];

    renderTemplate($template, $values);
?>