<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.card-box{
	width:87% !important;
}
.b {
 max-width: 344px;
    max-height: 75px;
    overflow-y: hidden;
    text-overflow: ellipsis;
}
	</style>
<!-- <section class="engine"><a href="#">web creation software</a></section> -->
<section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1">
    <div class="container align-center">
        <div class="row">
                <div class="weather col-md-3"><div class="weather__widget" style="background-color:rgba(0, 123, 255, 0.36);">
                
                <span class="weather__name-city" ><h3>Dublin</h3></span>
                <div class="weather__wrapper">
                <img class="weather__img" title="overcast clouds" src="img/overcast.png"><br>
                <div class="weather__text__wrapper">
                <span class="weather__main-temp"><?php echo $london['temp'];?>°C</span><br>
                <span class="weather__description"><?php echo $london['description'];?></span><br>
                <span class="weather__info">min: <?php echo $london['temp_min'];?>°C</span><br>
                <span class="weather__info">max: <?php echo $london['temp_max'];?>°C</span><br>
                <span class="weather__info">Wind: <?php echo $london['speed'];?>m/s</span><br>
                <span class="weather__info">Humidity: <?php echo $london['humidity'];?>%</span><br>         
                </div></div>
                </div></div>
                <div class="weather col-md-3"><div class="weather__widget" style="background-color:rgba(0, 123, 255, 0.36);">
                <span class="weather__name-city"><h3>Cork</h3></span>
                <div class="weather__wrapper">
                <img class="weather__img" title="light rain" src="img/overcast.png"><br>
                <div class="weather__text__wrapper">
                <span class="weather__main-temp"><?php echo $newyork['temp'];?>°C</span><br>
                <span class="weather__description"><?php echo $newyork['description'];?></span><br>
                <span class="weather__info">min: <?php echo $newyork['temp_min'];?>°C</span><br>
                <span class="weather__info">max: <?php echo $newyork['temp_max'];?>°C</span><br>
                <span class="weather__info">Wind: <?php echo $newyork['speed'];?>m/s</span><br>
                <span class="weather__info">Humidity: <?php echo $newyork['humidity'];?>%</span><br>
                </div></div>
                </div></div>
                <div class="weather col-md-3"><div class="weather__widget" style="background-color:rgba(0, 123, 255, 0.36);">
                <span class="weather__name-city"><h3>Limerick</h3></span>
                <div class="weather__wrapper">
                <img class="weather__img" title="light rain" src="img/overcast.png"><br>
                <div class="weather__text__wrapper">
                <span class="weather__main-temp"><?php echo $paris['temp'];?>°C</span><br>
                <span class="weather__description"><?php echo $paris['description'];?></span><br>
                <span class="weather__info">min: <?php echo $paris['temp_min'];?>°C</span><br>
                <span class="weather__info">max: <?php echo $paris['temp_max'];?>°C</span><br>
                <span class="weather__info">Wind: <?php echo $paris['speed'];?>m/s</span><br>
                <span class="weather__info">Humidity: <?php echo $paris['humidity'];?>%</span><br>
                </div></div>
                </div></div>
                <div class="weather col-md-3"><div class="weather__widget" style="background-color:rgba(0, 123, 255, 0.36);">
                <span class="weather__name-city" ><h3>Kilkenny</h3></span>
                <div class="weather__wrapper">
                <img class="weather__img" title="light rain" src="img/sunny.png"><br>
                <div class="weather__text__wrapper">
                <span class="weather__main-temp"><?php echo $dubai['temp'];?>°C</span><br>
                <span class="weather__description"><?php echo $dubai['description'];?></span><br>
                <span class="weather__info">min: <?php echo $dubai['temp_min'];?>°C</span><br>
                <span class="weather__info">max: <?php echo $dubai['temp_max'];?>°C</span><br>
                <span class="weather__info">Wind: <?php echo $dubai['speed'];?>m/s</span><br>
                <span class="weather__info">Humidity: <?php echo $dubai['humidity'];?>%</span><br>
                </div></div>
                </div></div>
                </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>
<br>
<section class="features3 cid-rx1qLBVxD2" id="features3-o">
  <form method="post" action="<?php echo base_url(); ?>home/search_all_bnbs">                       
    <div class="row">

        <label class="col-sm-3 control-label"></label>

        <select name="city" class="dropdown-toggle">
            <option value="0">Select City</option>
                <?php
                    foreach ($fetch_all_cities as $row)
                    {
                    ?>
                        <option value="<?php echo $row->city_id; ?>"><?php echo $row->city_name; ?></option>
                    <?php
                    }
                    ?>
        </select>&nbsp;&nbsp;
       
        <select name="drplandscape" class=" dropdown-toggle">
            <option value="0">Select Landscapes</option>
                    <?php
                    foreach ($fetch_all_landscapes as $row)
                    {
                    ?>
                        <option value="<?php echo $row->landscape_id; ?>"><?php echo $row->landscapes; ?></option>
                    <?php
                    }
                    ?>
        </select>&nbsp;&nbsp;

        
        
             <select name="cost" class=" dropdown-toggle">
                 <option value="0">Cost</option>
                 <option value="1">0-500</option>
             <option value="2">500-1000</option>
             <option value="3">1000-1500</option>
             <option value="4">1500-2000</option>
             <option value="5">2000 above</option></select>&nbsp;&nbsp;
              
             <input type="text"  name="mnmtemp" placeholder="Min Temperature"  class="form-control" style="width:10%;"  /> &nbsp;&nbsp;
              <input type="text"  name="mxmtemp" placeholder="Max Temperature"  class="form-control" style="width:10%;"  /> &nbsp;&nbsp;
                                             
       
            <input type="submit"  name="search" value="Search" class="btn btn-info" />  
                  </div>  
  </form>  


</section>

<section class="features3 cid-rx1qLBVxD2" id="features3-o">
   
    <div class="container"> 
        <div class="card-group"> 
        <div class="row">     
            <?php
		if($fetch_all_bnbs){
                foreach ($fetch_all_bnbs as $row)
                {
               ?>   
                    
                        <div <?php if(count($fetch_all_bnbs)==2){?> class="col-md-6" <?php }elseif(count($fetch_all_bnbs)==1){?> class="col-md-12"  <?php }else{ ?> class="col-md-4" <?php }?>> 
                            <a href="<?php echo base_url().'destination/destination_detail/'.$row->bnb_id; ?>"><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" height="234" width="350" style="padding-top:30px; padding-right:30px; "/> </a>

                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    <?php echo $row->name; ?>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 b">
                                    <?php echo $row->description; ?>
                                </p>
                               
                            </div> 
                        </div> 
                    
                <?php
                }}else{
                    echo '<div class="col-md-12"><center><h3>No Records...</h3></center></div>';
                }
                ?></div> 
        </div> 
    </div> 
</section>


<html lang="en"> 
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
         <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
        </script>

        <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    </head> 
    <body>
    </body> 
</html>



