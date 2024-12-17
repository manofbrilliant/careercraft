<?php
ob_start();

class Helper {
    public static $isPageIsAvailable = false;

    public function loadcss($file_name) {
        return ASSET_URL . '/css/' . $file_name . '?v=' . time();
    }

    public function loadjs($file_name) {
        return ASSET_URL . '/js/' . $file_name;
    }

    public function loadimage($file_name) {
        return ASSET_URL . '/images/' . $file_name;
    }

    public function url($route) {
        return SITE_URL . $route;
    }

    public function UID() {
        $str = 'xyzabcd' . time();
        return str_shuffle($str);
    }

    

   
    public function redirect($url) {
        // Check if URL is already a full URL
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            // Define your base URL here
            $base_url = 'http://localhost/cv/';
            
            // Construct full URL
            $url = rtrim($base_url, '/') . '/' . ltrim($url, '/');
        }
    
        // Validate the final URL
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            throw new InvalidArgumentException("Invalid URL provided.");
        }
    
        // Ensure no output has been sent before the redirect
        if (headers_sent()) {
            throw new RuntimeException("Headers already sent.");
        }
    
        // Redirect
        header("Location: $url");
        exit();
    }
    
    
    
    
    
    
    // Ensure no closing PHP tag to prevent accidental whitespace
    

    public function isAnyEmpty($array) {
        foreach($array as $key => $value) {
            if(!$value) return $key;
        }
        return false;
    }

    public function route($path_url, $function) {
        $address_bar_url = $_SERVER['PATH_INFO'] ?? NULL;
        if(!$address_bar_url && $path_url == '/') {
            self::$isPageIsAvailable = true;
            $function(array());
        }
        $is_valid = true;
        $address_bar_url = rtrim($address_bar_url, '/');
        $address_bar_url = ltrim($address_bar_url, '/');

        $abu_data = explode('/', $address_bar_url);
        $pu_data = explode('/', $path_url);
        $data = array();
        foreach($pu_data as $index => $parameter) {
            if(!isset($abu_data[$index])) return;
            if($abu_data[$index] == $parameter) {

            } elseif(str_contains($parameter, '$')) {
                $data[ltrim($parameter, '$')] = $abu_data[$index];
            } else {
                $is_valid = false;
            }
        }

        if($is_valid) {
            self::$isPageIsAvailable = true;
            $function($data);
        }
    }
}

ob_end_flush();
?>
