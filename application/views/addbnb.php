 <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Add Bnb</li>
                                </ol>
                            </div>
                        </div>
                    </div>
 <div class="main-content">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Add Bnb</h4> (* All fields are mandatory)
                                    <div class="card-header-right-icon">
                                        <ul>
                                           <!--  <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="menu-upload-form">
                                        <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/addbnb_datas" method="post">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Upload Photo</label>
                                               <div class="form-group">
                                                   <input type="file" name="userprofile" class="form-control">
                                                   <span class="text-danger" style="color:red;"><?php echo $this->session->flashdata('message');?></span>                 
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Enter Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Enter Cost</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="cost" class="form-control" placeholder="Enter Cost" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Enter Details</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Enter Bnb Details" name="description" required></textarea>
                                                </div>
                                            </div>

                                           


                                   <div class="form-group">
                                              <label class="col-sm-2 control-label">Select City</label>
                                             <select name="drpcity" class="btn btn-primary dropdown-toggle"  required>
                                                <option value ="">----------Select City----------</option>
                                                <?php
                                      foreach ($fetch_all_cities as $row)
                                      {
                                      ?>
                                      <option value="<?php echo $row->city_id; ?>"><?php echo $row->city_name; ?></option>
                                        <?php
                                          }
                                        ?>
                                              </select>
                                  </div>
                                  <div class="form-group">
                                              <label class="col-sm-2 control-label">Select Landscape</label>
                                             <select name="drplandscape" class="btn btn-primary dropdown-toggle"  required>
                                                <option value="">----------Select Landscapes----------</option>
                                                <?php
                                      foreach ($fetch_all_landscapes as $row)
                                      {
                                      ?>
                                      <option value="<?php echo $row->landscape_id; ?>"><?php echo $row->landscapes; ?></option>
                                        <?php
                                          }
                                        ?>
                                              </select>
                                  </div>
                                     <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                   <input type="submit"  name="add" value="Add" class="btn btn-info" />  
                                                   <!--  <button type="submit" name="add" class="btn btn-lg btn-primary">Add</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </div>

<!-- 
<!DOCTYPE html>  
 <html>  
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
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