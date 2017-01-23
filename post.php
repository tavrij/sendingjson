<?php
    $posted_data = array();
    if (!empty($_POST['json'])) {
        $posted_data = json_decode($_POST['json'], true);
    }
    var_dump($posted_data);
?>