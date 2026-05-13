<aside class="text-sm main-sidebar elevation-4 sidebar-light-navy">
    <!-- Brand Logo -->
    <a href="<?php echo site_url("dashboard");?>" class="brand-link">
      <span class="brand-text font-weight-bolder">OnlineExam Portal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            
                    <ul id="side-menu" class="nav examMenu">
                        <li>
                        <div class="examQuNuSection">
                            <div class="mnExam_Qu_number">
                                <ul>
                        <?php
                        if($questions){
                            $questioncount = 1;
                            for($i=0;$i<count($questions);$i++){
                                if($pending){
                                    if(in_array($questions[$i]['q_id'], $quesarr)){
                                        $quests = getFetchData("exams_evaluation", "*", "exam_id = '".$examdata[0]['exam_id']."' AND question_id = '".$questions[$i]['q_id']."' AND student_id = '".$this->session->userdata("student_id")."'");
                                        echo '<li><a href="javascript:;" id="listques'.$questions[$i]['q_id'].'" data-id="'.$questions[$i]['q_id'].'" class="'.$quests[0]['status'].'">'.$questioncount.'</a></li>';
                                    }else{
                                       echo '<li><a href="javascript:;" id="listques'.$questions[$i]['q_id'].'" data-id="'.$questions[$i]['q_id'].'" class="notVisited">'.$questioncount.'</a></li>';
                                    }
                                }else{
                                    echo '<li><a href="javascript:;" id="listques'.$questions[$i]['q_id'].'" data-id="'.$questions[$i]['q_id'].'" class="notVisited">'.$questioncount.'</a></li>';
                                }
                                $questioncount++;
                            }
                        }
                        //echo ' </ul> </div> </div> </li> </ul> </li>';
                        ?>
                       
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>

                            <div class="instructionDiv">

                                <h2>Color Legends</h2>

                               <ul>

                                   <li><span><img src="<?=base_url();?>assets/images/notview.png" width="28" height="28"></span> Not viewed</li>

                                   <li><span><img src="<?=base_url();?>assets/images/answerd.png" width="28" height="28"></span> Answerd</li>

                                   <li><span><img src="<?=base_url();?>assets/images/markforreview.png" width="28" height="28"></span> Marked for review</li>

                                   <li><span><img src="<?=base_url();?>assets/images/notAnswerd.png" width="28" height="28"></span> Viewed but not answered</li>

                                   <li><span><img src="<?=base_url();?>assets/images/answeredAndMarkforreview.png" width="28" height="28"></span> Answered and marked for review</li>

                               </ul>

                           </div>

                        </li>

                    </ul>
        </nav>
    </div>
</aside>