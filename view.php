<?php
    /*
    Plugin Name: Plugin
    Description: Funtion doing
    */
    // $name = $_POST['name'];
    // $surname = $_POST ['surname'];
    // $visitor_email = $_Post ['email'];
    // $password = $_POST ['password'];

    function getContent(){
    $content = include('index.php');

    echo '$content';
}; 

add_shortcode('add_form', 'getContent');

?>