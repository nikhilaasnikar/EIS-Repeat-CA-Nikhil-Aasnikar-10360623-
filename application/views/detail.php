<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view</title>
    <style>
        body{
            margin: 10% auto 0;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <center><h1>All BNB'S</h1></center>
    <table align="center" border="1">
        <tr>
           
            <th>Name</th>
            <th>Description</th>
            <th>City</th>
             <th>Pic</th>
           
        </tr>
   
       <tr>
           
            <td><?php echo $fetch_single_bnb->name; ?></td>
            <td><?php echo $fetch_single_bnb->description; ?></td>
            <td><?php echo $fetch_single_bnb->city; ?></td>
            <td><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $fetch_single_bnb->userprofile; ?>" height="100" width="100"/></td>
           

   </table>
</body>
</html>