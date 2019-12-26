                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
               
                <!-- /# row -->
             <!--    <div id="main-content">
                    <div style="color:blue"><?php echo $this->session->flashdata('message');?></div>


                 </div> -->

                      <div id="main-content">
                        <div style="color:blue"><?php echo $this->session->flashdata('message');?></div>
                         <div class="row">
                        <!-- Line Chart -->
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Dublin</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="city1"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Pie Chart -->
                        
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Cork</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="city2"></canvas>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Limerick</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="city3"></canvas>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Kilkenny</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="city4"></canvas>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                    <!-- /# row -->
                   
                   
                   
                    
                    

                   
                </div>
                
                <script>
				
				  //line chart
    
	var ctx = document.getElementById("city1");
    ctx.height = 150;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php echo $city_1_date;?>],
            datasets: [
                {
                    label: "Dublin",
                    borderColor: "rgba(55, 160, 0, 0.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: [<?php echo $city_1_weather;?>]
                            }
                
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    });
	
	
	var ctx = document.getElementById("city2");
    ctx.height = 150;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php echo $city_2_date;?>],
            datasets: [
                {
                    label: "Cork",
                    borderColor: "rgba(255,140,0, 0.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: [<?php echo $city_2_weather;?>]
                            }
                
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    });
	
	
	var ctx = document.getElementById("city3");
    ctx.height = 150;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php echo $city_3_date;?>],
            datasets: [
                {
                    label: "Limerick",
                    borderColor: "rgba(75,0,130, 0.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: [<?php echo $city_3_weather;?>]
                            }
                
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    });
	
	
	var ctx = document.getElementById("city4");
    ctx.height = 150;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php echo $city_4_date;?>],
            datasets: [
                {
                    label: "Kilkenny",
                    borderColor: "rgba(255,99,71, 9.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: [<?php echo $city_4_weather;?>]
                            }
                
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    });
	</script>