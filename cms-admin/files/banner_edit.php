<?php
$id 	  = html_entity_decode($crud->escape_string($_REQUEST['id'])); 
$sql      = ("SELECT * FROM tbl_banner WHERE id = '$id'");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_banner WHERE id = '$id'");
if($countRec['total'] == 0){
	echo '<script>window.location="'.$curPage.'"</script>';exit;
}
$res      = $crud->getData($sql);
//print_r($res);exit;
?>

<div class="card">
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php echo $curPage;?>" class="btn btn-success">Back</a></span></div></div>
    <div class="card-body">
        <div class="card-body">
        	<form class="form-horizontal" name="frm" action="BannerAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="updbanner" />
                                                <input type="hidden" name="bannerId" id="bannerId" value="<?php echo $id;?>"/>
                                                <input type="hidden" name="hdnimage" id="hdnimage" value="<?php echo $res[0]['banner_img'];?>"/>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Banner Description</label>
                                                    <div class="col-sm-8">
                                                        <textarea id="banner_desc" required name="banner_desc" cols="82" rows="5"><?php echo $res[0]['banner_desc'];?></textarea>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Banner Image</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="banner_img" id="banner_img" class="form-control"/>
                                                    </div>
                                                </div>
                                                <?php if($res[0]['banner_img'] != ''){?>
                                                <div class="form-group">
                                                    <div class="col-sm-8">
                                                    	<img src="../banner/<?php echo $res[0]['banner_img'];?>" width="100" height="50"/>
                                                    </div>
                                                </div>
												<?php }?>
                                                
                                                <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-primary btn">Update</button>
                            </div>
                        </div>
                     </div>
                                            </form>
                                        
                                    </div>
    </div>
    
</div>