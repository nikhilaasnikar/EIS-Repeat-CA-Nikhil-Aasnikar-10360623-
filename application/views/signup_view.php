<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <script>
         $("#userregistration").validate({
             
             rules:{
                val-username:{ required:true },
                val-password:{ required:true },
                val-confirm-password:{ required:true, equalTo : "#val-password" },
                val-group:{ required:true, },
                val-number:{ required: true, phoneno:true},
                val-email:{ required: true, email: true, remote: { 
                    url: "<?php echo base_url('login/check_email_exists'); ?>",
                              type: "post",
                              data: {
                                valemail: function(){ return $("#val-email").val(); },
                              } }   },            
                },
             messages:{
                val-username:{ required: "Please enter username" },
                val-password:{ required: "Please enter password"},
                val-confirm-password:{ required: "Please enter password"},
                val-group:{ required: "Please select blood group" },
                 val-number:{ required: "Please enter phone number",number :"Please enter numbers only",},
                 val-email:{ required: "Please enter email", email: "Invalid email address", remote: "Email already exists"},
             },
            
            
         });

         $.validator.addMethod("checkExists", function(value, element){
    var inputElem = $('#userregistration :input[name="val-email"]'),
        data = { "valemail" : inputElem.val() },
        eReport = ''; //error report

    $.ajax(
    {
        type: "POST",
        url: <?php echo base_url('login/check_email_exists'); ?>,
        dataType: "json",
        data: data, 
        success: function(returnData)
        {
            if (returnData!== 'true')
            {
              return '<p>This email address is already registered.</p>';
            }
            else
            {
               return true;
            }
        },
        error: function(xhr, textStatus, errorThrown)
        {
            alert('ajax loading error... ... '+url + query);
            return false;
        }
    }); 
    }, '');
    </script>
<section class="tabs4 cid-rwhDEq04aP" id="tabs4-c">

    

    

    <div class="container">
        <div class="login-form-bg h-100">

        <div class="container h-100">
              <?php if($this->session->userdata('loginerror')){?>
                <div class="alert alert-warning alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button><?php echo $this->session->userdata('loginerror');?></div>
                                    <?php } ?>
            <div class="row justify-content-center h-100">


                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <div class="text-center"> <h4>Login</h4></div>
       
                                <form class="form-valide" id="userregistration" enctype="multipart/form-data" action="<?php echo base_url('login/user_signup');?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a name..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Phone Number <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-number" name="val-number" maxlength="10"  placeholder="Phone Number">
                                            </div>
                                        </div>
                                        
                                        
                                      <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-upload">Image Upload 
                                            </label>
                                            <div class="col-lg-8">
                                                <input type='file' name='userfile' size='20' />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
 