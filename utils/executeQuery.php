<?php

    function executeQuery($connection, $query) {
        $results = $connection->query($query);
        $data = [];
        
        if($results->num_rows > 0){
            while ($row = $results->fetch_assoc()){
                $data[] = $row;
            }
        } else {
            echo "No results";
            exit;
        }
        return $data;
    }

?>