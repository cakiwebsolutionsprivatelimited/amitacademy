<?php
$id 	  = html_entity_decode($crud->escape_string($_REQUEST['id'])); 
$sql      = ("SELECT * FROM tbl_department_category WHERE id = '$id'");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_department_category WHERE id = '$id'");
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
                             					<input type="hidden" name="act" value="upd_depcategory" />
                             					
                             					<div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Department Category</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="category">
                                                    	<option value="">--Choose Category--</option>
                                                    	<option <?php 
                                            	if($res[0]['dep_category']==1){
                                            		echo"selected";
                                            	}else{
                                            		echo"";
                                            	}
                                            ?> value="1">BCA</option>
                                                    	<option <?php 
                                        	if($res[0]['dep_category']==2){
                                        		echo"selected";
                                        	}else{
                                        		echo"";
                                        	}
                                        ?> value="2">BBA</option>
                                                    	<option <?php 
                                        	if($res[0]['dep_category']==3){
                                        		echo"selected";
                                        	}else{
                                        		echo"";
                                        	}
                                        ?> value="3">BIOTECHNOLOGY</option>
                                                    	<option <?php 
                                    	if($res[0]['dep_category']==4){
                                    		echo"selected";
                                    	}else{
                                    		echo"";
                                    	}
                                    ?> value="4">DMLT</option>
                                                    	<option <?php 
                                	if($res[0]['dep_category']==5){
                                		echo"selected";
                                	}else{
                                		echo"";
                                	}
                                ?> value="5">MJMC</option>
                                                    	<option <?php 
                                	if($res[0]['dep_category']==6){
                                		echo"selected";
                                	}else{
                                		echo"";
                                	}
                                ?> value="6">MBA</option>
                                                    	<option <?php 
                            	if($res[0]['dep_category']==7){
                            		echo"selected";
                            	}else{
                            		echo"";
                            	}
                            ?> value="7">M.SC COMPUTER SCIENCE</option>
                                                    	<option <?php 
                        	if($res[0]['dep_category']==8){
                        		echo"selected";
                        	}else{
                        		echo"";
                        	}
                        ?> value="8">+2 SCIENCE</option>
                                                    	<option <?php 
                        	if($res[0]['dep_category']==9){
                        		echo"selected";
                        	}else{
                        		echo"";
                        	}
                        ?> value="9">+3 DEGREE(SC. & COMM.)</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
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