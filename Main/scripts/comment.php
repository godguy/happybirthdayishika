<?php
include 'databaseconnect.php';
    if(isset($_POST['commentSubmit'])) {
        function gender() {
            if(isset($_POST['Gender']) == 'true' ) {
                return 'F';
            } else{
                return 'M';
            };
        };
        $name =$_POST['name'];
        $date =$_POST['date'];
        $comment =$_POST['comment'];
        $gender = gender();

        $sql = "INSERT INTO COMMENT (name, date, comment, Gender) Values('$name', '$date', '$comment', '$gender')";
        $result = $conn->query($sql);
    }
header("Location: ../index.php");