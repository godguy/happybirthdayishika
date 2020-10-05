<?php
$conn = mysqli_connect('localhost', 'u301339114_comment', 'jpu939xa', 'COMMENT');

if(!$conn){
    die("Connection Failed: ".mysqli_connect_errno());
}