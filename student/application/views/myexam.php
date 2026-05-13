<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view("common/meta");?>
        <link href="<?=base_url();?>assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
    </head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">
<div class="wrapper">
<!-- Navbar -->
<?php $this->load->view("common/topnav");?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php $this->load->view("common/sidebar");?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Exam List</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1">Success !</strong> <?=$this->session->flashdata('success')?>
            </div>
            <?php }?>
            <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1">Error !</strong> <?=$this->session->flashdata('error')?>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Exam List</h3>
                </div>
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table width="100%" class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Duration</th>
                                        <th>Subject Name</th>
                                        <th>No of Questions</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="font11">
                                    <?php
                                    if($records){
                                    $j=1;
                                    for($i=0;$i<count($records);$i++){
                                        if($records[$i]['noofques'] == 0){
                                            continue;
                                        }
                                    ?>
                                    <tr>
                                        <td><?=$records[$i]['exam_title'];?></td>
                                        <td><?=$records[$i]['exam_duration'];?></td>
                                        <td><?=$records[$i]['subject_name'];?></td>
                                        <td><?=$records[$i]['noofques'];?></td>
                                        <td><?=$records[$i]['exam_status'];?></td>
                                        <td>
                                            <?php 
                                            $re = getFetchData("erp_exams_result", "*", "exam_status = 'appeared' AND student_id = '".$this->session->userdata("student_id")."'");
                                            if($re){
                                            ?>
                                            <a href="<?php echo site_url("dashboard/exam_result/".$records[$i]['exam_id']."/".$this->session->userdata("student_id"));?>" class="btn btn-primary btn-sm" title="Show Result">Show Result</a>
                                            
                                            <?php 
                                            }else{
                                            ?>
                                            <a href="<?php echo site_url("dashboard/show_exam/".$records[$i]['exam_id']);?>" class="btn btn-danger btn-sm" title="Take Exam" onclick="return confirm('Are you sure to start the exam you have only one attempt?');">Take Exam</a>
                                            <?php 
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                    <?php

                                    $j++;

                                    }

                                    }else{

                                    ?> 

                                    <tr>

                                    <td colspan="6">No records found.</td>

                                    </tr>

                                    <?php

                                    }

                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
</section>
</div>
<!-- /.content-wrapper -->
<?php $this->load->view("common/footer");?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->load->view("common/script");?>
<script src="<?=base_url();?>assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>
<script type="text/javascript">
    $(function () {
        
    });
</script>
</body>
</html>