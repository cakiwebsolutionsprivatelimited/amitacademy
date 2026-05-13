<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view("common/meta");?>
        <link href="<?=base_url();?>assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?=base_url();?>assets/dist/css/exam.css" rel="stylesheet">
        <style type="text/css">
        #frmExamQuestion .individualsQuestion{
            display:none;
        }
        .navbar{
            padding: 0px;
        }
        </style>
    </head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">
<div class="wrapper">
<!-- Navbar -->
<?php $this->load->view("common/exam-top");?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php $this->load->view("common/exam-sidebar");?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
                            <form method="post" id="frmExamQuestion" name="frmExamQuestion">
                            <div class="row">
                                

                                <?php
                                if($questions){
                                    $questioncount = 1;
                                    for($i=0;$i<count($questions);$i++){
                                        $singlecheck = '';
                                        $multicheck = array();
                                        if($pending){
                                            if(in_array($questions[$i]['q_id'], $quesarr)){
                                                $quests = getFetchData("exams_evaluation", "*", "exam_id = '".$examdata[0]['exam_id']."' AND question_id = '".$questions[0]['q_id']."' AND student_id = '".$this->session->userdata("student_id")."'");
                                                $singlecheck = $quests[0]['question_answer'];
                                                $multicheck = explode(',',$quests[0]['question_answer']);
                                            }
                                        }
                                ?>
                                <div class="col-lg-12 individualsQuestion" id="questionno_<?php echo $questions[$i]['q_id'];?>" data-id="<?php echo $questions[$i]['q_id'];?>">

                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <?php echo 'Q : '.$questioncount.' - ';?>
                                        </div>
                                        <div class="panel-body">
                                            <div class="examQuestion">
                                                <div class="questiontext">
                                                    <p><?php echo $questions[$i]['q_text'];
                                                    if($questions[$i]['q_image'] != ''){ 
                                                        echo '<br/><img src="portal/uploads/'.$questions[$i]['q_image'].'" />';
                                                    }
                                                    ?>
                                                    </p>
                                                </div>
                                                <div class="optionsdiv">

                                                    <div style="float: left; width: 100%;" class="answersBlock">

                                                        <?php if($questions[$i]['q_type'] == 'Single Radio'){?>
                                                        <div class="answerOptions" id="singleAnswerOptions">

                                                            <div class="control-group">

                                                                <div class="controls">

                                                                    <?php if($questions[$i]['option1_text'] != '' || $questions[$i]['option1_img'] != ''){ ?>

                                                                    <label class="radio">

                                                                    <input type="radio" class="placedradio" name="<?php echo $questions[$i]['q_id'];?>" id="radio1_<?php echo $questions[$i]['q_id'];?>" value="1" <?php echo ($singlecheck == '1')? 'checked="checked"' : '';?>>

                                                                    <label class="inputplacer">1</label>

                                                                    <div class="optiontext">

                                                                        <p><?php echo $questions[$i]['option1_text'];

                                                                            if($questions[$i]['option1_img'] != ''){

                                                                                echo '<img src="portal/uploads/'.$questions[$i]['option1_img'].'" />';

                                                                            }

                                                                            ?></p>

                                                                    </div>

                                                                    </label>

                                                                    <div style="clear:both"></div>

                                                                    <?php }?>

                                                                    

                                                                    <?php if($questions[$i]['option2_text'] != '' || $questions[$i]['option2_img'] != ''){ ?>

                                                                    <label class="radio">

                                                                    <input type="radio" class="placedradio" name="<?php echo $questions[$i]['q_id'];?>" id="radio2_<?php echo $questions[$i]['q_id'];?>" value="2" <?php echo ($singlecheck == '2')? 'checked="checked"' : '';?>>

                                                                    <label class="inputplacer">2</label>

                                                                    <div class="optiontext">

                                                                        <p><?php echo $questions[$i]['option2_text'];

                                                                            if($questions[$i]['option2_img'] != ''){

                                                                                echo '<img src="portal/uploads/'.$questions[$i]['option2_img'].'" />';

                                                                            }

                                                                            ?></p>

                                                                    </div>

                                                                    </label>

                                                                    <div style="clear:both"></div>

                                                                    <?php }?>

                                                                    

                                                                    <?php if($questions[$i]['option3_text'] != '' || $questions[$i]['option3_img'] != ''){ ?>

                                                                    <label class="radio">

                                                                    <input type="radio" class="placedradio" name="<?php echo $questions[$i]['q_id'];?>" id="radio3_<?php echo $questions[$i]['q_id'];?>" value="3"  <?php echo ($singlecheck == '3')? 'checked="checked"' : '';?>>

                                                                    <label class="inputplacer">3</label>

                                                                    <div class="optiontext">

                                                                        <p><?php echo $questions[$i]['option3_text'];

                                                                            if($questions[$i]['option3_img'] != ''){

                                                                                echo '<img src="portal/uploads/'.$questions[$i]['option3_img'].'" />';

                                                                            }

                                                                            ?></p>

                                                                    </div>

                                                                    </label>

                                                                    <div style="clear:both"></div>

                                                                    <?php }?>

                                                                    

                                                                    <?php if($questions[$i]['option4_text'] != '' || $questions[$i]['option4_img'] != ''){ ?>

                                                                    <label class="radio">

                                                                    <input type="radio" class="placedradio" name="<?php echo $questions[$i]['q_id'];?>" id="radio4_<?php echo $questions[$i]['q_id'];?>" value="4" <?php echo ($singlecheck == '4')? 'checked="checked"' : '';?>>

                                                                    <label class="inputplacer">4</label>

                                                                    <div class="optiontext">

                                                                        <p><?php echo $questions[$i]['option4_text'];

                                                                            if($questions[$i]['option4_img'] != ''){

                                                                                echo '<img src="portal/uploads/'.$questions[$i]['option4_img'].'" />';

                                                                            }

                                                                            ?></p>

                                                                    </div>

                                                                    </label>

                                                                    <div style="clear:both"></div>

                                                                    <?php }?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>

                                                        <input type="hidden" value="<?php echo $questions[$i]['subject_id'];?>" name="questionSubject<?php echo $questions[$i]['q_id'];?>">

                                                        <input type="hidden" value="<?php echo $questions[$i]['q_id'];?>" name="questionid<?php echo $questions[$i]['q_id'];?>" id="questionid<?php echo $questions[$i]['q_id'];?>">

                                                        <input type="hidden" value="<?php echo $questions[$i]['q_type'];?>" name="questiontype<?php echo $questions[$i]['q_id'];?>" id="questiontype<?php echo $questions[$i]['q_id'];?>">

                                                        <input type="hidden" value="0" class="individualtimer" name="individualtimer<?php echo $questions[$i]['q_id'];?>" id="individualtimer<?php echo $questions[$i]['q_id'];?>" data-id="<?php echo $questions[$i]['q_id'];?>"/>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-footer float-left" style="width: 100%;">

                                            <input type="button" data-id="<?php echo $questions[$i]['q_id'];?>" data-serial="<?php echo $questioncount;?>" value="Mark For Review & Next" class="btn btn-primary markReview" name="markReview<?php echo $questioncount;?>">

                                            <input type="button" data-id="<?php echo $questions[$i]['q_id'];?>" data-serial="<?php echo $questioncount;?>" value="Clear Response" class="btn btn-default clearOptions" name="clearOptions<?php echo $questioncount;?>">

                                            

                                            <input type="button" data-id="<?php echo $questions[$i]['q_id'];?>" data-serial="<?php echo $questioncount;?>" style="" value="Save & Next" class="btn btn-success float-right nextQuestion" name="nextQuestion<?php echo $questioncount;?>">

                                        </div>

                                    </div>

                                </div>
                                <?php
                                        $questioncount++;
                                    }
                                }
                                ?>

                                <input type="hidden" name="examtimer" value="<?php echo ($pending == 1)? $examresdata[0]['exam_time_taken'] : '1';?>" class="examtimerfld">

                                <input type="hidden" name="examid" value="<?php echo $examdata[0]['exam_id'];?>" />

                                <input type="hidden" name="action" value="endexam" />

                            
                            </div>
                            </form>
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
<script type="text/javascript" src="<?=base_url();?>assets/plugins/countdown/jquery.plugin.js"></script> 
<script type="text/javascript" src="<?=base_url();?>assets/plugins/countdown/jquery.countdown.js"></script>
<script src="<?=base_url();?>assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var steps = $('#frmExamQuestion').find(".individualsQuestion");
        var count = $(".individualsQuestion").length;
    
        $('#frmExamQuestion .clearOptions').click(function(){
            var quesNo = $(this).attr('data-id');
            $('#questionno_'+quesNo+' input[type="radio"]').prop('checked', false);
            $('#questionno_'+quesNo+' input[type="checkbox"]').prop('checked', false);
            $('.clrres').attr("checked","checked");
        });
        
        $('#frmExamQuestion .nextQuestion').click(function(){
            var endcnt = Number($(this).attr('data-serial')) + 1;
            var quesNo = $(this).attr('data-id');
            if($( '#questionno_'+quesNo+' input[name="' + quesNo + '"]:checked'  ).length > 0 || $('#questionno_'+quesNo+' input[name="' + quesNo + '[]"]:checked' ).length > 0){
                $("#listques"+quesNo).removeClass();
                $("#listques"+quesNo).addClass("answered");
                var answer = '';
                //if($("#questiontype"+quesNo).val() == 'single'){
                answer = $( '#questionno_'+quesNo+' input[name="' + quesNo + '"]:checked' ).val();
                //}else if($("#questiontype"+quesNo).val() == 'multi'){
                //    answer = $( '#questionno_'+quesNo+' input[name="' + quesNo + '[]"]:checked' ).map(function() {  return $( this ).val();  }).get().join( "," );
                //}
                $.post(
                    '<?=site_url("ajax_requests/saveandnext")?>',
                    'action=saveandnext&examid='+<?php echo $examdata[0]['exam_id'];?>+'&questionid='+quesNo+'&timetaken='+$("#individualtimer"+quesNo).val()+'&answer='+answer,
                    function(data){
                      
                    },"json"
                );
            }else{
                $("#listques"+quesNo).removeClass();
                $("#listques"+quesNo).addClass("notAnswered");
                $.post(
                    '<?=site_url("ajax_requests/saveandnextun")?>',
                    'action=saveandnextun&examid='+<?php echo $examdata[0]['exam_id'];?>+'&questionid='+quesNo+'&timetaken='+$("#individualtimer"+quesNo).val(),
                    function(data){
                        
                    },"json"
                );
            }
            if(endcnt > count){
                alert("This is the last question.");
            }else{
                var NxtquesNo = $("#frmExamQuestion #questionno_" + quesNo).next();
                $("#frmExamQuestion #questionno_" + quesNo).hide();
                NxtquesNo.show();
            }
        });
        
        $('#frmExamQuestion .markReview').click(function(){
            var endcnt = Number($(this).attr('data-serial')) + 1;
            var quesNo = $(this).attr('data-id');
            if($( '#questionno_'+quesNo+' input[name="' + quesNo + '"]:checked'  ).length > 0 || $('#questionno_'+quesNo+' input[name="' + quesNo + '[]"]:checked' ).length > 0){
                $("#listques"+quesNo).removeClass();
                $("#listques"+quesNo).addClass("markedForRiview ");
                var answer = '';
                if($("#questiontype"+quesNo).val() == 'single'){
                    answer = $( '#questionno_'+quesNo+' input[name="' + quesNo + '"]:checked' ).val();
                }else if($("#questiontype"+quesNo).val() == 'multi'){
                    answer = $( '#questionno_'+quesNo+' input[name="' + quesNo + '[]"]:checked' ).map(function() {  return $( this ).val();  }).get().join( "," );
                }
                $.post(
                    '<?=site_url("ajax_requests/saveandmark")?>',
                    'action=saveandmark&examid='+<?php echo $examdata[0]['exam_id'];?>+'&questionid='+quesNo+'&timetaken='+$("#individualtimer"+quesNo).val()+'&answer='+answer,
                    function(data){
                        

                    },"json"
                );
            }else{
                $("#listques"+quesNo).removeClass();
                $("#listques"+quesNo).addClass("marked");
                $.post(
                    '<?=site_url("ajax_requests/saveandnext")?>',
                    'action=markandnext&examid='+<?php echo $examdata[0]['exam_id'];?>+'&questionid='+quesNo+'&timetaken='+$("#individualtimer"+quesNo).val(),
                    function(data){
                        
                    },"json"
                );
            }
            if(endcnt > count){
                alert("This is the last question.");
            }else{
                var NxtquesNo = $("#frmExamQuestion #questionno_" + quesNo).next();
                $("#frmExamQuestion #questionno_" + quesNo).hide();
                NxtquesNo.show();
            }
        });
        
        $('.mnExam_Qu_number ul li a').click(function(){
            var qid = $(this).attr('data-id');
            var quesNo = $( "div.individualsQuestion:visible").attr('data-id');
            if($( '#questionno_'+quesNo+' input[name="' + quesNo + '"]:checked'  ).length > 0 || $('#questionno_'+quesNo+' input[name="' + quesNo + '[]"]:checked' ).length > 0){
                $("#listques"+quesNo).removeClass();
                $("#listques"+quesNo).addClass("answered");
                var answer = '';
                if($("#questiontype"+quesNo).val() == 'single'){
                    answer = $( '#questionno_'+quesNo+' input[name="' + quesNo + '"]:checked' ).val();
                }else if($("#questiontype"+quesNo).val() == 'multi'){
                    answer = $( '#questionno_'+quesNo+' input[name="' + quesNo + '[]"]:checked' ).map(function() {  return $( this ).val();  }).get().join( "," );
                }
                $.post(
                    '<?=site_url("ajax_requests/saveandnext")?>',
                    'action=saveandnext&examid='+<?php echo $examdata[0]['exam_id'];?>+'&questionid='+quesNo+'&timetaken='+$("#individualtimer"+quesNo).val()+'&answer='+answer,
                    function(data){
                       
                    },"json"
                );
            }else{
                $("#listques"+quesNo).removeClass();
                $("#listques"+quesNo).addClass("notAnswered");
                $.post(
                    '<?=site_url("ajax_requests/saveandnextun")?>',
                    'action=saveandnextun&examid='+<?php echo $examdata[0]['exam_id'];?>+'&questionid='+quesNo+'&timetaken='+$("#individualtimer"+quesNo).val(),
                    function(data){
                       
                    },"json"
                );
            }
            $("#frmExamQuestion .individualsQuestion").hide();
            $("#frmExamQuestion #questionno_" + qid).show();
        });
        function submit(){
            
            $.ajax({
                type: "POST",
                url: "<?=site_url("ajax_requests/saveandnext")?>",
                data: $('#frmExamQuestion').serialize(),
                success: function(msg) {
                    $('#defaultCountdown').countdown('pause');
                }
            });
        }
        
    });
    window.addEventListener('load', function () {
        $("#pageLoading").fadeOut();
        $(".individualsQuestion").first().show();
        var interval1 = setInterval(function () {
            var currentQues = $(".individualsQuestion:visible");
            currentQues.find('.individualtimer').val(parseInt(currentQues.find('.individualtimer').val())+1);
        }, 1000);
        var interval2 = setInterval(function () {
            $('.examtimerfld').val(parseInt($('.examtimerfld').val())+1);
        }, 1000);
        var interval3 = setInterval(function () {
            $.post(
                '<?=site_url("ajax_requests/updateexamtime")?>',
                'action=updateexamtime&examid='+<?php echo $examdata[0]['exam_id'];?>+'&studentid='+<?php echo $this->session->userdata("student_id");?>+'&timetaken='+$('.examtimerfld').val(),
                function(data){
                    
                },"json"
            );
        }, 700);
        $('#defaultCountdown').countdown({until: +<?php if(isset($examDuration)){ echo $examDuration; } ?>,compact: true, onExpiry: liftOff});
        function liftOff() { 
            alert('The scheduled time for your exam has ended.');
            submit();
        }
        function submit(){
            clearInterval(interval1); // stop the interval
            clearInterval(interval2);
            clearInterval(interval3);
            $.ajax({
                type: "POST",
                url: "<?=site_url("ajax_requests/endexam")?>",
                data: $('#frmExamQuestion').serialize(),
                success: function(msg) {
                    if(msg == 'success'){
                        $('#defaultCountdown').countdown('pause');
                        window.location.href = '<?php echo site_url("dashboard/exam_result/".$examdata[0]['exam_id']."/".$this->session->userdata("student_id"));?>';
                    }
                    
                }
            });
        }
        $(".endExamside").on('click',function(){
            var r = confirm('Are you sure to end the exam?');
            if(r == true){
                $("#pageLoading").show();
                submit();
            }
        });
    });
</script>
</body>
</html>