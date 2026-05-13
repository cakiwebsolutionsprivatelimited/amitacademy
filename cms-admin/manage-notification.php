<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$pageName = 'Manage Notification';
$curPage  = basename($_SERVER['PHP_SELF']); 
$crud = new Crud();
//echo '<pre>';print_r($_SESSION['user']);exit;
?>
<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <?php include('includes/inc-css.php');?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include('includes/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include('includes/left-panel.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
                
                <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <?php getMessage();?>
                                </div>
                                <?php
								$q= isset($_GET['q'])?$_GET['q']:"";
								switch($q) {
									case "add" : {include_once("files/notification_add.php"); break;}
									case "edit" : {include_once("files/notification_edit.php"); break;}
									default:  {include_once("files/notification_list.php"); break;}
								}?>
                            </div>
                        </div>
                
                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('includes/footer.php');?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <?php include('includes/inc-js.php');?>
    <script>
    	function showhid(dispId){
			if(dispId == 1){
				$('.desctap').show();
				$('.filetap').hide();
				$('.linktap').hide();
				$('#description').attr('required','true');
			}else if(dispId == 2){
				$('.filetap').show();
				$('.linktap').hide();
				$('.desctap').hide();
				$('#not_file').attr('required','true');
			}else if(dispId == 3){
				$('.linktap').show();
				$('.desctap').hide();
				$('.filetap').hide();
				$('#not_link').attr('required','true');
			}else{
				$('.desctap').hide();
				$('.filetap').hide();
				$('.linktap').hide();
				$('#not_link').attr('required','false');
				$('#not_file').attr('required','false');
				$('#description').attr('required','false');
			}
		}
    </script>
</body>
 
</html>