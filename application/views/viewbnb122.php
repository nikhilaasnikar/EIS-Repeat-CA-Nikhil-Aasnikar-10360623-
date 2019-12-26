<body>
    <center><h1>All BNB'S</h1></center>
    <table align="center" border="1">
        <tr>
           
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
            
        </tr>
   <?php
    foreach ($fetch_all_bnbs as $row)
    {
   ?>
       <tr>
           
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->description; ?></td>
          
            <td><a href="<?php echo base_url(); ?>index.php/Admin/UpdateData/<?php echo $row->bnb_id; ?>">Edit</a> | <a href="<?php echo base_url(); ?>index.php/Admin/delete_bnb/<?php echo $row->bnb_id; ?>">Delete</a></td>
        </tr>
   <?php
    }
   ?>
   </table>
</body>