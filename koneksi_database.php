<?php 

    $db = new mysqli("localhost","root","","tokobuku");

    if($db -> connect_error) {
        die("Connection Failed".$db->connect_error);
    }
  
    
?>