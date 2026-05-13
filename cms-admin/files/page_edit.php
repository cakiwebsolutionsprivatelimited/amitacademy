<?php
$id 	  = html_entity_decode($crud->escape_string($_REQUEST['id'])); 
$sql      = ("SELECT * FROM tbl_pages WHERE id = '$id'");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_pages WHERE id = '$id'");
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
        	<form class="form-horizontal" name="frm" action="PageAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="updpage" />
                                                <input type="hidden" name="pageId" id="pageId" value="<?php echo $id;?>"/>
                                                <input type="hidden" name="hdnfile" id="hdnfile" value="<?php echo $res[0]['file'];?>"/>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Page Name</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="page_name" class="form-control" id="page_name" value="<?php echo $res[0]['page_name'];?>" required maxlength="250" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Page Title(SEO)</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="page_title" class="form-control" id="page_title" value="<?php echo $res[0]['page_title'];?>" required maxlength="250" />
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Meta Description(SEO)</label>
                                                    <div class="col-sm-8">
                                                        <textarea id="page_meta_desc" name="page_meta_desc" rows="5" cols="83"><?php echo $res[0]['page_meta_desc'];?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Meta Keyword(SEO)</label>
                                                    <div class="col-sm-8">
                                                        <textarea id="page_meta_key" name="page_meta_key" rows="5" cols="83"><?php echo $res[0]['page_meta_key'];?></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Select Page Type</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="page_type" required name="page_type" onchange="return changeType(this.value);">
                                                        	<option value="">--Select Page Type</option>
                                                            <option value="1" <?php if($res[0]['page_type'] == 1){ echo 'selected';}?>>Content</option>
                                                            <option value="2" <?php if($res[0]['page_type'] == 2){ echo 'selected';}?>>Download File</option>
                                                            <option value="3" <?php if($res[0]['page_type'] == 3){ echo 'selected';}?>>External Link</option>
                                                            <option value="4" <?php if($res[0]['page_type'] == 4){ echo 'selected';}?>>Plugin Page</option>
                                                            <option value="5" <?php if($res[0]['page_type'] == 5){ echo 'selected';}?>>No Link</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <?php $block = 'style="display:block;"'; $none = 'style="display:none;"';?>
                                                <div class="form-group pluginpage" <?php if($res[0]['page_type'] == 4){ echo $block;}else{ echo $none;}?>>
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Select Plugin</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="plugin_id" name="plugin_id">
                                                        	<option value="">--Select Plugin</option>
                                                            <option value="1">News</option>
                                                            <option value="2">Gallery</option>
                                                            <option value="3">Contact</option>
                                                            <option value="4">Notification</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group link" <?php if($res[0]['page_type'] == 3){ echo $block;}else{ echo $none;}?>>
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">External Link</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="link" class="form-control" id="link" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group download" <?php if($res[0]['page_type'] == 2){ echo $block;}else{ echo $none;}?>>
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Download File</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="file" id="file" class="form-control"/>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <?php if($res[0]['file'] != ''){?>
                                                <div class="form-group filetap">
                                                    <div class="col-sm-8">
                                                    	<a href="../pages/<?php echo $res[0]['file'];?>" target="_blank">View File</a>
                                                    </div>
                                                </div>
												<?php }?>
                                                
                                                <div class="form-group content" <?php if($res[0]['page_type'] == 1){ echo $block;}else{ echo $none;}?>>
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Description</label>
                                                    <div class="col-sm-12">
                                                    	<textarea name="description" id="description"><?php echo $res[0]['description'];?></textarea>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-primary btn">Update</button>
                                <input type="reset" value="Reset" class="btn-inverse btn"/>
                            </div>
                        </div>
                     </div>
                                            </form>
        	
                                        
                                    </div>
    </div>
    
</div>