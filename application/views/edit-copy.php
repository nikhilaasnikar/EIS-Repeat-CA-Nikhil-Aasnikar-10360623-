
<!-- 
<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Add Bnb | <?php echo $title; ?></title>  
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

 </head>  
 <body>  
      <div class="container">  
           <br /><br /><br />  
           <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/addbnb_datas">  
                <div class="form-group">  
                     <label>Upload Photo</label>  
                     <input type="file" name="userprofile" class="form-control" required/>  
                    <span class="text-danger" style="color:red;"><?php echo form_error('userprofile');?></span>                 
                </div>  
                <div class="form-group">  
                     <label>Enter Name</label>  
                     <input type="text" name="name" class="form-control" required/>  
                  <span class="text-danger" style="color:red;"><?php echo form_error('name');?></span>  
                </div>  

                <div class="form-group">  
                     <label>Enter Description</label>  
                     <textarea rows="4" name="description" cols="50" required></textarea>
                  <span class="text-danger" style="color:red;"><?php echo form_error('description');?></span>  
                </div>
                 <div class="form-group">
                   <label>Select State</label>   
                <select name="drpstate" id="state" required>
                 
                        <option>----------Select State----------</option>
                        <?php
              foreach ($fetch_statedata as $row)
              {
       ?>
                      <option value="<?php echo $row->state_id; ?>"><?php echo $row->state_name; ?></option>
                  <?php
              }
      ?>
                   </select>
                 </div>
                    <div class="form-group"> 
                       <label>Select city</label>  
                   <select name="drpcity" id="city" required>
                        <option value="">----------Select City----------</option>
                    </select>
                  </div>
                <div class="form-group">  
                     <input type="submit" name="add" value="Add" class="btn btn-info" />  
                     <?php  
                          echo '<label class="text-danger" style="color:red;">'.$this->session->flashdata("error").'</label>';  
                     ?>  
                </div>  
           </form>  
      </div>  
 </body>  
 </html>  
 <script>
    /* JQuery to bind City according to State selection */
    $(document).ready(function () {
        $('#state').change(function () {
            var state_id = $('#state').val();
            if (state_id != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Admin/fetchcity",
                    method: "POST",
                    data: { state_id: state_id },
                    success: function (data) {
                        $('#city').html(data);
                    }
                });
            }
            else {
                $('#city').html('<option value="">Select City</option>');
            }
        });
    });
</script> -->


<!-- <!DOCTYPE html>  
 <html>  
 <head>  
      <title>Edit Bnb | <?php echo $title; ?></title>  
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

 </head>  
 <body>  
      <div class="container">  
           <br /><br /><br />  
           <form method="post" enctype="multipart/form-data">  
                <div class="form-group">  
                     <label> Photo</label>  
                     
                     <input type="file" name="userprofile" class="form-control"> <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $fetch_useriddata->userprofile; ?>" width="100px" height="100px" alt="">
                    <span class="text-danger" style="color:red;"><?php echo form_error('userprofile');?></span>                 
                </div>  


                <div class="form-group">  
                     <label>Name</label>  
                     <input type="text" name="name" value="<?php echo $fetch_useriddata->name; ?>"class="form-control" required/>  
                  <span class="text-danger" style="color:red;"><?php echo form_error('name');?></span>  
                </div> 

                 <div class="form-group">  
                     <label>Cost</label>  
                     <input type="text" name="cost" value="<?php echo $fetch_useriddata->cost; ?>"class="form-control" required/>  
                  <span class="text-danger" style="color:red;"><?php echo form_error('name');?></span>  
                </div>  

                <div class="form-group">  
                     <label> Description</label>  
<textarea rows="4" name="description" cols="50"  ><?php echo $fetch_useriddata->description; ?></textarea>
                  <span class="text-danger" style="color:red;"><?php echo form_error('description');?></span>  
                </div>
                 <div class="form-group">
                   <label>Select city</label> 
                   <input type="text" name="drpcity" value="<?php echo $fetch_useriddata->city; ?>"class="form-control" required/>  
 
       <!--  <?php $data["fetch_all_cities"] = $this->admin_operations->fetch_all_cities();
          print_r;?> -->
                <select name="drpcity" id="city" >
                 
                        <option>----------Select city----------</option>

                        <?php
              foreach ($fetch_all_cities as $row)
              {
       ?>

                    
                  <option <?php  if($fetch_useriddata->city == $row->city_id) { echo 'selected="selected"'; } ?> value="<?php echo $row->city_id; ?>"><?php echo $row->city_name?> </option> 

                 
                 
                  <?php
              }
      ?>
                   </select>
                 </div>

                   <div class="form-group">
                   <label>Select landscape</label> 

               
                 <select name="drplandscape" id="city" >
                 
                        <option>----------Select landscape----------</option>

                        <?php
              foreach ($fetch_all_landscapes as $row)
              {
       ?>

                    
                  <option <?php  if($fetch_useriddata->landscape == $row->landscape_id) { echo 'selected="selected"'; } ?> value="<?php echo $row->landscape_id; ?>"><?php echo $row->landscapes?> </option> 

                 
                 
                  <?php
              }
      ?>
                   </select>
                 </div>
                   
                <div class="form-group">  
                     <input type="submit" name="edit" value="Update" class="btn btn-info" /> <br> 
                     <input type="submit" name="btncancel" value="Cancel" class="btn btn-info">
                     <?php  
                          echo '<label class="text-danger" style="color:red;">'.$this->session->flashdata("error").'</label>';  
                     ?>  
                </div>  
           </form>  
      </div>  
 </body>  
 </html>   -->
 <script>
    /* JQuery to bind City according to State selection */
    $(document).ready(function () {
        $('#state').change(function () {
            var state_id = $('#state').val();
            if (state_id != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Admin/fetchcity",
                    method: "POST",
                    data: { state_id: state_id },
                    success: function (data) {
                        $('#city').html(data);
                    }
                });
            }
            else {
                $('#city').html('<option value="">Select City</option>');
            }
        });
    });
</script>