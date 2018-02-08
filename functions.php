<?php
function get_template($file_name, $array) {
    $content = '';
    if (file_exists($file_name)) {
        ob_start();
        require_once($file_name);
        $content = ob_get_clean();
    }
    extract($array);
    return($content);

}
?>