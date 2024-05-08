<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password,'stud');

    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    //echo "Success connecting to database"
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $sql = $con ->prepare("insert into student(name , rollno) values(?,?)");
    $sql ->bind_param("si",$name, $rollno);
    $sql ->execute();
    echo "Data inserted succesfully";
    $sql->close();
    $con->close();
?>