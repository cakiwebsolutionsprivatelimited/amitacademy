<?php
$sql      = ("SELECT * FROM tbl_admin WHERE admin_type > 1");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_admin WHERE admin_type > 1");
$res      = $crud->getData($sql);
//print_r($countRec);exit;
?>
<div class="card">
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php echo $curPage;?>?q=add" class="btn btn-success">Add User</a></span></div></div>
    <div class="card-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">User Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mob</th>
              <th scope="col" colspan="4">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php if($countRec['total'] > 0){
			foreach($res as $key=> $vals){
			?>
            <tr>
              <th scope="row"><?php echo ($key+1);?></th>
              <td><?php echo $vals['admin_name'];?></td>
              <td><?php echo $vals['admin_user'];?></td>
              <td><?php echo $vals['admin_email'];?></td>
              <td><?php echo $vals['admin_phone'];?></td>
              <td><a href="javascript:void(0);" onclick="return edit(<?php echo $vals['admin_id'];?>);" title="Edit"><i class="fa fa-edit"></i></a></td>
              <td><a href="javascript:void(0);" title="Delete" onclick="return confirmDel(<?php echo $vals['admin_id'];?>);"><i class="fa fa-trash"></i></a></td>
              <td><?php if($vals['admin_status'] == 1){?><a href="javascript:void(0);" onclick="return disable(<?php echo $vals['admin_id'];?>);"><i class="fa fa-lock-open" title="Lock User"></i></a><?php }else{ ?><a href="javascript:void(0);" title="Unlock User" onclick="return enable(<?php echo $vals['admin_id'];?>);"><i class="fa fa-lock"></i></a><?php }?></td>
              <td><a href="javascript:void(0);" onclick="return changepass(<?php echo $vals['admin_id'];?>);" title="Change Password"><i class="fa fa-key"></i></a></td>
            </tr>
            <?php }}else{ ?>
            <tr><td colspan="6" align="center">Sorry!! No record Found</td></tr>
            <?php }?>
          </tbody>
        </table>
    </div>
    
</div>
<script>
	var actPage = 'UserAction.php';
	var curPage = '<?php echo $curPage;?>';
	function confirmDel(delId){
		if(confirm("Are you sure to delete?")){
			document.location.href=actPage+"?act=deletedta&id="+delId;
		}
	}
	
	function enable(Id){
		document.location.href=actPage+"?act=enable&id="+Id;
	}
	
	function disable(Id){
		document.location.href=actPage+"?act=disable&id="+Id;
	}
	
	function edit(Id){
		document.location.href=curPage+"?q=edit&id="+Id;
	}
	
	function changepass(Id){
		document.location.href=curPage+"?q=changepass&id="+Id;
	}
</script>