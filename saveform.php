<?php
if (is_ajax()) {
  save_data_form();
}
//Function to check if the request is an AJAX request
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
function save_data_form(){
    $post_data = $_POST;
    $filename ='data.log';
    $handle = fopen($filename, "w");
    if (!empty( json_encode($post_data))) {
        fwrite($handle,  json_encode($post_data));
    }
    fclose($handle);
}
?>