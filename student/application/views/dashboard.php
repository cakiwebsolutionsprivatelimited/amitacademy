<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <?php $this->load->view('common/meta');?>

<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('common/topnav');?>
  <!-- /.navbar -->
  <?php $this->load->view('common/sidebar');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <?php
            if($records){
            $j=1;
            for($i=0;$i<count($records);$i++){
                if($records[$i]['noofques'] == 0){
                    continue;
                }
            ?>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?=$records[$i]['exam_title']?></h5>

                <p class="card-text">
                  Subject : <?=$records[$i]['subject_name']?>, Total No of Questions : <?=$records[$i]['noofques']?>, Duration : <?=$records[$i]['exam_duration']?>
                </p>

                <a href="<?php echo site_url("dashboard/exam_result/".$records[$i]['exam_id']."/".$this->session->userdata("student_id"));?>" class="card-link">Show Exam</a>
              </div>
            </div>
            <?php
              $j++;
              }
            }
            ?> 
          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Main Footer -->
  <?php $this->load->view('common/footer');?>
</div>
<?php $this->load->view('common/script');?>
</body>
</html>