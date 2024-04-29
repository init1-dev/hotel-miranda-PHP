<?php
    require_once __DIR__ . '/setup.php';
    
    function renderTemplate($template, $values) {
        global $blade;
        echo $blade->run($template, $values);
    }

?>