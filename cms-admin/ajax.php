<?php 
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$crud = new Crud();
$action = $_REQUEST['act'];
switch($action){		
	case "getAlladmitstudent":{	
		$branchId = $crud->escape_string($_REQUEST['branchId']);
		$session  = $crud->escape_string($_REQUEST['session']);
		if($branchId > 0){
			$chkquery = $crud->countRec("SELECT COUNT(1) as tot FROM tbl_admission WHERE session IN ('$session')");
			if($chkquery['tot'] > 0){
				$sql 	  = "SELECT id,sname FROM tbl_student WHERE status = 1 AND branch = '$branchId' AND id NOT IN (SELECT studentid FROM tbl_admission WHERE session IN ('$session'))";	
			}else{
				$sql 	  = "SELECT id,sname FROM tbl_student WHERE status = 1 AND branch = '$branchId'";	
			}
			//echo $sql;exit;
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	
	case "loadfeelist":{	
		$branchId = $crud->escape_string($_REQUEST['branchId']);
		$classid  = $crud->escape_string($_REQUEST['classid']);
		if($branchId > 0){
			$sql 	  = "SELECT id,fees_desc,amount FROM tbl_fees WHERE status = 1 AND branch = '$branchId' AND class = '$classid'";
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	case "getDetailsins":{	
		$installmentId = $crud->escape_string($_REQUEST['installmentId']);
		if($installmentId > 0){
			$sql 	  = "SELECT * FROM tbl_installment_paid WHERE installid = '$installmentId'";
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	
	case "getAllstudent":{	
		$branchId = $crud->escape_string($_REQUEST['branchId']);
		$session  = $crud->escape_string($_REQUEST['session']);
		if($branchId > 0){
			$sql 	  = "SELECT id,sname FROM tbl_student WHERE status = 1 AND branch = '$branchId' AND id IN (SELECT studentid FROM tbl_admission WHERE session IN ('$session'))";	
			//echo $sql;exit;
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	
	case "getallAccessories":{	
		$branchId = $crud->escape_string($_REQUEST['branchId']);
		$session  = $crud->escape_string($_REQUEST['session']);
		$studentId= $crud->escape_string($_REQUEST['studentId']);
		if($branchId > 0 && $session != '' && $studentId > 0){
			$sql 	  = "SELECT id,accessories,price FROM `tbl_accessories` WHERE status = 1 AND branch = '$branchId' AND session = '$session' AND class = (SELECT class FROM tbl_admission WHERE studentid = '$studentId') AND CALC_STOCK(tbl_accessories.id) > 0";	
			//echo $sql;exit;
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	
	case "getReadmit":{	
		$branchId = $crud->escape_string($_REQUEST['branchId']);
		$session  = $crud->escape_string($_REQUEST['session']);
		$class    = $crud->escape_string($_REQUEST['reclass']);
		if($branchId > 0 && $session != '' && $class > 0){
			//$chkquery = $crud->countRec("SELECT studentid FROM (SELECT studentid,(SELECT COUNT(1) as pending FROM tbl_installment WHERE tbl_installment.aid = tbl_admission.id AND tbl_installment.paystatus = 0) as pending FROM tbl_admission WHERE status = 1 AND admission_type = 1 AND session = '$session' AND branchid = '$branchId') T WHERE T.pending = 0");
			$sql 	  = "SELECT id,sname FROM tbl_student WHERE status = 1 AND branch = '$branchId' AND id IN (SELECT studentid FROM (SELECT studentid,(SELECT COUNT(1) as pending FROM tbl_installment WHERE tbl_installment.aid = tbl_admission.id AND tbl_installment.paystatus = 0) as pending FROM tbl_admission WHERE status = 1 AND admission_type = 1 AND session = '$session' AND branchid = '$branchId' AND class = '$class') T WHERE T.pending = 0)";	
			
			//echo $sql;exit;
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	case "checkFine":{	
		$installmentId = $crud->escape_string($_REQUEST['installmentId']);
		$admissionId   = $crud->escape_string($_REQUEST['admissionId']);
		if($installmentId > 0 && $admissionId > 0){
			$sql = "SELECT instdate,installamt,(SELECT defaultdays FROM tbl_admission WHERE tbl_admission.id = tbl_installment.aid) as defaultdays,(SELECT fine_charge_per_day FROM tbl_admission WHERE tbl_admission.id = tbl_installment.aid) as per_day_charge FROM tbl_installment WHERE id = '$installmentId' AND aid = '$admissionId' AND paystatus = 0";
			
			$res      = $crud->getData($sql);
			//print_r($res);exit;
			if(!empty($res)){
				$instdate   	  = $res[0]['instdate'];
				$installamt 	  = $res[0]['installamt'];
				$defaultdays	  = $res[0]['defaultdays'];
				$per_day_charge   = $res[0]['per_day_charge'];
				
				$daysDiff = dateDiffInDays($instdate,date('Y-m-d'));
				if($daysDiff > $defaultdays && $per_day_charge > 0){
					$perDaycharge = ($installamt*($per_day_charge/100))*$daysDiff;
				}else{
					$perDaycharge = '0.00';
					$$daysDiff    = 0;
				}
				
				echo json_encode(array("status" => 200, 'totalfine' => round($perDaycharge,2), 'daysexceed' => $daysDiff, 'daycharge' => $per_day_charge));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	
	case "getSaledtls":{	
		$invid = $crud->escape_string($_REQUEST['invid']);
		if($invid > 0){
			$sql = "SELECT *,(SELECT accessories FROM tbl_accessories WHERE tbl_accessories.id = tbl_accessories_stock.accessories) as accessories FROM `tbl_accessories_stock` WHERE transaction_id = '$invid'";
			
			$res      = $crud->getData($sql);
			//print_r($res);exit;
			if(!empty($res)){
				
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
		}else{
			echo json_encode(array("status" => 500));
		}
	}break;
	
	
	case "getAllstudentforreport":{	
		$branchId = ($_REQUEST['branchId'] != '')?$crud->escape_string($_REQUEST['branchId']):0;
		$session  = ($_REQUEST['session'] != '')?$crud->escape_string($_REQUEST['session']):'';
		$class    = ($_REQUEST['selClass'] != '')?$crud->escape_string($_REQUEST['selClass']):0;
			$sql 	  = "SELECT studentid,(SELECT sname from tbl_student WHERE tbl_student.id = tbl_admission.studentid) as studname FROM `tbl_admission` WHERE status = 1";	
			//echo $sql;exit;
			if($branchId > 0){
				$sql 	  .= " AND branchid = '$branchId'";
			}
			if($session != ''){
				$sql 	  .= " AND session = '$session'";
			}
			if($class > 0){
				$sql 	  .= " AND class = '$class'";
			}
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
	}break;
	
	
	case "getnumstud":{	
		$session  = ($_REQUEST['session'] != '')?$crud->escape_string($_REQUEST['session']):'';
			$sql 	  = "SELECT studentid,(SELECT sname from tbl_student WHERE tbl_student.id = tbl_admission.studentid) as studname FROM `tbl_admission` WHERE status = 1";	
			//echo $sql;exit;
			if($branchId > 0){
				$sql 	  .= " AND branchid = '$branchId'";
			}
			if($session != ''){
				$sql 	  .= " AND session = '$session'";
			}
			if($class > 0){
				$sql 	  .= " AND class = '$class'";
			}
			$res      = $crud->getData($sql);
			//print_r($res);
			if(!empty($res)){
				echo json_encode(array("status" => 200, 'res' => $res));
			}else{
				echo json_encode(array("status" => 500));
			}
	}break;
	
	
	case "getAllnewstud":{	
		$session  = ($_REQUEST['session'] != '')?$crud->escape_string($_REQUEST['session']):'';
			if($_REQUEST['session'] != ''){
				$sql 	  = "SELECT month,(SELECT COUNT(1) FROM tbl_student WHERE MONTH(tbl_student.entry_date) = tbl_month.month  AND YEAR(CURDATE()) = YEAR(tbl_student.entry_date)) as stud FROM `tbl_month`";	
				//echo $sql;exit;
				$res      = $crud->getData($sql);
				//print_r($res);exit;
				if(!empty($res)){
					echo json_encode(array("status" => 200, 'res' => $res));
				}else{
					echo json_encode(array("status" => 500));
				}
			}else{
				echo json_encode(array("status" => 500));
			}
	}break;
	
	
	case "getAllnewadmin":{	
			$session  = ($_REQUEST['session'] != '')?$crud->escape_string($_REQUEST['session']):'';
			if($_REQUEST['session'] != ''){
				$sql 	  = "SELECT month,(SELECT COUNT(1) FROM tbl_admission WHERE MONTH(tbl_admission.entry_date) = tbl_month.month  AND tbl_admission.session = '$session') as stud FROM `tbl_month`";	
				//echo $sql;exit;
				$res      = $crud->getData($sql);
				//print_r($res);exit;
				if(!empty($res)){
					echo json_encode(array("status" => 200, 'res' => $res));
				}else{
					echo json_encode(array("status" => 500));
				}
			}else{
				echo json_encode(array("status" => 500));
			}
	}break;
	
	case "getAllexp":{	
			$session  = ($_REQUEST['session'] != '')?$crud->escape_string($_REQUEST['session']):'';
			if($_REQUEST['session'] != ''){
				$sql 	  = "SELECT month,(SELECT COALESCE(SUM(amount),0) FROM tbl_expences WHERE MONTH(tbl_expences.exp_date) = tbl_month.month  AND tbl_expences.session = '$session') as stud FROM `tbl_month`";	
				//echo $sql;exit;
				$res      = $crud->getData($sql);
				//print_r($res);exit;
				if(!empty($res)){
					echo json_encode(array("status" => 200, 'res' => $res));
				}else{
					echo json_encode(array("status" => 500));
				}
			}else{
				echo json_encode(array("status" => 500));
			}
	}break;
	
	
	case "getAllrevenue":{	
			$session  = ($_REQUEST['session'] != '')?$crud->escape_string($_REQUEST['session']):'';
			if($_REQUEST['session'] != ''){
				$sql 	  = "SELECT A.month,(SELECT COALESCE(SUM(totalVal),0) FROM tbl_sale WHERE MONTH(tbl_sale.sale_date) = A.month  AND tbl_sale.session = '$session') as accso,COALESCE((SELECT (installamt+totexpaid) FROM tbl_temp_calc_val WHERE MONTH(tbl_temp_calc_val.installdate) = A.month AND tbl_temp_calc_val.financial_year = '$session'),0) as totval FROM tbl_month A";	
				$res      = $crud->getData($sql);
				//print_r($res);exit;
				if(!empty($res)){
					echo json_encode(array("status" => 200, 'res' => $res));
				}else{
					echo json_encode(array("status" => 500));
				}
			}else{
				echo json_encode(array("status" => 500));
			}
	}break;
}


?>  

