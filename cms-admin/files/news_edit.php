<?php
$id 	  = html_entity_decode($crud->escape_string($_REQUEST['id'])); 
$sql      = ("SELECT * FROM tbl_news WHERE id = '$id'");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_news WHERE id = '$id'");
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
        	<form class="form-horizontal" name="frm" action="NewsAction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                             					<input type="hidden" name="act" value="updnews" />
                                                <input type="hidden" name="newsId" id="newsId" value="<?php echo $id;?>"/>
                                                <input type="hidden" name="hdnimg" id="hdnimg" value="<?php echo $res[0]['image'];?>"/>
                             
                                                
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">News Title</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="news_title" value="<?php echo $res[0]['news_title'];?>" class="form-control" id="news_title" required maxlength="250" />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Published On</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" name="publishedon" class="form-control" value="<?php echo $res[0]['publishedon'];?>" id="publishedon" required />
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Featured Image</label>
                                                    <div class="col-sm-8">
                                                    	<input type="file" name="image" id="image" class="form-control"/>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <?php if($res[0]['image'] != ''){?>
                                                <div class="form-group">
                                                    <div class="col-sm-8">
                                                    	<img src="../news/<?php echo $res[0]['image'];?>" width="100" height="50"/>
                                                    </div>
                                                </div>
												<?php }?>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Description</label>
                                                    <div class="col-sm-12">
                                                    	<textarea name="description" id="description" required><?php echo $res[0]['description'];?></textarea>
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