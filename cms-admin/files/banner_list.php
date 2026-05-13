<?php
$sql      = ("SELECT * FROM tbl_banner");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_banner");
$res      = $crud->getData($sql);
//print_r($countRec);exit;
?>
<div class="card">
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php echo $curPage;?>?q=add" class="btn btn-success">Add Banner</a></span></div></div>
    <div class="card-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Banner Name</th>
              <th scope="col">Banner Image</th>
              <th scope="col" colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php if($countRec['total'] > 0){
			foreach($res as $key=> $vals){
			?>
            <tr>
              <th scope="row"><?php echo ($key+1);?></th>
              <td><?php echo $vals['banner_desc'];?></td>
              <td><img src="../banner/<?php echo $vals['banner_img'];?>" width="100" height="50"/></td>
              <td><a href="javascript:void(0);" onclick="return edit(<?php echo $vals['id'];?>);" title="Edit"><i class="fa fa-edit"></i></a></td>
              <td><a href="javascript:void(0);" title="Delete" onclick="return confirmDel(<?php echo $vals['id'];?>,'<?php echo $vals['banner_img'];?>');"><i class="fa fa-trash"></i></a></td>
              <td><?php if($vals['status'] == 1){?><a href="javascript:void(0);" onclick="return disable(<?php echo $vals['id'];?>);"><i class="fa fa-lock-open" title="Lock Banner"></i></a><?php }else{ ?><a href="javascript:void(0);" title="Unlock Banner" onclick="return enable(<?php echo $vals['id'];?>);"><i class="fa fa-lock"></i></a><?php }?></td>
            </tr>
            <?php }}else{ ?>
            <tr><td colspan="6" align="center">Sorry!! No record Found</td></tr>
            <?php }?>
          </tbody>
        </table>
    </div>
    
</div>
<script>
	var actPage = 'BannerAction.php';
	var curPage = '<?php echo $curPage;?>';
	function confirmDel(delId,banimg){
		if(confirm("Are you sure to delete?")){
			document.location.href=actPage+"?act=deletedta&id="+delId+"&img="+banimg;
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
</script>