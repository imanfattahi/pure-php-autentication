<?php 
    function url ($path, $get = false) {
        $address = SITE_URL . $path;
        if ($get) {
            return $address;    
        }
        echo $address;
    }
    
?>