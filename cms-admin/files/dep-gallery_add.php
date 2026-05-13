<div class="card">
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php echo $curPage;?>" class="btn btn-success">Back</a></span></div></div>
    <div class="card-body">
        <div class="card-body">
                                        <form class="form-horizontal" name="frm" action="GalleryAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="add_depgallery" />
                             
                                                
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Gallery Type</label>
                                                    <div class="col-sm-8">
                                                        <select name="gtype" name="gtype" class="form-control" required onchange="return changeType(this.value);">
                                                        	<option value="">--Select Type--</option>
                                                            <option value="1">Image</option>
                                                            <option value="2">Embed Video</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                                 <div class="form-group imgtype" style="display:none;">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Image Category</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="img_category">
                                                    	<option value="">--Select Image Category--</option>
                                                            <?php
                                                                $sql = "SELECT * FROM tbl_department_category WHERE status=1";
                                                                $res = $crud->getData($sql);
                                                                foreach($res as $key=>$vl){?>
                                                                <option value="<?php echo $vl['id'];?>"><?php echo $vl['title'];?></option>
                                                              <?php  }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <div class="form-group imgtype" style="display:none;">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Department Category</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="category">
                                                    	<option value="">--Choose Category--</option>
                                                    	<option value="1">BCA</option>
                                                    	<option value="2">BBA</option>
                                                    	<option value="3">BIOTECHNOLOGY</option>
                                                    	<option value="4">DMLT</option>
                                                    	<option value="5">MJMC</option>
                                                    	<option value="6">MBA</option>
                                                    	<option value="7">M.SC COMPUTER SCIENCE</option>
                                                    	<option value="8">+2 SCIENCE</option>
                                                    	<option value="9">+3 DEGREE(SC. & COMM.)</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group imgtype" style="display:none;">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Image</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="image[]" id="image" class="form-control" multiple/>
                                                    </div>
                                                    
                                                </div>
                                                
                                               
                                                
                                                 <div class="form-group videotype" style="display:none;">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Embed video link</label>
                                                    <div class="col-sm-8">
                                                    	<input type="text" name="embedlink" id="embedlink" class="form-control" value="https://www.youtube.com/embed/"/>
                                                    </div>
                                                    
                                                </div>


                                                
                                                <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-primary btn">Submit</button>
                                <input type="reset" value="Reset" class="btn-inverse btn"/>
                            </div>
                        </div>
                     </div>
                                            </form>
                                    </div>
    </div>
    
</div>