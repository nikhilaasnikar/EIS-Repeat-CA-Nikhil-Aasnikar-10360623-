<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
    .btn-grey{
    background-color:#D8D8D8;
    color:#FFF;
}
.rating-block{
    background-color:#FAFAFA;
    border:1px solid #EFEFEF;
    padding:15px 15px 20px 15px;
    border-radius:3px;
}
.bold{
    font-weight:700;
}
.padding-bottom-7{
    padding-bottom:7px;
}

.review-block{
    background-color:#FAFAFA;
    border:1px solid #EFEFEF;
    padding:15px;
    border-radius:3px;
    margin-bottom:15px;
}
.review-block-name{
    font-size:12px;
    margin:10px 0;
}
.review-block-date{
    font-size:12px;
}
.review-block-rate{
    font-size:13px;
    margin-bottom:15px;
}
.review-block-title{
    font-size:15px;
    font-weight:700;
    margin-bottom:10px;
}
.review-block-description{
    font-size:13px;
}
.rater.btn-warning, .rater.btn-warning:active {
    background-color: #333 !important;
    border-color: #879a9f !important;
    color: #f9de08 !important;
}
.rater.btn  {
    font-weight: 488 !important;
    border-width: 2px !important;
    font-style: normal !important;
    letter-spacing: 1px !important;
    margin: 1px 1px !important;
    white-space: normal !important;
    -webkit-transition: all 0.3s ease-in-out !important;
    -moz-transition: all 0.3s ease-in-out !important;
    transition: all 0.3s ease-in-out !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    word-break: break-word !important;
    -webkit-align-items: center !important;
    -webkit-justify-content: center !important;
    display: -webkit-inline-flex !important;
    padding: 3px 10px !important;
    border-radius: 14px !important;
}
#close-review-box {
    background-color: #fff !important;
    border-color:#858585 !important;
    color:#7a767a !important;
    border-radius: 124px !important;
}
#commentbutton {
    background-color: #149dcc !important;
    border-color: #149dcc !important;
    color: #fff !important;
    border-radius: 63px;
}

#commentbutton.btn-lg {

    font-weight: 500;
    letter-spacing: 1px;
    margin: .4rem .8rem !important;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    padding: 0.2rem 2.2rem;
    border-radius: 22px;

}
#open-review-box.btn-success, #open-review-box.btn-success:active {
    background-color: #149dcc !important;
    border-color:#149dcc !important;
    color:#fff !important;
}
#open-review-box.btn {

    font-weight: 500;
    letter-spacing: 1px;
    margin: .4rem .8rem !important;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    padding: 1.2rem 2.2rem;
    border-radius: 22px;
}
#new-review{
    font-family:'Rubik', sans-serif !important;
    font-size: 1rem !important;
}
.form {
 padding: 6px;

border: 1px solid
#bdbdbd;

background:
#fff;

display: none;

width: 100% !important;

z-index: 100;

box-shadow: 10px 10px
gray;

border-radius: 10px;
}
.form textarea{
   width: 100%;

border-radius: 5px;

margin-top: 12px;

font-size: 13px !important;
}
.submit{
    background-color:
#149dcc !important;

border-color:
#149dcc !important;

border-radius: 18px;
}
.cancelbtn{
/*    background-color:
#149dcc !important;*/

border-color:
#acacac !important

border-radius: 18px;
}
</style>



<div style="color:green;"><?php echo $this->session->flashdata('reviewupdate');?></div>
<div style="color:green;"><?php echo $this->session->flashdata('reviewadd');?></div>
<div style="color:red;"><?php echo $this->session->flashdata('reviewfail');?>
        </div>
       
<section class="tabs4 cid-rwhDEq04aP" id="tabs4-c">
    <div class="container">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><br>&nbsp; &nbsp; &nbsp; <?php echo $fetch_single_bnb->name;?></h2>
      <div style="color:#00F"><h3> <?php echo $this->session->flashdata('request_mesg');?></h3></div>
<h3><div style="color:#00F" id="mail_sent"></div></h3>
        <div class="media-container-row mt-5 pt-3">
            <div class="mbr-figure" style="width: 60%;">
                <img src="<?php echo BASE;?>/assets/uploads/<?php echo $fetch_single_bnb->image;?>" alt="">
            </div>
            <div class="tabs-container">
                   <ul class="nav nav-tabs" role="">
                   <?php if($this->session->userdata('logged_in')){?> <li class="nav-items"><button class="nav-link mbr-fonts-style request_quote" id="<?php echo $this->destination_id;?>" >Request Quote</button></li><?php }?>
                   <form id="form_<?php echo $this->destination_id; ?>" class="contact-form form"><b>Quote request:</b><br><textarea name="quote_content" id="<?php echo 'textarea_'.$this->destination_id;?>" placeholder="Enter your comment here"></textarea><br><br><button type="button" id="<?php echo $this->destination_id;?>" class="btn btn-success btn-green submit">Submit</button><button type="button" id="<?php echo $this->destination_id;?>" class="btn  cancelbtn">Cancel</button>
                   </form></ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                  <?php echo $fetch_single_bnb->description;?>
                               </p>
                              <p class="mbr-text py-5 mbr-fonts-style display-7">
                                 Rate:<?php echo $fetch_single_bnb->cost;?>
                                </p>
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                 City:<?php echo $this->common->fetch_city_name($fetch_single_bnb->city);?>
                                </p>
                                
                            
                        </div>
                    </div>
                    
                    
                    
                    
                    

                </div>

            </div>
        </div>
    </div>
