<?php

$_hey = 'hey';

$conn = mysqli_connect('localhost', 'Kwinten', 'all4mom7', 'commentsection');
// check connection 
if(!$conn){
    echo 'connection error ' . mysqli_connect_error();
}
?>