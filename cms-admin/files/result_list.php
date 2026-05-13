<?php

$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;

$sql      = ("SELECT * FROM tbl_result ORDER BY id ASC LIMIT $start_from, $limit");
$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_result");
$res      = $crud->getData($sql);
//print_r($countRec);exit;
?>
<div class="card">
    <div class="row"><div class="col-md-6"><h5 class="card-header"><?php echo $pageName;?></h5></div><div class="col-md-6"><span style="float:right"><a href="<?php echo $curPage;?>?q=add" class="btn btn-success">Add Result</a></span></div></div>
    <div class="card-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Result</th>
              <th scope="col">Type</th>
              <th scope="col">Published Date</th>
              <th scope="col" colspan="3">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php if($countRec['total'] > 0){
			foreach($res as $key=> $vals){
			?>
            <tr>
              <th scope="row"><?php echo ($key+1);?></th>
              <td><?php echo $vals['title'];?></td>
              <td><?php if($vals['type'] == 1){ echo 'Descriptive';}else if($vals['type'] == 2){ echo 'File';}else if($vals['type'] == 3){ echo 'Link';}?></td>
              <td><?php echo date('d M Y',strtotime($vals['entry_date']));?></td>
              <td><a href="javascript:void(0);" onclick="return edit(<?php echo $vals['id'];?>);" title="Edit"><i class="fa fa-edit"></i></a></td>
              <td><a href="javascript:void(0);" title="Delete" onclick="return confirmDel(<?php echo $vals['id'];?>,'<?php echo $vals['file'];?>');"><i class="fa fa-trash"></i></a></td>
              <td><?php if($vals['status'] == 1){?><a href="javascript:void(0);" onclick="return disable(<?php echo $vals['id'];?>);"><i class="fa fa-lock-open" title="Lock Banner"></i></a><?php }else{ ?><a href="javascript:void(0);" title="Unlock Banner" onclick="return enable(<?php echo $vals['id'];?>);"><i class="fa fa-lock"></i></a><?php }?></td>
            </tr>
            <?php }}else{ ?>
            <tr><td colspan="6" align="center">Sorry!! No record Found</td></tr>
            <?php }?>
          </tbody>
        </table>
        <?php              
            echo $crud->pageNumber('tbl_result', $page, $limit, '?');
          ?>
    </div>
    
</div>
<script>
	var actPage = 'ResultAction.php';
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