</section>


<section class="tabs4 cid-rwhDEq04aP" id="tabs4-c">
    <div class="tab-content">
               <!-- ---- -->
                <div class="container">
                
        <div class="row">
            <div class="col-sm-12">
                <div class="rating-block">
                    <h4>Average user rating</h4>
                     <h2 class="bold padding-bottom-7"><?php if ($this->average!=0) {
                     echo $this->average; }else{ echo '0'; } ?> <small>/ 5</small></h2>
                    <?php if ($this->average==5) { ?>
                      <button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                   <?php  }elseif ($this->average==4) { ?>
                    <button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                   <?php  }elseif ($this->average==3) { ?><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                   <?php  }elseif ($this->average==2) { ?><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                     <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                   <?php  }elseif ($this->average==1) { ?><button type="button" class="rater btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                     <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                   <?php  }elseif ($this->average==0) { ?>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                     <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="rater btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                   <?php  } ?>
                </div>
            </div>
                      
        </div>          
        
        <div class="row">
            <div class="col-sm-12">
                <hr/>
                <div class="review-block">
                    <?php foreach ($this->destination as $destination) { ?>
                    <div class="row">
                        <div class="col-sm-3">
                            <img style="width:60px; height:60px;" src="<?php echo BASE.'uploads/'.$destination->username.'.jpg';?>" class="img-rounded">
                            <div class="review-block-name"><a href="#"><?php echo ucfirst($destination->username); ?></a></div>
                            <div class="review-block-date"><?php echo date('d M Y h:i A',$destination->date);?><!-- <br/>1 day ago --></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <?php if($destination->rating==5){ ?>
                               <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <?php  }elseif($destination->rating==4){ ?>
                                <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                             <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <?php }elseif($destination->rating==3){ ?>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                             <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <?php }elseif($destination->rating==2){ ?>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                             <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                           <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <?php }elseif($destination->rating==1){ ?>
                            <button type="button" class="rater btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                             <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                           <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <?php }elseif($destination->rating==0){ ?>
                             <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                           <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="rater btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            <?php } ?>
                               
                               
                            </div>
                            <div class="review-block-title"><?php $title1= strlen(ucfirst($destination->comment)) > 18 ? substr(ucfirst($destination->comment), 0, 18) . '..' : ucfirst($destination->comment); echo ucfirst($title1);  ?></div>
                            
                        </div>
                    </div>
                    <hr/>
                <?php } ?>
                </div>
            </div>
        </div>
        
    </div> 
               <!-- -------- -->
           </div>

    <div class="container">
    <div class="row" style="margin-top:40px;">
        <div class="col-md-12">
        <div class="well well-sm">
            <div class="text-center">
                <button class="btn btn-success btn-green" type="button" id="open-review-box">Leave a Review</button>
            </div>
        
            <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                    <form accept-charset="UTF-8" action="" method="post">
                        <input id="ratings-hidden" name="rating" type="hidden" required="Please fill required field"> 
                        <textarea class="form-control animated" required="Please fill required fields" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
        
                        <div class="text-right">
                            <div class="stars starrr" data-rating="0"></div>
                            <a class="btn btn-danger btn-sm" href="<?php echo BASE; ?>"  id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-lg" id="commentbutton" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
         
        </div>
    </div>
</div>

</section>
<script>
    $(function(){

  $('#new-review').autosize({append: "\n"});

  var reviewBox      = $('#post-review-box');
  var newReview      = $('#new-review');
  var openReviewBtn  = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField   = $('#ratings-hidden');
  var session        = '<?php echo  $this->session->userdata('logged_in');?>';
  openReviewBtn.click(function(e)
  { if (session=='') {
    alert("You are not logged in. Please login for post a review.!");
    return false;
  }else{
    reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
}
  });

  closeReviewBtn.click(function(e)
  {
    e.preventDefault();
    reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
    closeReviewBtn.hide();
    
  });

  $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
  });
});
</script>
<script>
$(".request_quote" ).click(function() {
 /* $( this ).slideUp();*/ 
  var formid = this.id;
  $("#form_"+formid).toggle();
});

$(".cancelbtn").click(function() {
  var formid = this.id;
  $("#form_"+formid).css("display","none");
});
</script>

<script>
$(".submit" ).click(function() {
  var formid = this.id;
  var quote_content = $("#textarea_"+formid).val();

    var url    = '<?php echo BASE."home/request_quote/".$this->destination_id; ?>';
        $.ajax({
        type:'POST',
    /*    dataType: 'json',*/
        url:url,
        cache:false,
        async:true,
        global:false,
        data: {quote_content:quote_content}, 
        success:function(datas){ 
		if(datas=2){
            $('#mail_sent').html('Mail not sent please try again later');
		}else{
			$('#mail_sent').html('Quote Request mail has been sent successful');
		}
     $("#form_"+formid).css("display","none");
       /* location.reload(true);*/  },
        });
});
</script>