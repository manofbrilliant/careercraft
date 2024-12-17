<?php

class View {
    public function load($page,$data = array()) {
        global $action;
        extract($data,EXTR_SKIP);
        $filePath = __DIR__ . "/../page/$page.php";
        if (file_exists($filePath)) {
            include($filePath);
        } else {
            echo "Error: The file $filePath does not exist.";
        };
    }
}
?>
