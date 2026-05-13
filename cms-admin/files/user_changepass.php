<?php
$id 	  = html_entity_decode($crud->escape_string($_REQUEST['id'])); 
$sql      = ("SELECT * FROM tbl_admin WHERE admin_type > 1 AND admin_id = '$id'");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_admin WHERE admin_type > 1 AND admin_id = '$id'");
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
        Change Password for :- <?php echo $res[0]['admin_user'];?>
                                        <form class="form-horizontal" name="frm" action="UserAction.php" method="post" autocomplete="off">
                             					<input type="hidden" name="act" value="updatePass" />
                                                <input type="hidden" name="userId" id="userId" value="<?php echo $id;?>"/>
                             
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Enter New Password</label>
                                                    <div class="col-sm-8">
                                                        <input type="password" pattern="^\S{6,}$" onChange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.repass.pattern = this.value;" class="form-control" id="pass" required name="pass" placeholder="Enter Password">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="focusedinput" class="col-sm-4 control-label col-form-label">Re Enter New Password</label>
                                                    <div class="col-sm-8">
                                                        <input type="password" pattern="^\S{6,}$" onChange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" class="form-control" id="repass" required name="repass" placeholder="Re Enter Password">
                                                        
                                                    </div>
                                                    
                                                </div>

                                                
                                                <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-primary btn">Update Password</button>
                            </div>
                        </div>
                     </div>
                                            </form>
                                    </div>
    </div>
    
</div>