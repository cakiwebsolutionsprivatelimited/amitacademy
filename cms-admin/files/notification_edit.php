<?php
$id 	  = html_entity_decode($crud->escape_string($_REQUEST['id'])); 
$sql      = ("SELECT * FROM tbl_notification WHERE id = '$id'");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_notification WHERE id = '$id'");
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
        	<form class="form-horizontal" name="frm" action="NotificationAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="updnotification" />
                                                <input type="hidden" name="notifId" id="notifId" value="<?php echo $id;?>"/>
                                                <input type="hidden" name="hdnnotif" id="hdnnotif" value="<?php echo $res[0]['file'];?>"/>
                                                
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Notification</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="notification" class="form-control" id="notification" value="<?php echo $res[0]['notification'];?>" required maxlength="250" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Notification Type</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="ntype" required id="ntype" onchange="return showhid(this.value);">
                                                        	<option value="">--Select--</option>
                                                            <option value="1" <?php if($res[0]['type'] == 1){ echo 'selected';}?>>Description</option>
                                                            <option value="2" <?php if($res[0]['type'] == 2){ echo 'selected';}?>>File</option>
                                                            <option value="3" <?php if($res[0]['type'] == 3){ echo 'selected';}?>>Link</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <?php $block = 'style="display:block;"'; $none = 'style="display:none;"';?>
                                                <div class="form-group desctap" <?php if($res[0]['type'] == 1){ echo $block;}else{ echo $none;}?>>
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Description</label>
                                                    <div class="col-sm-8">
                                                    	<textarea name="description" id="description" cols="82" rows="5"><?php echo $res[0]['description'];?></textarea>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group filetap" <?php if($res[0]['type'] == 2){ echo $block;}else{ echo $none;}?>>
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">File</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="not_file" id="not_file" class="form-control"/>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <?php if($res[0]['file'] != ''){?>
                                                <div class="form-group filetap">
                                                    <div class="col-sm-8">
                                                    	<a href="../notification/<?php echo $res[0]['file'];?>" target="_blank">View File</a>
                                                    </div>
                                                </div>
												<?php }?>
                                                
                                                <div class="form-group linktap" <?php if($res[0]['type'] == 3){ echo $block;}else{ echo $none;}?>>
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Link</label>
                                                    <div class="col-sm-8">
                                                    	<input type="text" class="form-control" name="not_link" id="not_link" value="<?php echo $res[0]['link'];?>" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Published Date</label>
                                                    <div class="col-sm-8">
                                                    	<input type="date" required class="form-control" name="entry_date" value="<?php echo $res[0]['entry_date'];?>" id="entry_date" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Expire Date</label>
                                                    <div class="col-sm-8">
                                                    	<input type="date" required class="form-control" name="expiredate" id="expiredate" value="<?php echo $res[0]['expiredate'];?>" />
                                                    </div>
                                                    
                                                </div>
                                                
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