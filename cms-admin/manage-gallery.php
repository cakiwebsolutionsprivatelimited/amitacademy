<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$pageName = 'Manage Gallery';
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
									case "add" : {include_once("files/gallery_add.php"); break;}
									case "edit" : {include_once("files/gallery_edit.php"); break;}
									default:  {include_once("files/gallery_list.php"); break;}
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
    	function changeType(gallerytype){
			if(gallerytype == 1){
				$('.imgtype').show();
				$('.videotype').hide();
				<?php if($_GET['q'] == 'add'){?>
				$('#image').attr('required',true);
				$('#embedlink').attr('required',false);
				<?php }?>
			}else if(gallerytype == 2){
				$('.imgtype').hide();
				$('.videotype').show();
				<?php if($_GET['q'] == 'add'){?>
				$('#image').attr('required',false);
				$('#embedlink').attr('required',true);
				<?php }?>
			}else{
				$('.imgtype').hide();
				$('.videotype').hide();
				$('#image').attr('required',false);
				$('#embedlink').attr('required',false);
			}
		}
    </script>
     <script type='text/javascript'>
         $('#checkall').change(function () {
            $('.cb-element').prop('checked',this.checked);
        });
        
        $('.cb-element').change(function () {
         if ($('.cb-element:checked').length == $('.cb-element').length){
          $('#checkall').prop('checked',true);
         }
         else {
          $('#checkall').prop('checked',false);
         }
        });
</script>
</body>
 
</html>