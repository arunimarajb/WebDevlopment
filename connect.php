<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $ward = $_POST['ward'];
    $age = $_POST['age'];
    $phnum = $_POST['phnum'];
    $temp = $_POST['temp'];
    

    $conn = new mysqli('localhost','root','','covid_details');
    if($conn->connect_error)
    {
        die('connection Failed : ' .$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into covid(firstname,lastname,address1,address2,ward,age,phnum,temp) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssiiii" ,$fname ,$lname, $address1 ,$address2 ,$ward ,$age ,$phnum ,$temp);
        $stmt->execute();
        echo "Successfully added new customer";
        $stmt->close();
        $conn->close();
    }
    
?>