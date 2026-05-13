<?php
if(isset($_POST['del'])){
    $img = $crud->escape_string($_REQUEST['img']);
    $ck_id = $_POST['checkbox'];
    foreach($ck_id as $del_id){
       $respond = $crud->delete($del_id,"tbl_gallery","id");
    }
    if($respond){
			unlink('../gallery/'.$img);
			setMessage("Record Deleted Successfully.","alert alert-success");?>
			<script>
			    window.location="manage-gallery.php";
			</script>
			
	<?php	}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");?>
			<script>
			    window.location="manage-gallery.php";
			</script>
	<?php	}
}

$sql      = ("SELECT *,(SELECT title FROM tbl_category WHERE tbl_category.id = tbl_gallery.image_category) as img_cat FROM tbl_gallery");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_gallery");
$res      = $crud->getData($sql);
//print_r($countRec);exit;

?>
<div class="card">
    <div class="row">
        <div class="col-md-6">
            <h5 class="card-header"><?php echo $pageName;?></h5>
            </div>
            <div class="col-md-6">
                <span style="float:right"><a href="<?php echo $curPage;?>?q=add" class="btn btn-success">Add Gallery</a></span>
                <span style="float:right"><a href="manage-category.php?q=add" class="btn btn-success" style="background-color:red;">Add Category</a></span>
            </div>
            </div>
    <div class="card-body">
        <form name="" action="manage-gallery.php" method="post" onsubmit="return confirmDelid(<?php echo $res[0]['id'];?>,'<?php echo $vals[0]['image'];?>');">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th><input type="checkbox" id="checkall"/>Select All</th>
              <th scope="col">#</th>
              <th scope="col">Gallery Type</th>
              <th scope="col">Category Name</th>
              <th scope="col">Image/Video</th>
              <th scope="col" colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php if($countRec['total'] > 0){
			foreach($res as $key=> $vals){
			?>
            <tr>
              <th><input class="cb-element" name="checkbox[]" type="checkbox" value="<?php echo $vals['id']; ?>"></th>
              <th scope="row"><?php echo ($key+1);?></th>
              <td><?php echo ($vals['type'] == 1)?'Image':'Video';?></td>
              <td><?php echo ($vals['type'] == 1)?$vals['img_cat']:'NaN';?></td>
              <td><?php if($vals['type'] ==1){?><img src="../gallery/<?php echo $vals['image'];?>" width="100" height="50"/><?php }else{?> <iframe width="100" height="50" src="<?php echo $vals['embedlink'];?>">
</iframe>
 <?php }?></td>
              <td><a href="javascript:void(0);" onclick="return edit(<?php echo $vals['id'];?>);" title="Edit"><i class="fa fa-edit"></i></a></td>
              <!--<td><a href="javascript:void(0);" title="Delete" onclick="return confirmDel(<?php echo $vals['id'];?>,'<?php echo $vals['image'];?>');"><i class="fa fa-trash"></i></a></td>-->
              <td><?php if($vals['status'] == 1){?><a href="javascript:void(0);" onclick="return disable(<?php echo $vals['id'];?>);"><i class="fa fa-lock-open" title="Lock Gallery"></i></a><?php }else{ ?><a href="javascript:void(0);" title="Unlock Gallery" onclick="return enable(<?php echo $vals['id'];?>);"><i class="fa fa-lock"></i></a><?php }?></td>
            </tr>
            <?php }}else{ ?>
            <tr><td colspan="6" align="center">Sorry!! No record Found</td></tr>
            <?php }?>
          </tbody>
        </table>
        <input type="submit" name="del" value="Delete">
        </form>
    </div>
    
</div>
<script>
	var actPage = 'GalleryAction.php';
	var curPage = '<?php echo $curPage;?>';
	
	/*function confirmDel(delId,banimg){
		if(confirm("Are you sure to delete?")){
			document.location.href=actPage+"?act=deletedta&id="+delId+"&img="+banimg;
		}
	}
	*/
	function confirmDelid(delId,banimg){
		var result = confirm("Are you sure to delete?");
		if(result){
		    document.location.href="manage-gallery.php?id="+delId+"&img="+banimg;
		    return true;
		}else{
		    document.location.href="manage-gallery.php";
		    return false;
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
