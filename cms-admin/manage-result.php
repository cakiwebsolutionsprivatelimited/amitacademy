<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$pageName = 'Manage Link';
$curPage  = basename($_SERVER['PHP_SELF']); 
$crud = new Crud();
//echo '<pre>';print_r($_SESSION['user']);exit;
?>
<!doctype html>
<html lang="en">

 
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
									case "add" : {include_once("files/result_add.php"); break;}
									case "edit" : {include_once("files/result_edit.php"); break;}
									default:  {include_once("files/result_list.php"); break;}
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
			 if(dispId == 2){
				$('.filetap').show();
				$('.linktap').hide();
				$('#not_file').attr('required','true');
			}else if(dispId == 3){
				$('.linktap').show();
				$('.filetap').hide();
				$('#not_link').attr('required','true');
			}else{
				$('.filetap').hide();
				$('.linktap').hide();
				$('#not_link').attr('required','false');
				$('#not_file').attr('required','false');
			}
		}
    </script>
</body>
 
</html>