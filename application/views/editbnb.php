 <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Edit Bnb</li>
                                </ol>
                            </div>
                        </div>
                    </div>
 <div class="main-content">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Edit Bnb</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                           <!--  <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="menu-upload-form">
                                        <form method="post" enctype="multipart/form-data"> 
                                           <div class="form-group">  
                     <label> Photo</label>  
                     
                     <input type="file" name="userprofile" class="form-control"> <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $fetch_useriddata->image; ?>" width="100px" height="100px" alt="">
                    <span class="text-danger" style="color:red;"><?php echo form_error('userprofile');?></span>                 
                </div>
                                           
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Enter Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" value="<?php echo $fetch_useriddata->name; ?>" placeholder="Enter Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Enter Cost</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="cost" class="form-control" value="<?php echo $fetch_useriddata->cost; ?>" placeholder="Enter Cost" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Enter Details</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Enter Bnb Details" name="description" required><?php echo $fetch_useriddata->description; ?></textarea>
                                                </div>
                                            </div>

                                           

                                   <div class="form-group">
                                              <label class="col-sm-2 control-label">Select City</label>
                                            <select name="drpcity" id="city" required>
                 
                        <option value="">----------Select city----------</option>

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
                                              <label class="col-sm-2 control-label">Select Landscape</label>
                                             <select name="drplandscape" id="city" required>
                 
                        <option value="">----------Select landscape----------</option>

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
                                                <div class="col-sm-offset-2 col-sm-6">
                                                    <input type="submit" name="edit" value="Update" class="btn btn-info" /> 
                    
                                                
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
