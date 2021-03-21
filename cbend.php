<?php

if(isset($_POST['ccomment']) )
{
    function validate($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    
    $ccomment=validate($_POST['ccomment']);
    
   
    echo $ccomment;

}
else
{
    header("Location:/quy\home.php");
}

?>
