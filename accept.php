<?php
include("menu.php");
require_once 'db.php'; 
// include("auth.php");

if($_POST) {
    $reqId= $_POST["requestId"];
 
    // $mstatus="approved";
 
    $sql = "UPDATE requests SET m_status ='Approved' WHERE id = $reqId";
    if($con->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='received_request.php'><button type='button'>Back</button></a>";
        echo "<a href='index.php'><button type='button '>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $con->error;
    }
 
    $con->close();
 
}

?>