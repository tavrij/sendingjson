<?php
/*     $posted_data = array();
    if (!empty($_POST['json'])) {
        $posted_data = json_decode($_POST['json'], true);
    }
    print_r($posted_data); */
    $data = json_decode($_POST['json'], true);

    print_r $data[0]; // Should output 500
    print_r $data[1]; // Should output hello world	
?>