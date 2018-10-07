<?php
require_once 'db.php'; 
include("auth.php");

  $query= "SELECT * FROM users where head='Yes'";
  $head= $con->query($query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Dashboard</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="css/style.css" />
  <style>
  
table,th {
            
            margin-top: 20px;
            text-align: center
        }

  </style>
</head>
<body>
   <div  class="col-sm-12">
        <span class="left"><h3>Welcome <?php echo $_SESSION['username']; ?>!</h3></span>
        <span class="right"><a href="logout.php">Logout</a></span>
        <hr/>
        <h4>Dashboard</h4>
            <div class="col-xs-3">
              <ul class="nav nav-tabs tabs-left sideways">

                <li><a href="index.php">Home</a></li>
                <li><a href="sent_request.php">Sent Requests</a></li>
                <li><a href="approved_request.php">Approved Requests</a></li>
                <li><a href="rejected_request.php">Rejected Requests</a></li>
                <?php
                    if($_SESSION['admin'] == "Yes"){
                ?>
                <li><a href="received_request.php">Received Requests</a></li>
                <?php
                  }
                ?> 
              </ul>
            </div>