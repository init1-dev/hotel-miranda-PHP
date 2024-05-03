<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    
    use eftec\bladeone\BladeOne;

    $views = __DIR__ . '/../views';
    $cache = __DIR__ . '/../cache';
    
    $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
    
    function renderTemplate($template, $values) {
        global $blade;
        echo $blade->run($template, $values);
    }

?>