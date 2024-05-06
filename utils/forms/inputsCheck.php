<?php

    function array_some(array $inputsArray, $value){
        foreach ($inputsArray as $input) {
            if ($input === $value ) {
                return true;
            }
        }
        return false;
    };

?>