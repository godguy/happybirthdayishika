<?php
$conn = mysqli_connect('sql156.main-hosting.eu', 'u301339114_GodGuyAditya', 'jpu939xa', 'COMMENT');

if(!$conn){
    die("Connection Failed: ".mysqli_connect_errno());
}