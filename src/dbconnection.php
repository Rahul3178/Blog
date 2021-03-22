<?php
        $Sname="localhost";
        $Suser_nm="root";
        $Spass="";
        $db_name="blog_db";

        $conn=mysqli_connect($Sname,$Suser_nm,$Spass,$db_name);
        if(!$conn)
        {
            echo "connection failed";
        }
        


?>