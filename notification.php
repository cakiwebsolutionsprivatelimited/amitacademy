

<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Amit College - Bhubaneswar  </title>	

		<meta name="keywords" content="Amit  College Bhubaneswar" />
		<meta name="description" content="Amit  College Bhubaneswar">
		<meta name="author" content="Amit  College Bhubaneswar">
        <link rel="canonical" href="https://amitcollege.org.in/notification.php" />

<?php 
	include "header.php";
?>

<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-color:#040452!important;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8" style="color:white!important;">Notification</h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active" style="color:white!important;">Notification</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">
					
					<div class="row">
						<div class="col">
							<div class="blog-posts">

								<div class="row">

									
							<!--	<p style="font-size:24px; font-weight:bold;">View Notice Details</p><br>-->
							
								            
								  <table class="table table-bordered table-striped" id="tbl" style="border:1px solid gray; margin-top:24px; margin-left:auto; margin-right:auto; width:100%;">
								    <thead>
								      <tr>
								        <th>Sl#</th>
								        <th>Letter Date</th>
								        <th>Letter No.</th>
								        <th>Subject</th>
								        <th>Document</th>
								      </tr>
								    </thead>
								    <tbody>
							    <?php 
							    	$sl = 1;
							    	$sql = "select * from tbl_notification where status=1 ORDER BY ID DESC";
							    	$r = $crud->getData($sql);
							    	foreach($r as $key=>$vl){
							    ?>
							      <tr>
							        <td><?php echo $sl++;?></td>
							        <td><?php echo $vl['entry_date'];?></td>
							        <td><?php echo $vl['letter_no'];?></td>
							        <td><?php echo $vl['notification'];?></td>
							        <td><a href="notification/<?php echo $vl['file'];?>" target="_blank"><i class="fa fa-file-pdf-o" style="color: red; font-size:21px;" aria-hidden="true"></i></a></td>
							      </tr>
							      <?php }?>
							  </tbody>
							</table>
									
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

	<?php 
		include "footer.php";
	?>
