<?php

    function executeQueryWithParams($connection, $query, $paramsType, $params = [], $close = true) {
        $stmt = $connection->prepare($query);
        $stmt->bind_param($paramsType, ...$params);

        if($stmt->execute()){
            $results = $stmt->get_result();
            $data = [];

            if($results->num_rows > 0){
                while ($row = $results->fetch_assoc()){
                    $data[] = $row;
                }
            }
        } else{
            echo "Error running query: " . $connection->error;
            exit;
        }

        if($close){
            $stmt->close();
        }

        return $data;
    }

?>