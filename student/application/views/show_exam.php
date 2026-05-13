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
                    <h3 class="card-title">Exam Details : <?=$examdata[0]['exam_title'];?></h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Subject</span>
                                    <span class="info-box-number text-center text-muted mb-0"><?=$examdata[0]['subject_name'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Total Questions</span>
                                    <span class="info-box-number text-center text-muted mb-0"><?=$examdata[0]['noofques'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Exam duration</span>
                                    <span class="info-box-number text-center text-muted mb-0"><?=$examdata[0]['exam_duration'];?><span>
                                    </span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Positive Mark</span>
                                    <span class="info-box-number text-center text-muted mb-0"><?=$examdata[0]['exam_positive_mark'];?><span>
                                    </span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Negative Mark</span>
                                    <span class="info-box-number text-center text-muted mb-0"><?=$examdata[0]['exam_negative_mark'];?><span>
                                    </span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <?=stripslashes($examdata[0]['exam_instruction']);?>
                        </div>
                        <div class="col-md-12">
                            <a href="<?=site_url("dashboard/run_exam/".$examdata[0]['exam_id']);?>" class="btn btn-danger" onclick="return confirm('Yes, I have read the exam intruction. I can appear the exam now.');">Proceed</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
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