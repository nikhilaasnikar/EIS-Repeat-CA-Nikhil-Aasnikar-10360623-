                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">View BNB</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    
                                    <h4>BnB List </h4><div style="color:blue"><?php echo $this->session->flashdata('message');?></div>
                                    <div class="card-header-right-icon">
                                        <ul>
                                           <!--  <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i> -->
                                              <!--   <ul class="card-option-dropdown dropdown-menu">
                                                    <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                    <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                    <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                                </ul> -->
                                            </li>
                                           <!--  <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Name</th>
                                                    <th>description</th>
                                                    <th>edit</th>
                                                    <th>delete</th>
                                                   
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
    foreach ($fetch_all_bnbs as $row)
    {
   ?>
                                                <tr>
                                                    
                                                    <td><?php echo $row->name; ?></td>
                                                    
                                                    <td><?php echo $row->description; ?></td>
                                                    <td><span class="badge badge-primary"><a href="<?php echo base_url(); ?>index.php/Admin/UpdateData/<?php echo $row->bnb_id; ?>">Edit</a></span></td> 
                                                    <td><span class="badge badge-primary"><a href="<?php echo base_url(); ?>index.php/Admin/delete_bnb/<?php echo $row->bnb_id; ?>">Delete</a>
                                                </tr>
  <?php
    }
   ?>
                                              
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                       