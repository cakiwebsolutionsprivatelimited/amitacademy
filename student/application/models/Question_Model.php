<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question_Model extends CI_Model {

    function getQuestions($postData=null){
        $response = array();

        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        $columnIndex = $postData['order'][0]['column'];
        $columnName = $postData['columns'][$columnIndex]['data'];
        $columnSortOrder = $postData['order'][0]['dir'];
        $searchValue = $postData['search']['value'];

        $department_id = $postData['department_id'];
        $stream_id = $postData['stream_id'];
        $subject_id = $postData['subject_id'];
        $chapter_id = $postData['chapter_id'];
        $q_status = $postData['q_status'];
        $q_text = $postData['q_text'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        $search_arr[] = " q.delete_status = 0";
        if($searchValue != ''){
            $search_arr[] = " (q_text like '%".$searchValue."%' or q_type like '%".$searchValue."%' or option1_text like'%".$searchValue."%' or option2_text like '%".$searchValue."%' or option3_text like '%".$searchValue."%' or option4_text like '%".$searchValue."%' or option5_text like '%".$searchValue."%' ) ";
        }
        if($department_id != ''){
            $search_arr[] = " q.department_id = '".$department_id."' ";
        }
        if($stream_id != ''){
            $search_arr[] = " q.stream_id = '".$stream_id."' ";
        }
        if($q_text != ''){
            $search_arr[] = " q.q_text LIKE '%".$q_text."%' ";
        }
        if($subject_id != ''){
            $search_arr[] = " q.subject_id = '".$subject_id."' ";
        }
        if($chapter_id != ''){
            $search_arr[] = " q.chapter_id = '".$chapter_id."' ";
        }
        if($q_status != ''){
            $search_arr[] = " q.q_status = '".$q_status."' ";
        }
        if(count($search_arr) > 0){
            $searchQuery = implode(" and ",$search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('erp_questions AS q');
        $this->db->join('erp_departments AS d', ' q.department_id = d.department_id', 'left');
        $this->db->join('erp_stream AS c', ' q.stream_id = c.stream_id', 'left');
        $this->db->join('erp_subjects AS s', ' q.subject_id = s.subject_id', 'left');
        $this->db->join('erp_chapters AS p', ' q.chapter_id = p.chapter_id', 'left');
        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('erp_questions AS q');
        $this->db->join('erp_departments AS d', ' q.department_id = d.department_id', 'left');
        $this->db->join('erp_stream AS c', ' q.stream_id = c.stream_id', 'left');
        $this->db->join('erp_subjects AS s', ' q.subject_id = s.subject_id', 'left');
        $this->db->join('erp_chapters AS p', ' q.chapter_id = p.chapter_id', 'left');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('q.q_id, q.q_text, q.q_image, q.q_type, q.entry_type, q.option1_text, q.option1_img, q.option2_text, q.option2_img, q.option3_text, q.option3_img, q.option4_text, q.option4_img, q.option5_text, q.option5_img, q.option_img, q.correct_option, q.solution_text, q.solution_img, q.course_id, q.subject_id, q.chapter_id, q.created_on, q.created_by, q.q_status, q.delete_status, q.q_remarks, d.department_name, c.stream_name, s.subject_name, p.chapter_name');
        $this->db->from('erp_questions AS q');
        $this->db->join('erp_departments AS d', ' q.department_id = d.department_id');
        $this->db->join('erp_stream AS c', ' q.stream_id = c.stream_id');
        $this->db->join('erp_subjects AS s', ' q.subject_id = s.subject_id');
        $this->db->join('erp_chapters AS p', ' q.chapter_id = p.chapter_id', 'left');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();

        $data = array();

        foreach($records as $record ){
            $data[] = array( 
                'q_id'                  => $record->q_id,
                'q_text'                => substr(strip_tags($record->q_text), 0, 100),
                'q_type'                => $record->q_type,
                'department_name'       => $record->department_name,
                'stream_name'           => $record->stream_name,
                'subject_name'          => $record->subject_name,
                'chapter_name'          => $record->chapter_name,
                'q_status'              => $record->q_status,
                'q_remarks'             => $record->q_remarks,
                "Actions"               => '<a href="'.site_url("questions/edit_question/".$record->q_id).'" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a><a href="'.site_url("questions/delete_question/".$record->q_id).'" onclick="return confirm(\'Are you sure to delete this? \')" class="btn btn-danger btn-sm" title="Edit"><i class="fa fa-trash"></i></a>'
            ); 
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response; 
    }

    function getAllTempQuestion($postData=null){
        $response = array();

        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        $columnIndex = $postData['order'][0]['column'];
        $columnName = $postData['columns'][$columnIndex]['data'];
        $columnSortOrder = $postData['order'][0]['dir'];
        $searchValue = $postData['search']['value'];

        $department_id = $postData['department_id'];
        $stream_id = $postData['stream_id'];
        $subject_id = $postData['subject_id'];
        $chapter_id = $postData['chapter_id'];
        $q_status = $postData['q_status'];
        $q_text = $postData['q_text'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        $search_arr[] = " q.delete_status = 0";
        if($searchValue != ''){
            $search_arr[] = " (q_text like '%".$searchValue."%' or q_type like '%".$searchValue."%' or option1_text like'%".$searchValue."%' or option2_text like '%".$searchValue."%' or option3_text like '%".$searchValue."%' or option4_text like '%".$searchValue."%' or option5_text like '%".$searchValue."%' ) ";
        }
        if($department_id != ''){
            $search_arr[] = " q.department_id = '".$department_id."' ";
        }
        if($stream_id != ''){
            $search_arr[] = " q.stream_id = '".$stream_id."' ";
        }
        if($q_text != ''){
            $search_arr[] = " q.q_text LIKE '%".$q_text."%' ";
        }
        if($subject_id != ''){
            $search_arr[] = " q.subject_id = '".$subject_id."' ";
        }
        if($chapter_id != ''){
            $search_arr[] = " q.chapter_id = '".$chapter_id."' ";
        }
        if($q_status != ''){
            $search_arr[] = " q.q_status = '".$q_status."' ";
        }
        if(count($search_arr) > 0){
            $searchQuery = implode(" and ",$search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('erp_questions_temp AS q');
        $this->db->join('erp_departments AS d', ' q.department_id = d.department_id');
        $this->db->join('erp_stream AS c', ' q.stream_id = c.stream_id');
        $this->db->join('erp_subjects AS s', ' q.subject_id = s.subject_id');
        $this->db->join('erp_chapters AS p', ' q.chapter_id = p.chapter_id', 'left');
        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('erp_questions_temp AS q');
        $this->db->join('erp_departments AS d', ' q.department_id = d.department_id', 'left');
        $this->db->join('erp_stream AS c', ' q.stream_id = c.stream_id', 'left');
        $this->db->join('erp_subjects AS s', ' q.subject_id = s.subject_id', 'left');
        $this->db->join('erp_chapters AS p', ' q.chapter_id = p.chapter_id', 'left');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('q.q_id, q.q_text, q.q_image, q.q_type, q.entry_type, q.option1_text, q.option1_img, q.option2_text, q.option2_img, q.option3_text, q.option3_img, q.option4_text, q.option4_img, q.option5_text, q.option5_img, q.option_img, q.correct_option, q.solution_text, q.solution_img, q.course_id, q.subject_id, q.chapter_id, q.created_on, q.created_by, q.q_status, q.delete_status, q.q_remarks, d.department_name, c.stream_name, s.subject_name, p.chapter_name');
        $this->db->from('erp_questions_temp AS q');
        $this->db->join('erp_departments AS d', ' q.department_id = d.department_id', 'left');
        $this->db->join('erp_stream AS c', ' q.stream_id = c.stream_id', 'left');
        $this->db->join('erp_subjects AS s', ' q.subject_id = s.subject_id', 'left');
        $this->db->join('erp_chapters AS p', ' q.chapter_id = p.chapter_id', 'left');
        if($searchQuery != '')
        $this->db->where($searchQuery);
        
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();

        $data = array();

        foreach($records as $record ){
            $data[] = array( 
                'q_id'                  => $record->q_id,
                'q_text'                => substr(strip_tags($record->q_text), 0, 100),
                'q_type'                => $record->q_type,
                'department_name'       => $record->department_name,
                'stream_name'           => $record->stream_name,
                'subject_name'          => $record->subject_name,
                'chapter_name'          => $record->chapter_name,
                'q_status'              => $record->q_status,
                'q_remarks'             => $record->q_remarks,
                "Actions"               => '<a href="'.site_url("questions/forward_temp_question/".$record->q_id).'" class="btn btn-success btn-sm" title="Forward"><i class="fas fa-share-square"></i></a><a href="'.site_url("questions/view_temp_question/".$record->q_id).'" class="btn btn-primary btn-sm" title="View"><i class="fa fa-eye"></i></a><a href="'.site_url("questions/delete_temp_question/".$record->q_id).'" onclick="return confirm(\'Are you sure to delete this? \')" class="btn btn-danger btn-sm" title="Edit"><i class="fa fa-trash"></i></a>'
            ); 
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response; 
    }
}