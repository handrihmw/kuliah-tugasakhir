<?php include ('decoration/header.php');?>

<!-- start: Content -->
    <div id="content" class="span10">
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo base_url(); ?>subadmin/subadmin/index">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Table Device</a></li>
            </ul>
            <div class="control-group">
                <div class="controls">
                    <div class="input-append">
                        <input id="appendedInputButtons" size="16" type="text"><button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
            <div class="row-fluid sortable">        
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon white phone"></i><span class="break"></span>Device</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                    <div style="overflow-x: auto;">
                        <table class="table table-striped table-bordered listHost" class="table table-striped">
                              <thead>
                                  <tr>
                                    <th style="text-align:center;">ID</th>
                                    <th style="text-align:center;">Operating System</th>
                                    <th style="text-align:center;">Device Name</th> 
                                    <th style="text-align:center;">IP Host</th>
                                    <th style="text-align:center;">Subnet Mask</th>
                                    <th style="text-align:center;">MAC Address</th>
                                    <th style="text-align:center;">Location</th>
                                    <th style="text-align:center;">Status</th>
                                  </tr>
                              </thead>   
                                <tbody id="show_data">
                                    <?php 
                                    $no = 1;
                                    foreach ($data_disconnected as $con): ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $no++ ?></td>
                                    <td><?= $con->device_os ?></td>
                                    <td><?= $con->device_name ?></td>
                                    <td><span id="host_ip"><?= $status->device_ip ?></span></td>
                                    <td><?= $con->device_subnet ?></td>
                                    <td><?= $con->device_mac ?></td>
                                    <td><?= $con->device_location ?></td>
                                    <td><?= $con->device_status ?></td>
                                </tr>
                               
                            <?php endforeach; ?>
                              </tbody>
                         </table>  
                         </div>
                      <!--    <div class="pagination pagination-centered">
                          <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active">
                              <a href="#">1</a>
                            </li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                          </ul>
                        </div>   -->   
                    </div>
                </div><!--/span-->
            </div><!--/row-->
    </div><!--/.fluid-container-->
    
<!-- end: Content -->
    
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->
        

<script type="text/javascript" src="<?php echo base_url().'assets/crud/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/crud/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/crud/js/jquery.dataTables.js'?>"></script>


<div class="clearfix"></div>
    
<?php include('decoration/footer.php');?>