<?php
  //error_reporting(0);
  $limit = 4;  
  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
  $start_from = ($page-1) * $limit;  

  $sql = "SELECT * FROM tbl_enquiry";
  //$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_enquiry");
  $res      = $crud->getData($sql);

?>
<div class="card">
    <div class="row"><div class="col-md-4"><h5 class="card-header"><?php echo $pageName;?></h5></div>

    <div class="col-md-4">
  <div class="topnav">
  <div class="search-container">  
  </div>
</div>
</div>

    <!-- <div class="col-md-4"><span style="float:right"><a href="<?php echo $curPage;?>?q=add" class="btn btn-success">Add Expences</a></span></div></div> -->
    <div class="card-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Date</th>
              <th scope="col">First name</th> 
              <th scope="col">Last name</th>
              <th scope="col">Dob</th>
              <th scope="col">Email</th>
              <th scope="col">Phone No</th>            
              <th scope="col">Address</th>  
              <th scope="col">Stream</th> 
              <th scope="col">Reference Name</th>
              <th scope="col">Passout From</th>
              <th scope="col">Stream</th>
              <th scope="col">Marks</th>            
              <th scope="col">Caste</th>  
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach($res as $key=> $vals){
                $key =1;
            ?>
            <tr>
              <th scope="row"><?php echo $key++;?></th> 
              <td><?php echo date('d M Y',strtotime($vals[' entry_date ']));?></td>
              <td><?php echo $vals['firstname'];?></td>
              <td><?php echo $vals['lastname'];?></td>
              <td><?php echo $vals['dob'];?></td>              
              <td><?php echo $vals['email'];?></td>
              <td><?php echo $vals['phone'];?></td>    
              <td><?php echo $vals['address'];?></td>
              <td><?php echo $vals['depart'];?></td>
              <td><?php echo $vals['refname'];?></td>              
              <td><?php echo $vals['passclgname'];?></td>
              <td><?php echo $vals['stream'];?></td>
              <td><?php echo $vals['marks'];?></td>
              <td><?php echo $vals['caste'];?></td>
            </tr>
            <?php }?>
             
          </tbody>
        </table>
        
    </div>
    
</div>

