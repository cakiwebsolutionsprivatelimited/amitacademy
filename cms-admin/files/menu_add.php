<div class="card">
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php echo $curPage;?>" class="btn btn-success">Back</a></span></div></div>
    <div class="card-body">
        <div class="card-body">
                                        <form class="form-horizontal" name="frm" action="MenuAction.php" method="post" autocomplete="off">
                             					<input type="hidden" name="act" value="addmenu" />
                             
                                                
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-2 control-label col-form-label">Select Menu</label>
                                                    <div class="col-sm-8">
                                                        <select name="menu" id="menu" required class="form-control">
                                                        	<option value="">--Select Menu</option>
                                                            <?php $getall  = ("SELECT * FROM tbl_pages WHERE status = 1");
																  $fetchPage = $crud->getData($getall);
																  foreach($fetchPage as $page){
															?>
                                                            	<option value="<?php echo $page['id'];?>"><?php echo $page['page_name'];?></option>
                                                            <?php }?>
                                                        </select>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Parent Menu (If Any)</label>
                                                    <div class="col-sm-8">
                                                        <select name="parent" id="parent" class="form-control" onchange="return checkmenu(this.value);">
                                                        	<option value="0">--Select Parent Menu</option>
                                                            <?php $getallpar  = ("SELECT * FROM tbl_pages WHERE status = 1");
																  $fetchPagepar = $crud->getData($getallpar);
																  foreach($fetchPagepar as $pagepar){
															?>
                                                            	<option value="<?php echo $pagepar['id'];?>"><?php echo $pagepar['page_name'];?></option>
                                                            <?php }?>
                                                        </select>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Select Menu Location</label>
                                                    <div class="col-sm-8">
                                                        <select name="menu_type" id="menu_type" required class="form-control">
                                                        	<option value="">--Select Menu Location--</option>
                                                            <option value="1">Header Menu</option>
                                                            <option value="2">Main Menu</option>
                                                            <option value="3">Footer Menu</option>
                                                        </select>
                                                        
                                                    </div>
                                                    
                                                </div>

                                                
                                                <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-primary btn" onclick="return checkmenu($('#parent').val());">Submit</button>
                                <input type="reset" value="Reset" class="btn-inverse btn"/>
                            </div>
                        </div>
                     </div>
                                            </form>
                                    </div>
    </div>
    
</div>