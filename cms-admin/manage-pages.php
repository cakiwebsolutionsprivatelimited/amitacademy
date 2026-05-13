<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$pageName = 'Manage Page';
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
									case "add" : {include_once("files/page_add.php"); break;}
									case "edit" : {include_once("files/page_edit.php"); break;}
									default:  {include_once("files/page_list.php"); break;}
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
    <script src="ckeditor/ckeditor.js"></script>  
    <script type="text/javascript">  
	     CKEDITOR.replace('description');  
	</script>  
    <script>
    	function changeType(pageType){
			if(pageType == 1){
				$('.content').show();
				$('.download').hide();
				$('.link').hide();
				$('.pluginpage').hide();
				$('#plugin_id').attr('required',false);
				$('#link').attr('required',false);
				$('#file').attr('required',false);
				//$('#description').attr('required',true);
			}else if(pageType == 2){
				$('.content').hide();
				$('.download').show();
				$('.link').hide();
				$('.pluginpage').hide();
				$('#plugin_id').attr('required',false);
				$('#link').attr('required',false);
				$('#file').attr('required',true);
				$('#description').attr('required',false);
			}else if(pageType == 3){
				$('.content').hide();
				$('.download').hide();
				$('.link').show();
				$('.pluginpage').hide();
				$('#plugin_id').attr('required',false);
				$('#link').attr('required',true);
				$('#file').attr('required',false);
				$('#description').attr('required',false);
			}else if(pageType == 4){
				$('.content').hide();
				$('.download').hide();
				$('.link').hide();
				$('.pluginpage').show();
				$('#plugin_id').attr('required',true);
				$('#link').attr('required',false);
				$('#file').attr('required',false);
				$('#description').attr('required',false);
			}else{
				$('.content').hide();
				$('.download').hide();
				$('.link').hide();
				$('.pluginpage').hide();
				$('#plugin_id').attr('required',false);
				$('#link').attr('required',false);
				$('#file').attr('required',false);
				$('#description').attr('required',false);
			}
		}
    </script>
</body>
 
</html>