<div class="card">
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php echo $curPage;?>" class="btn btn-success">Back</a></span></div></div>
    <div class="card-body">
        <div class="card-body">
                                        <form class="form-horizontal" name="frm" action="ResultAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="addresult" />
                             
                                                
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Result Title</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="ltitle" class="form-control" id="notification" required maxlength="250" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Result Type</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="ntype" required id="ntype" onchange="return showhid(this.value);">
                                                        	<option value="">--Select--</option>
                                                            <option value="2">File</option>
                                                            <option value="3">Link</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <!--<div class="form-group desctap" style="display:none;">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Description</label>
                                                    <div class="col-sm-8">
                                                    	<textarea name="description" id="description" cols="82" rows="5"></textarea>
                                                    </div>
                                                    
                                                </div>-->
                                                
                                                <div class="form-group filetap" style="display:none;">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">File</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="not_file" id="not_file" class="form-control"/>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group linktap" style="display:none;">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Link</label>
                                                    <div class="col-sm-8">
                                                    	<input type="text" class="form-control" name="not_link" id="not_link" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Published Date</label>
                                                    <div class="col-sm-8">
                                                    	<input type="date" required class="form-control" name="entry_date" id="entry_date" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <!--div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Expire Date</label>
                                                    <div class="col-sm-8">
                                                    	<input type="date" required class="form-control" name="expiredate" id="expiredate" />
                                                    </div>
                                                    
                                                </div>-->

                                                
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