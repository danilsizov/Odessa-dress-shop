<?php
    header('content-type: text/javascript');
    echo json_encode(array(
                    'id' => 1,
                    'name' => 'Розовое платье',
                    'price' => 500,
                    'last_price' => 750,
                    'stars' => 3 ));
?>