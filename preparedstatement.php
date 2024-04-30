<?php
    $dbserverName="localhost";
    $dbuserName="root";
    $dbpassword="";
    $dbName="mahi";
    $conn=mysqli_connect($dbserverName,$dbuserName,$dbpassword,$dbName);
    $name=$_POST['name'];
    $bdgp=$_POST['bloodgroup'];
    $phno=$_POST['phno'];

 echo $name."<br>";
    echo $bdgp."<br>";
    echo $phno."<br>";


    $sql="INSERT INTO cse(name,bdgp,phno) VALUES(?,?,?);";

    //create a prepared statement
    $stmt=mysqli_stmt_init($conn);
    //prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Connection error";
    }else{
        //bind parameteres to the placeholder
        mysqli_stmt_bind_param($stmt,"sss",$name,$bdgp,$phno);
        //Run parameters inside the database
        mysqli_stmt_execute($stmt);
    }
?>





