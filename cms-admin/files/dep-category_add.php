<div class="card">
   <!-- <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php //echo $curPage;?>" class="btn btn-success">Back</a></span></div></div>-->
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="https://www.aulcollege.org.in/cms-admin/manage-gallery.php" class="btn btn-success">Back</a></span></div></div>
    <div class="card-body">
        <div class="card-body">
                                        <form class="form-horizontal" name="frm" action="categoryAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="add_depcategory" />
                             
                                            <div class="form-group">
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
                                                
                                                <div class="form-group imgtype">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Title</label>
                                                    <div class="col-sm-8">
                                                    	<input type="text" name="title" id="title" class="form-control" required/>
                                                    </div>
                                                    
                                                </div>
                                                
                                               <div class="form-group imgtype">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Description</label>
                                                    <div class="col-sm-8">
                                                    	<textarea name="desc" cols="7" rows="4"></textarea>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group imgtype">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Image</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="image" id="image" class="form-control" required/>
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