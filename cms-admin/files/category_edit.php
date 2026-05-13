<?php
$id 	  = html_entity_decode($crud->escape_string($_REQUEST['id'])); 
$sql      = ("SELECT * FROM tbl_category WHERE id = '$id'");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_category WHERE id = '$id'");
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
        	<form class="form-horizontal" name="frm" action="categoryAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="updcategory" />
                                                <input type="hidden" name="categoryId" id="categoryId" value="<?php echo $id;?>"/>
                                                <input type="hidden" name="hdnimage" id="hdnimage" value="<?php echo $res[0]['image'];?>"/>
                                                
                                                
                                                <div class="form-group imgtype">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Title</label>
                                                    <div class="col-sm-8">
                                                    	<input type="text" name="title" id="title" class="form-control" value="<?php echo $res[0]['title'];?>" required/>
                                                    </div>
                                                    
                                                </div>
                                                
                                               <div class="form-group imgtype">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Description</label>
                                                    <div class="col-sm-8">
                                                    	<textarea name="desc" cols="7" rows="4"><?php echo $res[0]['description'];?></textarea>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group imgtype">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Image</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="image" id="image" class="form-control"/>
                                                    </div>
                                                </div>
                                                 <?php if($res[0]['image'] != ''){?>
                                                <div class="form-group">
                                                    <div class="col-sm-8">
                                                    	<img src="../gallery/<?php echo $res[0]['image'];?>" width="100" height="50"/>
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