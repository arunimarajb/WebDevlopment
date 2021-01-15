<?php
        $phnum = $_POST['phnum'];
        $temp = $_POST['temp'];


        $conn = new mysqli('localhost','root','','covid_details');
        if($conn->connect_error)
        {
            die('connection Failed : ' .$conn->connect_error);
        }
        else
        {
            $sql = "UPDATE `covid` SET `temp`='".$temp."' WHERE phnum='".$phnum."'";
            $stmt = mysqli_query($conn,$sql);
            if ($stmt)
            {
                echo "Data Updated Successfully ! ";
            }
            $conn->close();
        }
?>